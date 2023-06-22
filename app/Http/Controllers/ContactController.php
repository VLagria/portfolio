<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function submit_contact(Request $request){
        
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message'=> $request->message
        ];
       
        Mail::to('vlagria3@gmail.com')->send(new ContactFormMail($details));
       
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }

}
