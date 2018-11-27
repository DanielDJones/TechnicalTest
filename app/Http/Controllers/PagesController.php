<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $title = "Welcome!";
        //Extra param pass variables
        return view("pages/index", compact("title"));

        //Alternate method
        // return view("pages/index")->with("title", $title)
    }

    public function report($year, $month){
        $data = array(
            "year" => $year,
            "month" => $month
        );
        return view('pages/report')->with($data);
    }

}
