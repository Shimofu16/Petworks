<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $albums = Album::has('photos')->orderBy('id', 'desc')->paginate(3);
        $doctors = Doctor::all();
        return view('Petworks.homecontents.home.index', compact('albums', 'doctors'));
    }
    public function guidlines()
    {
        return view('Petworks.homecontents.home.guidlines');
    }
    public function calendar()
    {
        // Get the start and end dates of the current week
        $startDate = date('Y-m-d', strtotime('monday this week'));
        $endDate = date('Y-m-d', strtotime('sunday this week'));

        // Retrieve all appointments that occur within the current week
        $appointments = Appointment::whereBetween('next_visit', [$startDate, $endDate])->where('status', '=', 'pending')->get();
        return view('Petworks.homecontents.home.calendar', compact('appointments'));
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
    public function form()
    {
        return view('Petworks.homecontents.home.login');
    }
}
