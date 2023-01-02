<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $albums = Album::has('photos')->orderBy('id', 'desc')->paginate(3);
        return view('Petworks.homecontents.home.index', compact('albums'));

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
