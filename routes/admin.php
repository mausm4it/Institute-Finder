<?php
use Illuminate\Support\Facades\Route;
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
Route::post('/create-blog', 'BlogController@CreateBlog')->name('create-blog');
//categoryBlog
Route::get('/blog-category', 'BlogController@category')->name('blog-category');
Route::post('/create-blog-category', 'BlogController@CreateCategory')->name('create-blog-category');
Route::post('/update-blog-category/{id}', 'BlogController@UpdateCategory')->name('update-blog-category');
Route::get('/delete-blog-category/{id}', 'BlogController@DeteleCategory')->name('delete-blog-category');