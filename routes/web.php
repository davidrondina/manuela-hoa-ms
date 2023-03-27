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
        'updates' => Update::where('is_private', false)->latest()->paginate(6)
    ]);
});


// Updates
Route::get('/updates', [UpdatesController::class, 'index']);

Route::get('/updates/create', [UpdatesController::class, 'create']);

// Route::get('/updates/{id}', [UpdatesController::class, 'show']);
Route::get('/updates/{update}', [UpdatesController::class, 'show']);

Route::post('/updates', [UpdatesController::class, 'store']);

Route::get('/updates/{update}/edit', [UpdatesController::class, 'edit']);

Route::put('/updates/{update}', [UpdatesController::class, 'update']);

Route::delete('/updates/{update}', [UpdatesController::class, 'destroy']);


// User Authentication, Login, and Logout
Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout']);


Route::middleware(['guest'])->group(function() {
    Route::get('/guest/updates', [GuestController::class, 'index']);
    Route::get('/guest/updates/{update}', [GuestController::class, 'show']);
});
