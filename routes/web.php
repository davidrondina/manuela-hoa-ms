<?php

use App\Models\Update;

// Controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UpdatesController;


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

// Home
Route::get('/', function() {
    return view('index', [
        'updates' => Update::where('is_private', false)->latest()->take(6)->get()
    ]);
});


// Updates
Route::get('/updates', [UpdatesController::class, 'index'])->middleware('auth');

Route::get('/updates/create', [UpdatesController::class, 'create'])->middleware('auth');

// Route::get('/updates/{id}', [UpdatesController::class, 'show']);
Route::get('/updates/{update}', [UpdatesController::class, 'show'])->middleware('auth');

Route::post('/updates', [UpdatesController::class, 'store'])->middleware('auth');

Route::get('/updates/{update}/edit', [UpdatesController::class, 'edit'])->middleware('auth');

Route::put('/updates/{update}', [UpdatesController::class, 'update'])->middleware('auth');

Route::delete('/updates/{update}', [UpdatesController::class, 'destroy'])->middleware('auth');


// User Authentication, Login, and Logout
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// Guest Routes
Route::middleware(['guest'])->group(function() {
    Route::get('/guest/updates', [GuestController::class, 'index']);
    Route::get('/guest/updates/{update}', [GuestController::class, 'show']);
});
