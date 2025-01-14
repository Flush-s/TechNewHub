<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});


Route::get('/news', [NewsController::class, 'index'])->name('news'); // Для отображения списка новостей
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); // Для создания новости
Route::post('/news', [NewsController::class, 'store'])->name('news.store'); // Для сохранения новости