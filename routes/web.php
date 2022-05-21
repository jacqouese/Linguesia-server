<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\webLevelController;
use App\Http\Controllers\webFlashcardController;
use App\Http\Controllers\LoginController;

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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/panel/levels', [webLevelController::class, 'index']);
    Route::get('/panel/levels/add', [webLevelController::class, 'create']);
    Route::get('/panel/levels/edit/{id}', [webLevelController::class, 'edit']);
    Route::get('/panel/levels/{id}', [webLevelController::class, 'show']);
    
    Route::get('/panel/levels/{id}/add', [webFlashcardController::class, 'create']);
    Route::get('/panel/levels/{id}/edit/{flashcardId}', [webFlashcardController::class, 'edit']);
    
    Route::post('/flashcard', [webFlashcardController::class, 'store']);
    Route::put('/flashcard', [webFlashcardController::class, 'update']);

    Route::post('/level', [webLevelController::class, 'store']);
    Route::put('/level', [webLevelController::class, 'update']);
});

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('image/{filename}', [ImageController::class, 'index']);
