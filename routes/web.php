<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexControlle;
use App\Http\Controllers\WelcomeController;

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


// index route
Route::get('/', [IndexControlle::class , 'index']);
Route::get('/content', [IndexControlle::class , 'contentServices']);





// Admin route
Route::get('/dashbord', function () {
    return view('backend.dashbord');
})->name('Admindashbord');




//Section Welcome
Route::get('/Welcome',[WelcomeController::class,'Formwelcome']);
Route::post('/insert',[WelcomeController::class,'insert']);
Route::get('/delete/{id}', [WelcomeController::class, 'delete'])->name('delete');

Route::get('/edit/{id}', [WelcomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [WelcomeController::class, 'update'])->name('update');


//Section Service
Route::get('/service', function () {
    return view('backend.seservices');
});
Route::get('/mdservice', function () {
    return view('backend.mdservices');
});


//Section Support
Route::get('/support', function () {
    return view('backend.sesupport');
});


//Announce
Route::get('/announce', function () {
    return view('backend.announce');
});


Route::get('/users', function () {
    return view('backend.users');
});



Route::get('/LoginAD',function(){
    return view('Auth.Login');
});



Route::fallback(function () {
    return view('404');
});
