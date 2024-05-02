<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
Route::get('/', function () {
    return view('welcome');
});

route::get('/',[HomeController::class,'index']);

route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


route::get('/add_doctor_view',[AdminController::class,'addview']);

route::post('/upload_doctor',[AdminController::class,'upload']);
route::post('/appointment',[HomeController::class,'appointment']);
route::get('/myappointment',[HomeController::class,'myappointment']);
route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
route::get('/showappointment',[AdminController::class,'showappointment']);
route::get('/approved/{id}',[AdminController::class,'approved']);
route::get('/canceled/{id}',[AdminController::class,'canceled']);
route::get('/showdoctor',[AdminController::class,'showdoctor']);
route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
route::get('/emailview/{id}',[AdminController::class,'emailview']);
route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

});