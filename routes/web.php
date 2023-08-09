<?php

use Illuminate\Support\Facades\Route;
use App\Models\Game;
use App\Http\Controllers\GameController;

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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/',  [GameController::class, 'index']);

Route::get('/game/create', [GameController::class, 'create']);

Route::post('/game', [GameController::class, 'store']);

Route::get('/game/{game}', [GameController::class, 'show']);

Route::put('/game/{game}', [GameController::class, 'update']);

Route::get('/game/{game}/edit', [GameController::class, 'edit']);

Route::delete('/game/{game}/', [GameController::class, 'destroy']);
