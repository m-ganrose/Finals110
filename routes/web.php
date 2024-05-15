<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\User\StudentEventController;
use App\Http\Controllers\User\ParticipantController;
use App\Http\Controllers\Super\EventssController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Super\PartsController;
use App\Http\Middleware\User;

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
    return view('auth.login');
});



route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');



route::get('/about',[EventsController::class, 'about']);
route::get('/home',[EventsController::class, 'home']);
route::get('/new',[EventsController::class, 'new']);
route::get('/cat',[EventsController::class, 'cat']);
route::get('/det',[EventsController::class, 'det']);
route::get('/blog',[EventsController::class, 'blog']);




Route::group(['middleware' =>['auth','admin']], function(){

    route::get('/add',[EventsController::class, 'add']);
route::post('/adds',[EventsController::class, 'adds']);

route::get('/watch',[EventsController::class, 'watch']);

Route::get('/movies/{id}/edit', [EventsController::class, 'edit'])->name('movies.edit');
Route::post('/movies/{id}', [EventsController::class, 'update'])->name('movies.update');
Route::delete('/movies/{id}', [EventsController::class, 'destroy'])->name('movies.destroy');


});

Route::group(['middleware' =>['auth','user']], function(){

   
    route::get('/watcher',[UserController::class, 'watcher']);

    route::get('/abouts',[UserController::class, 'abouts']);
    route::get('/homes',[UserController::class, 'homes']);
    route::get('/newss',[UserController::class, 'newss']);
    route::get('/cats',[UserController::class, 'cats']);
    route::get('/dets',[UserController::class, 'dets']);
    route::get('/blogs',[UserController::class, 'blogs']);
   


});






require __DIR__.'/auth.php';

