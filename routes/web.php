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

Route::get('/', function () {return view('welcome');});

Route::get('home', function () {echo 'This is Home';});

Route::get('/about', function () {return view('about', ['data'=>'testing']);});

Route::get('contact', function () {return view('pages.contact');})->middleware('age');

//group routing
//Route::prefix('group')->group(function ()
//{
//    Route::get('/about', function () {return view('about');});
//    Route::get('contact', function () {return view('pages.contact');});
//
//});

Route::group(['middleware' => 'age'], function () {
    Route::get('about', function () {return view('about');});
    Route::get('contact', function () {return view('pages.contact');});
});



//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

//Route::get('/user', 'UserController@index');

//Route::redirect('/here', '/there');
//Route::redirect('/here', '/there', 301);
//Route::permanentRedirect('/here', '/there');

//Route::view('/welcome', 'welcome');
//Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});
//Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//    //
//});

//Route::get('user/{name?}', function ($name = null) {
//    return $name;
//});
//Route::get('user/{name?}', function ($name = 'John') {
//    return $name;
//});

//Route::get('user/profile', 'UserProfileController@show')->name('profile');
//Route::get('user/profile', function () {
//    //
//})->name('profile');

//// Generating URLs...
//$url = route('profile');
//// Generating Redirects...
//return redirect()->route('profile');
