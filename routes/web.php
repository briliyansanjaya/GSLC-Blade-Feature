<?php

use App\Http\Controllers\AgentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AgentController::class, 'index']);

Route::fallback(function () {
    return view('404', [
        'title' => '404'
    ]);
});

Route::get('/add', [AgentController::class, 'add'],)->name('add');
Route::post('/input', [AgentController::class, 'input'])->name('input');
Route::get('/delete/{id}', [AgentController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [AgentController::class, 'edit'])->name('edit');
Route::post('/update', [AgentController::class, 'update'])->name('update');
