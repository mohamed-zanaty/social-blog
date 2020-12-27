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

######################START FRONT##############################
Route::get('home/blog','FrontController@home')->name('home.blog');

Route::get('home/contact', 'FrontController@contact')->name('contact');

Route::get('home/profile', 'FrontController@profile');

Route::get('home/{id}/post', 'FrontController@homepost')->name('home.post');

Route::get('/','FrontController@page')->name('page');
####################################end front#################


####################################START Jop#################
Route::post('home/contact/store','JobController@contactstore')->name('contact.store');//save data contact

Route::post('like','JobController@like')->name('like');//like

Route::post('dislike','JobController@dislike')->name('dislike');//like

Route::get('home/blog/{id}/delete','JobController@deletepost')->name('home.delete');
Route::get('home/blog/post/{id}/delete','JobController@deletepost')->name('home.delete2');

Route::get('home/blog/{id}/update','JobController@editview')->name('home.update.view');

Route::get('home/blog/update/{id}/post','JobController@editpost')->name('home.update.post');
################################END Jop#########################


################################start Auth######################
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
############################END AUTH############################


############################START DASHBOARD#####################
Route::group(['prefix'=>'dashboard', 'middleware'=>'auth'] ,function (){

    Route::get('/home', 'FrontController@panel')->name('panel');
    Route::post('/update/{id}', 'FrontController@updateprofile')->name('update');
    ############
    Route::get('/posts', 'FrontController@allpost')->name('all.post');
    Route::get('/posts/{id}/view', 'FrontController@adminpost');
    Route::get('/posts/{id}/edit', 'FrontController@editview');
    Route::get('/posts/{id}/delete', 'FrontController@delete');
    ############
    Route::get('/category', 'FrontController@category')->name('category');
    Route::get('/category/add', 'FrontController@categoryadd')->name('category.add');
    Route::get('/category/{id}/posts', 'FrontController@categorypost')->name('category.post');
    ############
    Route::resource('/tags', 'TagController', ['expect' =>['create', 'destroy', 'update'] ]);
    ############
    ############
    Route::get('/setting', 'SettingController@show')->name('setting.show');
    Route::get('/setting/like', 'SettingController@like')->name('setting.like.store');

    Route::get('/setting/create', 'SettingController@create')->name('setting.create.store');
    Route::get('/setting/title', 'SettingController@title')->name('setting.title.store');
    ############
    Route::get('/users', 'FrontController@users')->name('users');
    Route::get('/users/{id}/delete', 'FrontController@usersdelete');
    ############
    Route::get('/feedback', 'FrontController@feeds')->name('feeds');
    Route::get('/feeds/{id}/delete', 'FrontController@feedsdelete');
    ############
    Route::get('/create-post', 'FrontController@create')->name('create.post');

    Route::post('/create-post/{post}/store', 'JobController@indexpost')->name('index.post');
    Route::resource('broduct', 'JobController');
});
########################END DASHBOARD###########################
