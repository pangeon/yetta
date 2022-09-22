<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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


/* Public */
Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/wpisy', [NotesController::class, 'index']) -> name('notes.index');

/* Security */
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/app-login', [LoginController::class, 'appLogin'])->name('auth.app-login');
Route::get('/app-logout', [LoginController::class, 'appLogout'])->name('logout');

/* Notes manager */
Route::get('/wpisy/dodaj', [NotesController::class, 'create']) -> name('notes.create');
Route::get('/wpisy/do-edycji/{id}', [NotesController::class, 'find_for_update']) -> name('notes.edit');
Route::put('/wpisy/edytuj/{id}', [NotesController::class, 'update']) -> name('notes.update');
Route::delete('/wpisy/usun/{id}', [NotesController::class, 'delete']) -> name('notes.delete');
Route::post('/wpisy/zapisz', [NotesController::class, 'store']) -> name('notes.store');
