<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

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

//Teoria 0.Laravel10_UF2
Route::prefix('roger')->group(function(){
    Route::get('/signin/{param1}/{param2}/{param3}/{param4}', [SignController::class, 'signin']);
    Route::get('/signup/{param1}/{param2}/{param3}', [SignController::class, 'signup']);
});

//Teoria 1.Laravel10_UF2
Route::prefix('roger2')->group(function(){
    Route::get('/signin', [SignController::class, 'signin2'])->name('signin');
    Route::get('/signup', [SignController::class, 'signup2'])->name('signup');
});

//Teoria 1.Laravel10_UF2 mètode POST
Route::prefix('metodepost')->group(function(){
    Route::post('products', [SignController::class, 'products'])->name('products');
});

///////////////// Metode ANY() //////////////////
Route::any('/users/{user?}', [SignController::class, 'signin_any']);


//////////////////// Metode match() /////////////////
Route::match(['get','post'], '/users/{user?}', [SignController::class, 'signin_match']);


?>


