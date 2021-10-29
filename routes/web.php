<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TagController,
    QusetionController,
    CommentController,
    AnswerController,
    UserController,
    VoteController,
};

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

Route::resource('/tags',TagController::class)->except('show');
Route::get('/tags/{slug}',[TagController::class,'show'])->name('tags.show');

Route::resource('/qusetions',QusetionController::class)->except('show');
Route::get('/qusetions/{slug}',[QusetionController::class,'show'])->name('qusetions.show');


Route::resource('/answers',AnswerController::class);
Route::post('answer/accepted',[AnswerController::class,'accepted'])->name('answer.accepted');

Route::resource('/user' , UserController::class);

Route::post('comment/{type}', [CommentController::class, 'store'])
    ->where('type', 'answer|question');
//Route::resource('/comments',CommentController::class);

Route::post('vote/{type}', [VoteController::class, 'store'])
    ->where('type', 'answer|question');

