<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProfileController;



Route::get('/',[TasksController::class,'index'])->name('todo.home');

Route::get('/create',[TasksController::class,'create'])->name('todo.create');

Route::post('/insert',[TasksController::class,'store'])->name('todo.store');

Route::get('task/{id}/destroy', [TasksController::class,'destroy']);

Route::put('task/{id}/edit',[TasksController::class,'update'])->name('todo.edit');

Route::get('/task/{id}/edit',[TasksController::class,'edit'])->name('task.update');

Route::put('/task/{id}/edit',[TasksController::class,'update']);

Route::get('/update',function(){
    return view('task.update');
});

















// Route::get('/', function () {
//     return view('task.form');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
