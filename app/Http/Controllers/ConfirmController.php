<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmController as MailConfirmController;
use App\Mail\Pending as MailPending;
use App\Mail\PendingController;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Mail\PendingMail;
use Illuminate\Support\Facades\Mail;







class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('status', '=', 1)->get();
        return view('Petworks.admin.Confrm.index', compact('appointments'));
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
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function show($confirm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function edit($confirm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $appointment = Appointment::where('id', '=', $id)->firstOrFail();
            $appointment->status = 1;
            $appointment->doctor_id = $request->input('doctor_id');
            $appointment->update();
            $details = [
                'name' => $appointment->owner->name,
                'date' => $appointment->date,
                'time' => $appointment->time,
                'email' =>  $appointment->owner->email,
                'number' => $appointment->owner->number,
                'address' => $appointment->owner->address,
            ];
            Mail::to($appointment->owner->email)->send(new MailConfirmController($details));   /* email */
            toast()->success('Success', 'You confirmed the request')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('admin.confirm.index');
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Confirm  $confirm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* try {
            $appointment = Appointment::where('id', '=', $id)->firstOrFail();
            $appointment->pending = 1;
            $appointment->update();
            $data = [
                'message' =>
            ];
             Mail::to($appointment->owner->email)->send(new PendingMail());
            toast()->warning('Warning', 'The request is pending')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return back();
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return back();
        } */
    }

    public function reply(Request $request, $id)
    {
        try {
            $details = [
                'message' => $request->input('message'),
            ];
            $appointment = Appointment::where('id', '=', $id)->firstOrFail();
            $appointment->pending = 1;
            $appointment->update();
            Mail::to($appointment->owner->email)->send(new MailPending($details));
            toast()->success('Success', 'Your message has been sent')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('admin.appointment.index');
            return back();
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return back();
        }
    }
}
