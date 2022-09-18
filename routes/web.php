<?php

use App\Http\Controllers\notesController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/wpisy', [notesController::class, 'index']) -> name('notes.index');
Route::get('/wpisy/dodaj', [notesController::class, 'create']) -> name('notes.create');
Route::get('/wpisy/do-edycji/{id}', [notesController::class, 'find_for_update']) -> name('notes.edit');
Route::put('/wpisy/edytuj/{id}', [notesController::class, 'update']) -> name('notes.update');
Route::delete('/wpisy/usun/{id}', [notesController::class, 'delete']) -> name('notes.delete');
Route::post('/wpisy/zapisz', [notesController::class, 'store']) -> name('notes.store');
