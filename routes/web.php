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
Route::resource('/friends','FriendsController');

Route::get('/testimonials','TestimonialsController@getAll');

Route::get('/testimonials/{id}','TestimonialsController@getSingle')->where(['id'=>'[0-9]+']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{page}','ShowPage');


Route::get('/users/{id?}', function ($usersId=null) {
  echo $usersId;
});



// Route::get('/about', function () {
//     //return view('welcome');
//     $name ="name";
//     echo "Labas".$name;
// });
//
// Route::get('/abt', function () {
//     return view('about');
// });
//
// Route::get('/contact-us', function () {
//     return view('contact');
// });
//
