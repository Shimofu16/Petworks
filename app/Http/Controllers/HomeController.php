<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Petworks.homecontents.home.index');
    }
    public function guidlines()
    {
        return view('Petworks.homecontents.home.guidlines');
    }
    public function calendar()
    {
        return view('Petworks.homecontents.home.calendar');
    }
    public function appointment()
    {
        $services = service::all();
        return view('Petworks.homecontents.home.appointment', compact('services'));
    }
    public function existing()
    {
        return view('Petworks.homecontents.home.existing');
    }
    public function form(){
        return view('Petworks.homecontents.home.login');
    }
}
