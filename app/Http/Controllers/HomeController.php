<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return view('Petworks.homecontents.home.index');

    }
    public function guidlines(){
        return view('Petworks.homecontents.home.guidlines');

    }
    public function appointment(){
        return view('Petworks.homecontents.home.appointment');

    }
    public function existing(){
        return view('Petworks.homecontents.home.existing');

    }
}
