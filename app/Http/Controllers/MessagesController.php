<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageRecieved;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:255',
            'subject' => 'required',
            'content' => 'required|max:255'
        ]);

       
        //return redirect()->route('contact')->with('success', __('app.message_sent'));

        Mail::to('fer@gmail.com')->send(new MessageRecieved());
        return 'Mensaje enviado';
    }


}
