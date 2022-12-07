<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\CalendarController;


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

Route::get('/', [CalendarController::class, 'index'])->name('index')->middleware('auth');
Route::post('/calendars', [CalendarController::class, 'store'])->name('store')->middleware('auth');
Route::get('/calendars/create', [CalendarController::class, 'create'])->name('create')->middleware('auth');
Route::get('/calendars/{calendar}',[CalendarController::class, 'show'])->name('show')->middleware('auth');
Route::get('/calendars/{calendar}/edit',[CalendarController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/calendars/{calendar}',[CalendarController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/calendars/{calendar}', [CalendarController::class, 'delete']);
Route::get('/goals/index',[GoalController::class, 'index'])->name('goal')->middleware('auth');
Route::post('/goals', [GoalController::class, 'store'])->name('store')->middleware('auth');
Route::get('/goals/create', [GoalController::class, 'create'])->name('goalCreate')->middleware('auth');
Route::get('/goals/{goal}',  [GoalController::class , 'show'])->name('show')->middleware('auth');
Route::get('/goals/{goal}/edit', [GoalController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/goals/{goal}', [GoalController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/goals/{goal}', [GoalController::class, 'delete']);
Route::post('/schedule-get', [CalendarController::class, 'scheduleGet'])->name('schedule-get');




require __DIR__.'/auth.php';
