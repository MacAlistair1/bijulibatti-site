<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'PageController@index');
Route::get('/about-us', 'PageController@about');
Route::get('my-category/{slug}', 'PageController@category');





Route::get('/admin', 'AdminController@admin')->name('admin');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/change-password', 'AdminPasswordController@index');

    Route::get('/manage-site', 'SiteController@index');


    Route::get('/add-new-category', 'CategoryController@create');
    Route::get('/manage-categories', 'CategoryController@index');

    Route::get('/add-new-subcategory', 'SubCategoryController@create');
    Route::get('/manage-subcategories', 'SubCategoryController@index');

    Route::get('/add-new-product', 'ProductController@create');
    Route::get('/manage-products', 'ProductController@index');

    Route::get('/add-new-topbanner', 'TopBannerController@create');
    Route::get('/manage-topbanners', 'TopBannerController@index');

    
    Route::get('/manage-ads', 'AdViewController@index');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin-password', 'AdminPasswordController');
Route::resource('/categories', 'CategoryController');
Route::resource('/sub-categories', 'SubCategoryController');
Route::resource('/our-products', 'ProductController');
Route::resource('/site', 'SiteController');
Route::resource('/topbanner', 'TopBannerController');
Route::resource('/ad-view', 'AdViewController');
