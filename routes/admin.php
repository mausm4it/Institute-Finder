<?php
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){

    Route::get('/roles', 'RoleController@index')->name('role');

// category
Route::get('/category', 'CategoryController@index')->name('category');
Route::post('/create-category', 'CategoryController@CreateCategory')->name('create-category');
Route::post('/update-category/{id}', 'CategoryController@UpdateCategory')->name('update-category');
Route::get('/delete-category/{id}', 'CategoryController@DeteleCategory')->name('delete-category');

// sub category
Route::get('/sub-category', 'SubCategoryController@index')->name('sub-category');
Route::post('/create-sub-category', 'SubCategoryController@CreateSubCategory')->name('create-sub-category');
Route::post('/update-sub-category/{id}', 'SubCategoryController@UpdateSubCategory')->name('update-sub-category');
Route::get('/delete-sub-category/{id}', 'SubCategoryController@DeteleSubCategory')->name('delete-sub-category');

//blogs and news
Route::get('/blogs', 'BlogController@index')->name('blogs');
Route::get('/create-blog-view', 'BlogController@CreateBlogView')->name('create-blog-view');
Route::get('/update-blog-view/{id}', 'BlogController@UpdateBlogView')->name('update-blog-view');
Route::post('/create-blog', 'BlogController@CreateBlog')->name('create-blog');
Route::post('/update-blog/{id}', 'BlogController@UpdateBlog')->name('update-blog');
Route::get('/delete-blog/{id}', 'BlogController@DeleteBlog')->name('delete-blog');


//categoryBlog
Route::get('/blog-category', 'BlogController@category')->name('blog-category');
Route::post('/create-blog-category', 'BlogController@CreateCategory')->name('create-blog-category');
Route::post('/update-blog-category/{id}', 'BlogController@UpdateCategory')->name('update-blog-category');
Route::get('/delete-blog-category/{id}', 'BlogController@DeteleCategory')->name('delete-blog-category');

//course
Route::get('/course', 'CourseController@index')->name('course');
Route::post('/create-course', 'CourseController@CreateCourse')->name('create-course');
Route::post('/update-course/{id}', 'CourseController@UpdateCourse')->name('update-course');
Route::get('/delete-course/{id}', 'CourseController@DeteleCourse')->name('delete-course');


//course
Route::get('/type-of-college', 'TypeOfCollegeController@index')->name('type-of-college');
Route::post('/create-type-of-college', 'TypeOfCollegeController@CreateTypeOfCollege')->name('create-type-of-college');
Route::post('/update-type-of-college/{id}', 'TypeOfCollegeController@UpdateTypeOfCollege')->name('update-type-of-college');
Route::get('/delete-type-of-college/{id}', 'TypeOfCollegeController@DeteleTypeOfCollege')->name('delete-type-of-college');

//course_duration
Route::get('/course-duration', 'CourseDurationCOntroller@index')->name('course-duration');
Route::post('/create-course-duration', 'CourseDurationCOntroller@CreateCourseDuration')->name('create-course-duration');
Route::post('/update-course-duration/{id}', 'CourseDurationCOntroller@UpdateCourseDuration')->name('update-course-duration');
Route::get('/delete-course-duration/{id}', 'CourseDurationCOntroller@DeteleCourseDuration')->name('delete-course-duration');

//City
Route::get('/city', 'CityController@index')->name('city');
Route::post('/create-city', 'CityController@CreateCity')->name('create-city');
Route::post('/update-city/{id}', 'CityController@UpdateCity')->name('update-city');
Route::get('/delete-city/{id}', 'CityController@DeteleCity')->name('delete-city');

//College
Route::get('/create-college', 'CollegeController@CreateCollege')->name('create-college');
Route::get('/college', 'CollegeController@index')->name('college');
Route::post('/make-college' , 'CollegeController@MakeCollege')->name('make-college');
Route::get('/edit-college/{id}' , 'CollegeController@EditCollege')->name('edit-college');
Route::post('/update-college/{id}' , 'CollegeController@UpdateCollege')->name('update-college');
Route::get('/delete-college/{id}', 'CollegeController@DeteleCollege')->name('delete-college');

//settings
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::post('/update-settings/{id}', 'SettingsController@UpdateSettings')->name('update-settings');

   
});











