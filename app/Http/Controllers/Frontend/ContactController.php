<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
       
        return view('frontend.pages.contact');
       }

    public function Contact_us(Request $request){

       $contact = new Contact();
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->phone = $request->phone;
       $contact->subject = $request->subject;
       $contact->message = $request->message;
       $contact->save();
       return redirect()->back()->with('success', 'Your Message Send Successfully We Will Contact your mail Soon');
    
       }
}