<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Allows for members to be used in the file eg Members::all();
use App\Members;
use App\Membership;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //get members by surname and break into pages
        $members = Members::orderBy("surname", "asc")->paginate(10);
        return view("members/index")->with("members", $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("members/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            "forename" => "required",
            "surname" => "required",
            "email" => "required|email",
            "sub_type" => "required",
            //nullable is required to prevent errors see https://laravel.com/docs/5.7/validation#validation-quickstart
            "dateofbirth" => "nullable|date",
            "phonenumber" => "nullable"
        ]);

        //Create member

        //Enter into fields
        $member = new Members;
        $member->forename = $request->input("forename");
        $member->surname = $request->input("surname");
        $member->email = $request->input("email");
        $member->dateofbirth = $request->input("dateofbirth");
        $member->telnumber = $request->input("telnumber");
        $member->sub_type = $request->input("sub_type");
        
        //Store member
        $member->save();

        return redirect("/members")->with("success", "Member Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Members::where("member_id", $id)->first();
        $memberships = Membership::orderBy("start_date", "dec")->paginate(10);
        
        
        //return view("members/show")->with("member", $member, "Memberships", $memberships);
        //Pass the two sets of results to the view
        return view("members/show", ["member"=> $member, "memberships"=> $memberships]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Members::where("member_id", $id)->first();
        return view("members/edit")->with("member", $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request, [
            "forename" => "required",
            "surname" => "required",
            "email" => "required|email",
            "sub_type" => "required",
            //nullable is required to prevent errors see https://laravel.com/docs/5.7/validation#validation-quickstart
            "dateofbirth" => "nullable|date",
            "phonenumber" => "nullable"
        ]);

        //Create member

        //Enter into fields
        $member = $member = Members::where("member_id", $id)->first();
        $member->forename = $request->input("forename");
        $member->surname = $request->input("surname");
        $member->email = $request->input("email");
        $member->dateofbirth = $request->input("dateofbirth");
        $member->telnumber = $request->input("telnumber");
        $member->sub_type = $request->input("sub_type");
        //Store member
        $member->save();

        return redirect("/members")->with("success", "Member Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = $member = Members::where("member_id", $id)->first();
        $member->delete();
        return redirect("/members")->with("success", "Member Removed");
    }
}
