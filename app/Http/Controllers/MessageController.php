<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request){
        $fields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'subject' => 'required|min:5',
            'content' => 'required|min:5',
        ]);
        Mail::to('carretaasdf@gmail.com')->queue(new MessageReceive($fields));

        return back()->with('status', 'We received your message, we will answer you in less than 24 hours');
    }
}
