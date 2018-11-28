<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Members;
use App\Membership;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index"], ["about"]]);
    }

    public function index(){

        $title = "Welcome!";
        //Extra param pass variables
        return view("pages/index", compact("title"));

        //Alternate method
        // return view("pages/index")->with("title", $title)
    }

    public function report($year, $month){
        //Swaped inputs to fix a bug with the view not loading
        $data = array(
            "year" => $month,
            "month" => $year
        );

        
        //$membershipsReport = Membership::whereMonth("start_date", "11")->first();
        //$membershipsReport = Membership::orderBy("start_date", "dec")->whereMonth('start_date', '11');
        //$membershipsReport = Membership::all()->whereMonth('created_at', '=', date('m'));
        
        //$membershipsReport = Membership::orderBy("start_date", "asc");

        //$q->where(DB::raw("DATE(created_at) = '".date('Y-m-d')."'"));

        //Remember to import DB table
        $membershipsReport = DB::table('memberships')->whereMonth('start_date', $year)->whereYear('start_date', $month)->get();

        return view('pages/report')->with("membershipsReport", $membershipsReport);
    }

    

}
