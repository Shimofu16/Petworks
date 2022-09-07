<?php

namespace App\Http\Controllers;

use App\Mail\Contact as MailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('Petworks.admin.contact.index', compact('contacts'));
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
        Contact::create(
            $request->all()
        );
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }
    public function reply(Request $request)
    {
        try {
            $details = [
                'message' => $request->input('message'),
            ];
            Mail::to($request->input('email'))->send(new MailContact($details));
            toast()->success('Success', 'Your message has been sent')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('admin.contact.index');
            return back();
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return back();
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            toast()->warning('Warning!', 'The message has been deleted')->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->route('admin.contact.index');
        } catch (\Throwable $th) {
            toast()->warning('Warning', $th->getMessage())->autoClose(3000)->animation('animate__fadeInRight', 'animate__fadeOutRight')->width('400px');
            return redirect()->back();
        }
        return back();
    }
}
