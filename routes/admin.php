<?php
use Illuminate\Support\Facades\Route;


Route::group([ 'middleware' => ['auth']], function(){


Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    
// category
Route::middleware(['role_or_permission:control category'])->group(function () {
 Route::get('/category', 'CategoryController@index')->name('category');
 Route::post('/create-category', 'CategoryController@CreateCategory')->name('create-category');
 Route::post('/update-category/{id}', 'CategoryController@UpdateCategory')->name('update-category');
 Route::get('/delete-category/{id}', 'CategoryController@DeteleCategory')->name('delete-category');
});
// sub category

Route::middleware(['role_or_permission:control sub category'])->group(function () {
 Route::get('/sub-category', 'SubCategoryController@index')->name('sub-category');
 Route::post('/create-sub-category', 'SubCategoryController@CreateSubCategory')->name('create-sub-category');
 Route::post('/update-sub-category/{id}', 'SubCategoryController@UpdateSubCategory')->name('update-sub-category');
 Route::get('/delete-sub-category/{id}', 'SubCategoryController@DeteleSubCategory')->name('delete-sub-category');
});
//blogs and news
Route::middleware(['role_or_permission:view article'])->group(function () {
 Route::get('/blogs', 'BlogController@index')->name('blogs');
});

Route::middleware(['role_or_permission:create article'])->group(function () {
    Route::get('/create-blog-view', 'BlogController@CreateBlogView')->name('create-blog-view');
    Route::post('/create-blog', 'BlogController@CreateBlog')->name('create-blog');
});


Route::middleware(['role_or_permission:update article'])->group(function () {
   Route::get('/update-blog-view/{id}', 'BlogController@UpdateBlogView')->name('update-blog-view');
   Route::post('/update-blog/{id}', 'BlogController@UpdateBlog')->name('update-blog');
});


Route::middleware(['role_or_permission:delete article'])->group(function () {
 Route::get('/delete-blog/{id}', 'BlogController@DeleteBlog')->name('delete-blog');
});

//publish Blog
Route::middleware(['role_or_permission:publish article'])->group(function () {
    Route::post('/publish-blog/{id}', 'BlogController@Publish_Blog')->name('publish-blog');
   });


//categoryBlog
Route::middleware(['role_or_permission:control blog category'])->group(function () {
 Route::get('/blog-category', 'BlogController@category')->name('blog-category');
 Route::post('/create-blog-category', 'BlogController@CreateCategory')->name('create-blog-category');
 Route::post('/update-blog-category/{id}', 'BlogController@UpdateCategory')->name('update-blog-category');
 Route::get('/delete-blog-category/{id}', 'BlogController@DeteleCategory')->name('delete-blog-category');
});



//Pages
Route::middleware(['role_or_permission:control page'])->group(function () {
    Route::get('/pages', 'PagesController@index')->name('pages');
    Route::post('/create-page', 'PagesController@CreatePage')->name('create-page');
    Route::get('/update-page-view/{id}', 'PagesController@UpdatePageView')->name('update-page-view');
    Route::post('/update-page/{id}', 'PagesController@UpdatePage')->name('update-page');
    Route::get('/delete-page/{id}', 'PagesController@DeletePage')->name('delete-page');
   });
   

//course
Route::middleware(['role_or_permission:control course'])->group(function () {
 Route::get('/course', 'CourseController@index')->name('course');
 Route::post('/create-course', 'CourseController@CreateCourse')->name('create-course');
 Route::post('/update-course/{id}', 'CourseController@UpdateCourse')->name('update-course');
 Route::get('/delete-course/{id}', 'CourseController@DeteleCourse')->name('delete-course');
});


//course_fee
Route::middleware(['role_or_permission:control course fee'])->group(function () {
    Route::get('/course_fee', 'CourseFeeController@index')->name('course_fee');
    Route::post('/create-course_fee', 'CourseFeeController@CreateCourse_fee')->name('create-course_fee');
    Route::get('/edit-course_fee/{id}', 'CourseFeeController@EditCourse_fee')->name('edit-course_fee');
    Route::post('/update-course_fee/{id}', 'CourseFeeController@UpdateCourse_fee')->name('update-course_fee');
    Route::get('/delete-course_fee/{id}', 'CourseFeeController@DeteleCourse_fee')->name('delete-course_fee');
   });




//Type Of College
Route::middleware(['role_or_permission:control type of institute'])->group(function () {
 Route::get('/type-of-college', 'TypeOfCollegeController@index')->name('type-of-college');
 Route::post('/create-type-of-college', 'TypeOfCollegeController@CreateTypeOfCollege')->name('create-type-of-college');
 Route::post('/update-type-of-college/{id}', 'TypeOfCollegeController@UpdateTypeOfCollege')->name('update-type-of-college');
 Route::get('/delete-type-of-college/{id}', 'TypeOfCollegeController@DeteleTypeOfCollege')->name('delete-type-of-college');
});


//course_duration
Route::middleware(['role_or_permission:control course duration'])->group(function () {
 Route::get('/course-duration', 'CourseDurationCOntroller@index')->name('course-duration');
 Route::post('/create-course-duration', 'CourseDurationCOntroller@CreateCourseDuration')->name('create-course-duration');
 Route::post('/update-course-duration/{id}', 'CourseDurationCOntroller@UpdateCourseDuration')->name('update-course-duration');
 Route::get('/delete-course-duration/{id}', 'CourseDurationCOntroller@DeteleCourseDuration')->name('delete-course-duration');
});



//Campus
Route::middleware(['role_or_permission:control campus area'])->group(function () {
 Route::get('/campus', 'CampusController@index')->name('campus');
 Route::post('/create-campus', 'CampusController@CreateCampus')->name('create-campus');
 Route::post('/update-campus/{id}', 'CampusController@UpdateCampus')->name('update-campus');
 Route::get('/delete-campus/{id}', 'CampusController@DeteleCampus')->name('delete-campus');
});

//College

//view College
Route::middleware(['role_or_permission:view institute'])->group(function () {
    Route::get('/college', 'CollegeController@index')->name('college');
});


//create College
Route::middleware(['role_or_permission:create institute'])->group(function () {
    Route::post('/make-college' , 'CollegeController@MakeCollege')->name('make-college');
    Route::get('/create-college', 'CollegeController@CreateCollege')->name('create-college');
});


//update College
Route::middleware(['role_or_permission:update institute'])->group(function () {
    Route::get('/edit-college/{id}' , 'CollegeController@EditCollege')->name('edit-college');
    Route::post('/update-college/{id}' , 'CollegeController@UpdateCollege')->name('update-college');
});


//delete College
Route::middleware(['role_or_permission:delete institute'])->group(function () {
 Route::get('/delete-college/{id}', 'CollegeController@DeteleCollege')->name('delete-college');
});


//publish College
Route::middleware(['role_or_permission:publish institute'])->group(function () {
    Route::post('/publish-college/{id}', 'CollegeController@Publish_Institute')->name('publish-college');
   });


//Settings 
Route::middleware(['role_or_permission:control settings'])->group(function () {
 Route::get('/settings', 'SettingsController@index')->name('settings');
 Route::post('/update-settings/{id}', 'SettingsController@UpdateSettings')->name('update-settings');
});

//User_role

    //User
Route::middleware(['role_or_permission:control user'])->group(function () {
    Route::get('/users', 'UserController@index')->name('users');
    Route::post('/create-users', 'UserController@CreateUser')->name('create-users');
    Route::post('/update-users/{id}', 'UserController@UpdateUser')->name('update-users');
    Route::get('/delete-users/{id}', 'UserController@DeteleUser')->name('delete-users');
    
});
    //Role
Route::middleware(['role_or_permission:control role'])->group(function () {
    Route::get('/roles', 'RoleController@index')->name('role');
    Route::post('/create-role', 'RoleController@CreateRole')->name('create-role');
    Route::get('/edit-role/{id}', 'RoleController@EditRole')->name('edit-role');
    Route::post('/update-role/{id}', 'RoleController@UpdateRole')->name('update-role');
    Route::get('/delete-role/{id}', 'RoleController@DeteleRole')->name('delete-role');
});


//contact

Route::middleware(['role_or_permission:control user contact'])->group(function () {
 Route::get('/user_contact', 'ContactController@index')->name('user_contact');
 Route::get('/delete-user_contact/{id}', 'ContactController@DeteleContact')->name('delete-user_contact');
});

Route::middleware(['role_or_permission:control subscriber'])->group(function () {
    Route::get('/subscriber_list', 'SubscriberController@index')->name('subscriber_list');
    Route::get('/delete-subscriber/{id}', 'SubscriberController@DeteleSubscriber')->name('delete-subscriber');
});


//view Apply
Route::middleware(['role_or_permission:view apply'])->group(function () {
    Route::get('/apply_list', 'ApplyController@index')->name('apply_list');
});

//Edit Apply
Route::middleware(['role_or_permission:update apply'])->group(function () {
    Route::get('/edit-apply/{id}', 'ApplyController@EditApply')->name('edit-apply');
    Route::post('/update-apply/{id}', 'ApplyController@UpdateApply')->name('update-apply');
});

//delete Apply
Route::middleware(['role_or_permission:delete apply'])->group(function () {
    Route::get('/delete-apply/{id}', 'ApplyController@DeteleApply')->name('delete-apply');
});

//user_ipdate

Route::get('/user_update_view' , 'UserUpdateController@index')->name('user_update_view');
Route::post('/update-user_profile' , 'UserUpdateController@UpdateProfile')->name('update-user_profile');
Route::post('/update-user_password' , 'UserUpdateController@UpdatePassword')->name('update-user_password');

});