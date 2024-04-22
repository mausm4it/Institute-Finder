<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\College;



Route::get('/', 'HomeController@index')->name('home');
Route::get('/suggest', 'SearchController@suggest')->name('suggest');

Route::get('/college/{slug}', 'CollegeController@index')->name('college-details');


Route::get('/gmail.com' , function(){
    $sql_dump = File::get('public\college_listing.sql');
    DB::connection()->getPdo()->exec($sql_dump);
    dd('Ok DOne');
    
});
Route::get('/search', 'SearchController@index')->name('search');

//User_Panel

Route::group(['middleware' => ['auth']], function(){

Route::get('/dashboard' , 'UserPanelController@Dashboard')->name('dashboard');
Route::post('/review/{slug}', 'CollegeController@Review')->name('college-review');
// Route::get('/create-institute', 'UserPanelController@CreateInstitute')->name('create-institute');
// Route::post('/store-college' , 'CollegeController@StoreInstitute')->name('store-college');



});



