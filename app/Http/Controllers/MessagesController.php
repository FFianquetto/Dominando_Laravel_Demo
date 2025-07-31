<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

       
        return redirect()->route('contact')->with('success', __('app.message_sent'));
    }
}
