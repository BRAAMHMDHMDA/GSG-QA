<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\QusetionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AnswerController;

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
    return redirect('/home');
});
Route::get('/home', function () {
    return redirect()->route('qusetions.index');
})->name('home');

require __DIR__.'/auth.php';

Route::resource('/tags',TagController::class);
Route::resource('/qusetions',QusetionController::class);
Route::resource('/comments',CommentController::class);
Route::resource('/answers',AnswerController::class);
