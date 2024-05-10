<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;


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
    $name = "John Doe";
    session(['name' => $name]);
    return view('index');
})->name("home");

Route::get('/about', function(){    
    return view('about');
})->name("about");

Route::get('/service', function(){
    return view('services');
})->name("service");

Route::get('/case', function(){
    return view('cases');
})->name("case");

Route::get('/blog', function(){
    return view('blog');
})->name("blog");

Route::get('/blog-single', function(){
    return view('blog-single');
})->name("blog-single");

Route::get('/contact', function(){
    return view('contact');
})->name("contact");

Route::get('/login', function(){
    return view('login');
})->name("login");

Route::get('/register', function(){
    return view('register');
})->name("register");



Route::post("/login/user", [AuthController::class, 'loginUser'])->name("login.new");
Route::post("/register/user", [AuthController::class, 'registerUser'])->name("register.new");