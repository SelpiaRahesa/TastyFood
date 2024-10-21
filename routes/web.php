<?php
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user');
});
// Route user (Frontend)
Route::get('tentang',[App\Http\Controllers\UserController::class,'tentang'])->name('tentang');
Route::get('berita',[App\Http\Controllers\UserController::class,'berita'])->name('berita');
Route::get('galery',[App\Http\Controllers\UserController::class,'galery'])->name('galery');
//route kontak
Route::get('kontak',[App\Http\Controllers\UserController::class,'kontak'])->name('kontak');
Route::get('kontak/{id}/edit', [App\Http\Controllers\KontakController::class, 'edit'])->name('kontak.edit');
Route::put('/kontak/{id}', [App\Http\Controllers\KontakController::class, 'update'])->name('kontak.update');
Route::post('kontak',[App\Http\Controllers\MessageController::class,'store'])->name('message.store');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk Route Backend Lainnya
    Route::resource('galery', App\Http\Controllers\GaleryController::class);
    Route::resource('berita', App\Http\Controllers\BeritaController::class);
    Route::resource('tentang', App\Http\Controllers\TentangController::class);
    Route::resource('kontak', App\Http\Controllers\KontakController::class);
    Route::resource('message', App\Http\Controllers\MessageController::class);
    Route::resource('slider', App\Http\Controllers\SliderController::class);
});
