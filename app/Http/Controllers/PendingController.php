<?php

namespace App\Http\Controllers;

use App\Models\pending;
use App\Http\Controllers\Controller;
use App\Mail\Pending as MailPending;
use App\Models\Appointment;
use Illuminate\Http\Request;

class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendings = Appointment::where('status', '=', 1)->get();
        return view('Petworks.admin.pending.index', compact('pendings'));
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
     * @param  \App\Models\pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function show(pending $pending)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function edit(pending $pending)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pending $pending)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pending  $pending
     * @return \Illuminate\Http\Response
     */
    public function destroy(pending $pending)
    {
        //
    }
}
