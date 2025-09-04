<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $message = "we are testing this message";
        $headerMessage = "We are the best to do our work here this is testing ";
        return view('includes.main', compact('message', 'headerMessage'));    }
}
