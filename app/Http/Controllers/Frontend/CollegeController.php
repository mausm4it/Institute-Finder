<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\College;
use App\Models\Review;
use App\Models\Advertisement;



class CollegeController extends Controller
{
    public function index($slug){
     $college = College::where('slug', $slug)->firstOrFail();
     $college->increment('views');

  
     $total_rating = $college->reviews->sum('rating_number');
     $total_count = $college->reviews->count();
     $avarage_rating = ($total_count > 0) ? $total_rating / $total_count: 0;

     $ads = Advertisement::get()->first();
  //    $videoUrl = $college->video_link;

  //    if (!function_exists('embedVideo')) {
  //     function embedVideo($url)
  //     {
       
  //         if (strpos($url, 'youtube.com') !== false) {
           
  //             $videoId = explode('v=', parse_url($url, PHP_URL_QUERY))[1];
  //             return "https://www.youtube.com/embed/$videoId";
  //         }
  
  //         return $url;
  //     }
  // }
     
  //    $embedUrl = embedVideo($videoUrl);


     
     return view('frontend.pages.college_details', compact('college' ,'total_count', 'avarage_rating', 'ads'));
    }


    public function Review(Request $request){

        $request->validate([
            'review_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
          ]);

        $review = new Review();
        // if ($request->hasFile('review_image')) {
          
        //     if ($review->review_image) {
        //         Storage::delete($review->review_image);
        //     }
    
          
    
        //     $imagePath = $request->file('review_image')->storeAs('review_image', 'review_image' . now()->format('YmdHis') . '.' . $request->file('review_image')->getClientOriginalExtension());
        //     $review->review_image = $imagePath;
           
        // }

        $review->user_id = auth()->user()->id;
        $review->rating_number = $request->input('rating_number');
        $review->comment = $request->input('comment');
        $review->college_id = $request->input('college_id');
        $review->save();
        return redirect()->back()->with('success', 'RATING SUCCESSFULY POST');

       }


}