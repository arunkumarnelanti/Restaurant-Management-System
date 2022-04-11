<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('index',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');

Route::get('Register',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');

Route::get('Home',[CustomAuthController::class,'Home'])->middleware('isLoggedin');

Route::get('Addrestaurent',[CustomAuthController::class,'Addrestaurent'])->middleware('isLoggedin');
Route::post('/add-restaurant',[CustomAuthController::class,'addRestaurant'])->name('add-restaurant');

Route::get('Addfood',[CustomAuthController::class,'Addfood'])->middleware('isLoggedin');
Route::post('/add-food',[CustomAuthController::class,'addFoodItem'])->name('add-food');

Route::get('Notifications',[CustomAuthController::class,'Notifications'])->middleware('isLoggedin');
Route::post('/user-notification',[CustomAuthController::class,'notification'])->name('user-notification');

Route::get('Ads',[CustomAuthController::class,'Ads'])->middleware('isLoggedin');
Route::post('/give-ads',[CustomAuthController::class,'advertice'])->name('give-ads');

Route::get('profile',[CustomAuthController::class,'profile'])->middleware('isLoggedin');

Route::get('logout',[CustomAuthController::class,'logout']);

#Redirecting and fallback functions
Route::redirect('/Manage','/index');
Route::redirect('/Restaurent','/index');
Route::fallback(function(){
    return
        "<p style='padding:50px; color: white; text-align:center; background-color: #FFB6C1; font-size:50px;border-radius:15px;'>
            OOPS!!
            <br><br>
            Page Not Available
        </p>";
});