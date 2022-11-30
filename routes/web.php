<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackRequestStatus;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\TrackRequestController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\RequestSuccessController;
use App\Http\Controllers\StudentRequestController;
use App\Http\Controllers\Fallback\FallbackController;
use App\Http\Livewire\TrackRequestForm;


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

Route::get('/', function(){
    return view('home');
})->name('index');

Auth::routes();


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//EMAIL VERIFICATION
Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->middleware('verified')->name('home');



//SIGN IN WITH GOOGLE
Route::get('auth/google',[GoogleAuthController::class, 'redirect'])->name('google.auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);




Route::get('/about', function(){
    return view('about');
})->name('about');


Route::get('request-success/', [RequestSuccessController::class, 'index'])->name('request-sucess');



Route::controller(StudentRequestController::class)->group(function(){

    Route::get('forms/student',[StudentRequestController::class, 'index'])->name('student');
});

Route::controller(TrackRequestController::class)->group(function(){

    Route::get('/track_request',[TrackRequestController::class, 'index'])->name('track.request');
});

Route::get('track_request/status', [TrackRequestStatus::class, 'index', TrackRequestForm::class, 'submit'])->name('request.status');

Route::get('/contact',[ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::fallback(FallbackController::class);

