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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::group(['middleware' => 'auth','auth_user'],function ()
{
    Route::get('/product', function () {
    return view('product');
})->name('product');;

    Route::get('/index',function(){
        return view('index');
    })->name('index');

     Route::get('/admin',function(){
        return view('admin');
    })->name('admin');

});




Route::get('/', function () {
    return view('index');
});
// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/product', function () {
//     return view('product');
// });
Route::get('/single_product', function () {
    return view('single_product');
});

Route::get('/cart', function () {
    return view('cart');
});



Route::get('/read',function(){
    $post = post::all();

    foreach ($post as $post) {
        return $post->title;
    }
});


Route::get('/finishRequest', function () {
    return view('finishRequest');
});

Route::get('/request', function () {
    return view('request');
})->middleware('auth');

Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/donate', function () {
    return view('donate');
});
// Route::get('/donateMoney', function () {
//     return view('donateMoney');
// })->middleware('auth');



// 

Route::get('/category', function () {
    return view('category');
});
Route::get('/form', function () {
    return view('form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('submit','DonationController@store');
Route:: get('/donateMoney','DonationController@create');




// Route::resource('donatemoney2','DonationController');

Route::view('/finishdonate','finishdonate');

Route::view('/cardvalidator','cardvalidator');


// donate item 
// Route::get('/donateItem', function () {
// return view('donateItem');
// })->middleware('auth');

// Route::resource('/donateItem','DonateitemController');

Route::get('/donateItem','DonateitemController@create');
Route::post('/submitdonate','DonateitemController@store');
// Route::resource('/donatemoney','DonationController');



Route::view('/test','Item');
Route::view('/head','headertest');