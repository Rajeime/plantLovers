<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\RegisterController;

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

Route::prefix('plant')->group(function(){
    Route::get('/', [PlantController::class , 'index'])->name('plant.index');
    Route::get('/show/{plant}', [PlantController::class , 'show'])->name('plant.show');
       
    // Add auth middleware added to routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/create', [PlantController::class , 'create'])->name('plant.create');
        Route::post('/', [PlantController::class , 'store'])->name('plant.store');
        Route::get('/edit/{plant}', [PlantController::class , 'edit'])->name('plant.edit');
        Route::put('/update/{plant}', [PlantController::class , 'update'])->name('plant.update');
        Route::delete('/delete/{plant}', [PlantController::class , 'destroy'])->name('plant.destroy');
        Route::get('/manage', [PlantController::class , 'manage'])->name('plant.manage');
    });
});

Route::prefix('register')->group(function(){
    Route::get('/',[RegisterController::class, 'index'])->name('register.index');
    Route::post('/',[RegisterController::class, 'store'])->name('register.post');
});


Route::get('/login',[LoginController::class, 'index'])->name('login.index');
Route::post('/login',[LoginController::class, 'store'])->name('login.post');
 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

