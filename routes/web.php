<?php

use Illuminate\Support\Facades\Route;

/* ---------------------------- USER ROUTES ---------------------------*/
use App\Livewire\Users\Pages\UserPageIndex;

/* ---------------------------- ADMIN ROUTES ---------------------------*/
use App\Livewire\Admin\Pages\AdminPageIndex;

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

Route::get('/', UserPageIndex::class)->name('users.pages.index');


Route::group(['middleware' => ['role:SuperAdmin|Admin']], function () {
    Route::get('/admin', AdminPageIndex::class)->name('admin.pages.index');
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
