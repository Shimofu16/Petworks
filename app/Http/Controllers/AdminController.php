<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Owner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*         $pendingCount = Appointment::where('pending', '=', 1)->count(); */
        $pendingCount = $this->getAppointmentCount('pending');
        $confirmCount = $this->getAppointmentCount('confirmed');
        $requestCount = $this->getAppointmentCount('request');
        $cancelledCount = $this->getAppointmentCount('cancelled');
        $contactCount = Contact::count();
        //$recordCount = Appointment::count();
        $recordCount = Owner::whereHas(
            'appointments',
            function ($query) {
                $query->where('type', '=', 'old client');
            }
        )->count();

        $owners = Owner::whereHas(
            'appointments',
            function ($query) {
                $query->where('type', '=', 'old client');
            }
        )->orderBy('name', 'ASC')->take(5)->get();
        // Get the start and end dates of the current week
        $startDate = date('Y-m-d', strtotime('monday this week'));
        $endDate = date('Y-m-d', strtotime('sunday this week'));

        // Retrieve all appointments that occur within the current week
        $appointments = Appointment::whereBetween('next_visit', [$startDate, $endDate])->get();

        return view('Petworks.admin.dashboard.index', compact('recordCount', 'confirmCount', 'pendingCount', 'cancelledCount', 'requestCount', 'owners', 'contactCount', 'appointments'));
    }
    private function getAppointmentCount($status)
    {
        return Appointment::with('owner')->where('status', '=', $status)
            ->whereHas('owner', function ($query) {
                $query->where('hasVerifiedEmail', '=', 1);
            })
            ->count();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
