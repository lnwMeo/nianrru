<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexControlle;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CountipController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\AuthController;

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
Route::get('/', [IndexControlle::class, 'index']);
Route::get('/content', [IndexControlle::class , 'contentServices']);
Route::get('/contents/{id}', [IndexControlle::class, 'Services']);





// Admin route
// Route::get('/dashbord', function () {
//     return view('backend.dashbord');
// })->name('Admindashbord');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashbord', [CountipController::class, 'dashbord']);
    // Route::get('Countsip/{id}',[CountipController::class,'show'],);

    //Section Welcome
    Route::get('/Welcome', [WelcomeController::class, 'Formwelcome']);
    Route::post('/insert', [WelcomeController::class, 'insert']);
    Route::get('/delete/{id}', [WelcomeController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [WelcomeController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [WelcomeController::class, 'update'])->name('update');


    //Section Service
    Route::get('/service', [ServiceController::class, 'indexservice']);
    Route::get('/mdservice', [ServiceController::class, 'Formservice']);
    Route::post('/storeservice', [ServiceController::class, 'servicestore'])->name('storeservice');
    Route::post('/uploadck', [ServiceController::class, 'uploadck'])->name('upload');
    Route::get('/deletesv/{id}', [ServiceController::class, 'deletesv'])->name('deletesv');
    Route::get('/editsv/{id}', [ServiceController::class, 'edit'])->name('editsv');
    Route::post('/updatesv/{id}', [ServiceController::class, 'update'])->name('updatesv');


    //Section Support
    Route::get('/support', [SupportController::class, 'Formsupport']);
    Route::post('/store', [SupportController::class, 'store']);
    Route::get('/deletesp/{id}', [SupportController::class, 'deletesp'])->name('deletesp');
    Route::get('/editsp/{id}', [SupportController::class, 'editsp'])->name('editsp');
    Route::post('/updatesp/{id}', [SupportController::class, 'updatesp'])->name('updatesp');


    //Announce
    Route::get('/indexannounce', [AnnounceController::class, 'indexAn']);
    Route::get('/addannounce', [AnnounceController::class, 'FormAn'])->name('addan');
    Route::post('/storeannounce', [AnnounceController::class, 'storeAn']);
    Route::get('/change/{id}', [AnnounceController::class, 'change'])->name('changestatus');
    Route::get('/deletean/{id}', [AnnounceController::class, 'deleteAn'])->name('deleteAn');
    Route::get('/editan/{id}', [AnnounceController::class, 'editan'])->name('editAn');
    Route::post('/updatean/{id}', [AnnounceController::class, 'updatean'])->name('updateAn');

    Route::get('/showusers', [AuthController::class, 'showusers'])->name('auth.showuser');
    Route::get('/Formusers', [AuthController::class, 'addusers'])->name('auth.formadduser')->middleware('limit.registration');
    Route::post('/registerADS', [AuthController::class, 'registerADS'])->name('auth.registerADS')->middleware('limit.registration');
    Route::get('/deleteusers/{id}', [AuthController::class, 'deleteUser'])->name('user.delete');
    Route::get('/editus/{id}', [AuthController::class, 'editusers'])->name('user.formedituser');
    Route::post('/editus/{id}', [AuthController::class, 'updateusers'])->name('user.updateusers');

    Route::post('/logoutAD', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
});




    
    
    
    Route::get('/LoginAD', [AuthController::class, 'Formlogin'])->name('auth.login');
    Route::post('/LoginniaADs', [AuthController::class, 'login'])->name('auth.loginps');
    


Route::fallback(function () {
    return view('404');
});
