<?php
use Illuminate\Support\Facades\Route;
Route::get('/roles', 'RoleController@index')->name('role');

// category
Route::get('/category', 'CategoryController@index')->name('category');
Route::post('/create-category', 'CategoryController@CreateCategory')->name('create-category');

