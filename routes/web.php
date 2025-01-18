<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;


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

    Route::get('/dashboard', [NewsController::class, 'dashboard'])->name('dashboard');

});


Route::get('/admin', function () {
    if (!auth()->check() || !auth()->user()->is_admin) {
        return view('admin.unauthorized');
    }
    return redirect()->route('admin.index');
})->name('admin');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/users/{user}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
});

Route::get('/news', [NewsController::class, 'index'])->name('news'); // Для отображения списка новостей
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create'); // Для создания новости
Route::post('/news', [NewsController::class, 'store'])->name('news.store'); // Для сохранения новости

