<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GoalController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(CalendarController::class)->middleware(['auth'])->group(function(){
Route::get('/', 'index')->name('index');
Route::post('/calendars', 'store')->name('store');
Route::get('/calendars/create', 'create')->name('create');
Route::get('/calendars/{calendar}', 'show')->name('show');
Route::get('/calendars/{calendar}/edit', 'edit')->name('edit');
Route::put('/calendars/{calendar}', 'update')->name('update');
Route::delete('/calendars/{calendar}', 'delete')->name('delete');
Route::post('/schedule-get', 'scheduleGet')->name('scheduleGet');
});
Route::controller(GoalController::class)->middleware(['auth'])->group(function(){
Route::get('/goals/index', 'index')->name('goal');
Route::post('/goals', 'store')->name('store');
Route::get('/goals/create', 'create')->name('goalCreate');
Route::get('/goals/{goal}', 'show')->name('show');
Route::get('/goals/{goal}/edit', 'edit')->name('edit');
Route::put('/goals/{goal}', 'update')->name('update');
Route::delete('/goals/{goal}', 'delete')->name('delete');
});





require __DIR__.'/auth.php';
