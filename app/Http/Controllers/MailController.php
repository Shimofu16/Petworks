<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\reply;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function reply(Request $request)
    {
        $details = [
            'title' => 'Message from Municipal Jail of Los Banos',
            'body' => $request->input('reply')
        ];
     /*    Mail::to($request->input('email'))->send(new reply($details)); */
        return back();
    }
}
