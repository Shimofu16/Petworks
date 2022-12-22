<?php

namespace App\Http\Controllers;

use App\Mail\Pending;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Owner;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $appointments = Appointment::where('status', '=', 'request')->orderBy('created_at','ASC')->get();
        return view('Petworks.admin.appointment.request.index', compact('appointments'));
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
        try {
            $owner = Owner::where('email', '=', $request->input('email'))
                ->where('number', '=', $request->input('number'))
                ->firstOrFail();
            $pet = Pet::where('owner_id', '=', $owner->id)
                ->where('pet_name', '=', $request->input('pet_name'))
                ->firstOrFail();
            Appointment::create(
                [
                    'owner_id' => $owner->id,
                    'pet_id' => $pet->id,
                    'reason_id' => $request->input('reason_id'),
                    'date' => $request->input('date'),
                    'time' => $request->input('time'),
                ]
            );
        } catch (\Throwable $th) {
            $owner_id = Owner::create(
                [
                    'name' => $request->input('name'),
                    'address' => $request->input('address'),
                    'email' => $request->input('email'),
                    'number' => $request->input('number'),
                ]
            )->id;


            $pet_id = Pet::create(
                [
                    'owner_id' => $owner_id,
                    'pet_name' => $request->input('pet_name'),
                    'age' => $request->input('age'),
                    'gender' => $request->input('gender'),
                    'birthdate' => $request->input('birthdate'),
                    'breed' => $request->input('breed'),
                    'pet_type' => $request->input('pet_type'),
                ]
            )->id;
            Appointment::create(
                [
                    'owner_id' => $owner_id,
                    'pet_id' => $pet_id,
                    'reason_id' => $request->input('reason_id'),
                    'date' => $request->input('date'),
                    'time' => $request->input('time'),
                ]
            );
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $appointment = Appointment::where('id', '=', $id)->firstOrFail();
            $appointment->update([
                'status'=>"pending"
            ]);
            /*
                TODO: ayusin mo ito
                FIXME:dapat ang ilalagay mo sa mail ay naka pending yung appointment nya.
            */
            /* $details = [
                'name' => $appointment->owner->name,
                'date' => $appointment->date,
                'time' => $appointment->time,
                'email' =>  $appointment->owner->email,
                'number' => $appointment->owner->number,
                'address' => $appointment->owner->address,
            ];
           Mail::to($appointment->owner->email)->send(new Pending($details)); */  /* email */
            toast()->success('Success', 'You accepted the request')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('admin.pending.index');
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
