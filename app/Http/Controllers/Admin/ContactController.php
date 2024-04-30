<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.user_contact.index', compact('contacts'));
    }

     public function DeteleContact($id){
        $contact = Contact::find($id);
        $contact->delete();
 
         return redirect()->back()->with('warning', 'User Contact DELETED SUCCESSFULY');
 
        
     }
}