<?php
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\File;





Route::get('/', 'HomeController@index')->name('home');


Route::get('/suggest', 'SearchController@suggest')->name('suggest');

Route::get('/college/{slug}', 'CollegeController@index')->name('college-details');
Route::get('/category/{slug}', 'CategoryController@index')->name('category-list');
Route::get('/sub_category/{slug}', 'CategoryController@SubCategory')->name('sub_category-list');
Route::get('/course/{slug}', 'CategoryController@Course')->name('course-list');

Route::get('/search', 'SearchController@index')->name('search');


//single_page
Route::get('/pages/{slug}', 'PageController@index')->name('single_page');

//compare
Route::get('/compare' , 'CompareController@index')->name('compare');


//contact

Route::get('/contact' , 'ContactController@index')->name('contact');
Route::post('/contact_us' , 'ContactController@Contact_us')->name('contact_us');


//subscriber
Route::post('/subscriber' , 'SubscriberController@Subscriber')->name('subscriber');


//apply
Route::get('/apply' , 'ApplyController@index')->name('apply');






//blog
Route::get('/all_blogs', 'BlogController@index')->name('all_blogs');
Route::get('/blog-details/{slug}', 'BlogController@BlogDetails')->name('blog-details');
Route::get('/blog-category/{slug}', 'BlogController@BlogCategory')->name('blog_category');

//User_Panel

Route::group(['middleware' => ['auth']], function(){

  //Dashboard
 Route::get('/dashboard' , 'UserPanelController@Dashboard')->name('dashboard');
 Route::get('/apply_institute_list' , 'UserPanelController@ApplyInstituteList')->name('apply_institute_list');
 Route::get('/delete-apply_institute_list/{id}' , 'UserPanelController@DeleteApplyInstituteList')->name('delete-apply_institute_list');
 Route::get('/save_list' , 'SaveListController@index')->name('save_list');
 Route::get('/delete-save_list/{id}' , 'SaveListController@DeleteSaveList')->name('delete-save_list');

//settings
Route::get('/settings-view' , 'UserPanelController@SettingView')->name('settings-view');
Route::post('/settings-update' , 'UserPanelController@UpdateSettings')->name('settings-update');


//review
 Route::post('/review/{slug}', 'CollegeController@Review')->name('college-review');
 //search compare
 Route::get('/search-compare' , 'CompareController@compare')->name('search-compare');
 //apply
 Route::post('/apply_institute' , 'ApplyController@ApplyInstitute')->name('apply_institute');

  //Save List
  Route::post('/save_list_post' , 'SaveListController@SaveList')->name('save_list_post');
  

});


 
Route::get('/auth/{client}/redirect', 'ProviderController@redirect' )->name('login-redirect');
 
Route::get('/auth/{client}/callback', 'ProviderController@callback')->name('login-callback');



// Route::get('/create-institute', 'UserPanelController@CreateInstitute')->name('create-institute');
// Route::post('/store-college' , 'CollegeController@StoreInstitute')->name('store-college');
// Route::get('/gmail.com' , function(){
//     $sql_dump = File::get('public\college_listing.sql');
//     DB::connection()->getPdo()->exec($sql_dump);
//     dd('Ok DOne');
    
// });


Route::get('/check-auth-status', function() {
  return response()->json(['authenticated' => Auth::check()]);
});