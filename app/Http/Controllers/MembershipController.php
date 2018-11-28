<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use App\Membership;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $member = Members::where("member_id", $id)->first();
        return view("membership/create")->with("member", $member);
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
            "member_id" => "required",
            "start_date" => "required|date",
            "end_date" => "nullable|date",
            //nullable is required to prevent errors see https://laravel.com/docs/5.7/validation#validation-quickstart
        ]);

        //Create member

        //Enter into fields
        $membership = new Membership;
        $membership->member_id = $request->input("member_id");
        $membership->start_date = $request->input("start_date");
        $membership->end_date = $request->input("end_date");
        
        
        //Store member
        $membership->save();

        return redirect("/members")->with("success", "Membership Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
