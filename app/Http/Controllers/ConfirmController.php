<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmController as MailConfirmController;
use App\Mail\Pending as MailPending;
use App\Mail\PendingController;
use App\Models\Appointment;
use App\Models\category;
use App\Models\Doctor;
use App\Models\product;
use App\Models\SoldProduct;
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
        $appointments = Appointment::where('status', '=', 'confirmed')->orderBy('created_at','ASC')->get();
        $doctors = Doctor::all();
        $products = product::all();
        return view('Petworks.admin.appointment.Confrm.index', compact('appointments', 'doctors', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function show($id)
    {
        return view('Petworks.admin.appointment.Confrm.show', compact('id'));
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
            $appointment->update([
                'status' => 'done',
                'complaint' => $request->input('complaint'),
                'weight' => $request->input('weight'),
                'hr' => $request->input('hr'),
                'rr' => $request->input('rr'),
                'temperature' => $request->input('temperature'),
                'diet' => $request->input('diet'),
                'next_visit' => $request->input('next_visit'),
                'doctor_id' => $request->input('doctor_id'),
                'color' => $request->input('color'),
                'comment' => $request->input('comment'),
            ]);
            /* kaya ako nag gawa ng sold products ay  para dyan ilagay yung mga product na nagamit sa appointment*/
            /* dapat nga madami to pero eto muna sa ngayon para mapakita ko lang sayo at sa client mo na ganan mangyayari */
            /* tapos may babaguhin pa sa sales.. */
            $product = SoldProduct::create([
                'appointment_id' => $appointment->id,
                'product_id' => $request->input('product_id'),
            ]);
            /* palitan ng message
                dapat yung message ay success na yung appointment or tapos na something like that :D
            */
            toast()->success('Success', 'Done')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
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
    }

    public function reply(Request $request, $id)
    {
        /* try {
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
        } */
    }
}
