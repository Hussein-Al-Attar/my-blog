<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperviseController;
use App\Http\Controllers\SreachController;

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
      return redirect()->route('book.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('/book', BookController::class);
Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('books/{id}/pdf',[BookController::class, 'showPdf'])->name('books.pdf');
Route::resource('/admin',AdminController::class);
Route::get('/Supervise',[SuperviseController::class, 'index'])->name('supervise.index');
Route::resource('/Sreach', SreachController::class);

require __DIR__.'/auth.php';
