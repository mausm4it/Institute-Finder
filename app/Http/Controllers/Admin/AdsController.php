<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdsController extends Controller
{
    public function index(){
      $ads = Advertisement::get()->first();
        return view('admin.ads.index' , compact('ads') );
    }

    public function UpdateAds(Request $request){

        $ads =Advertisement::get()->first();

        $ads->banner = $request->banner;
        $ads->box = $request->box;
        $ads->save();

        return redirect()->back()->with('success', 'Ads Update SUCCESSFULY');
    
    }
}