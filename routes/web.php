<?php

use App\Http\Controllers\{
    UserController
};

use Illuminate\Support\Facades\Route;

Route::get('/users/{id}/edit', [UserController::class, 'edit']->name('users.edit'));
Route::get('/users{id}', ['UserController::class', 'show'])->name('users.show');
Route::post('/users', ['UserController::class', 'store'])->name('users.store');
Route::get('users/create', [UserController::class, 'create'])->name('user.create');
Route::get('/', function () {
    return view('welcome');
});
