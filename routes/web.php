<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::group(['middleware' => 'auth'], function () {
    // User needs to be authenticated to enter here.
    // Route::get('/', function ()    {
    //     return view('dashboard');
    // });

    Route::get('/', [MessageController::class, 'index'])->name('home');
    Route::get('/dashboard', [MessageController::class, 'dashboard'])->name('dashboard');
    Route::get('/history/{id?}', [MessageController::class, 'history'])->name('history');

    // Details
    Route::get('/details/{id?}', [MessageController::class, 'details'])->name('details');

    // Search
    Route::get('/search', [MessageController::class, 'search'])->name('search');
    Route::post('/search', [MessageController::class, 'search']);

    Route::get('/adduser', function () {
        return view('adduser');
    })->name('adduser');

    Route::get('/listusers', function () {
        return view('listusers');
    })->name('listusers');
});





// Route::middleware(['auth:sanctum', 'verified'])
//     ->get('/', function () {
//         return view('welcome');
//     })->name('welcome');

// Route::middleware(['auth:sanctum', 'verified'])
//     ->get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])
//     ->get('/adduser', function () {
//         return view('adduser');
//     })->name('adduser');
    
// Route::middleware(['auth:sanctum', 'verified'])
//         ->get('/listusers', function () {
//             return view('listusers');
//         })->name('listusers');