<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\subscriberController;
use Illuminate\Support\Facades\Mail;

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


Route::get("/",[subscriberController::class,'index'])->name('subscribe');
Route::get("/subscribe",[subscriberController::class,'create'])->name('thanks');
Route::post("/",[subscriberController::class,'store'])->name('subscribe');
Route::get("/test", function(){
    return view('thanks');
});

Route::get('send-mail', function () {

    $details = [
        'title' => 'Daily email for health check-up',
        'body' => 'please check your health status by following the link below
        http://dailymail.test/subscribe '
    ];

    Mail::to('carterk279@gmail.com')->send(new \App\Mail\MyMail($details));

    dd("Email is Sent.");
});
