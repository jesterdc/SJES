<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\API\SocialAuthController;
use App\Http\Controllers\Forms\EmployeeFormController;
use App\Http\Controllers\Forms\StudentFormController;
use App\Http\Controllers\GoogleAuthController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/employee', function () {
    return view('request_forms.employee-form');
})->name('employee_form');



Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/about', function(){
    return view('about');
})->name('about');


Route::get('/contact', function(){
    return view('contact');
})->name('contact');


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


//EMAIL VERIFICATION
Auth::routes(['verify' => true]);

Route::get('/home', function () {
    return view('home');
})->middleware('verified');


//SIGN IN WITH GOOGLE
Route::get('auth/google',[GoogleAuthController::class, 'redirect'])->name('google.auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);



Route::group(['middleware' => 'auth', 'prefix' => 'forms'], function(){
    Route::get('/students',[StudentFormController::class, 'index'])->name('student');
    Route::get('/employee',[EmployeeFormController::class, 'index'])->name('employee');
});
