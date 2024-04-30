<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index(){
        $subscribers = Subscriber::all();
        return view('admin.subscriber.index' , compact('subscribers'));
    }

    public function DeteleSubscriber($id){
        $subscriber = Subscriber::find($id);
        $subscriber->delete();
 
         return redirect()->back()->with('warning', 'User Subscriber DELETED SUCCESSFULY');
 
        
     }
}