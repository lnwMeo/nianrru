<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index',['count'=>'00535']);
// });
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/content', function () {
    return view('frontend.content');
});


Route::get('/dashbord', function () {
    return view('backend.dashbord');
});

Route::get('/welcome', function () {
    return view('backend.sewelcome');
});

Route::get('/service', function () {
    return view('backend.seservices');
});
Route::get('/mdservice', function () {
    return view('backend.mdservices');
});

Route::get('/support', function () {
    return view('backend.sesupport');
});
Route::get('/announce', function () {
    return view('backend.announce');
});
Route::get('/users', function () {
    return view('backend.users');
});

Route::get('/LoginAD', function () {
    return view('Auth.Login');
});





// Route::get('/', function () {
//     return view('content',['count'=>'00535']);
// });
