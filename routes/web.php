<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/user-page', [UserController::class, 'index'])->name('user-page.index');


// APIs: Predict the age of a name https://agify.io

// Determine the gender of a name https://genderize.io

// Predict the nationality of a name https://nationalize.io

// RANDOM USER GENERATOR https://randomuser.me