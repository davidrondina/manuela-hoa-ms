<?php

use App\Models\Update;

// Controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function() {
    return view('index', [
        'updates' => Update::where('is_private', false)->paginate(6)
    ]);
});

Route::get('/updates', [UpdatesController::class, 'index']);

Route::get('/updates/create', [UpdatesController::class, 'create']);

// Route::get('/updates/{id}', [UpdatesController::class, 'show']);
Route::get('/updates/{update}', [UpdatesController::class, 'show']);

Route::post('/updates', [UpdatesController::class, 'store']);

Route::get('/updates/{update}/edit', [UpdatesController::class, 'edit']);

Route::put('/updates/{update}', [UpdatesController::class, 'update']);


Route::get('/login', [UserController::class, 'login']);


// Route::get('/guest/updates', []);

// Route::get('/guest/updates/{id}', []);
