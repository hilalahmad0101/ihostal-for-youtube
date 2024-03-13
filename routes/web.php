<?php

use App\Http\Controllers\Admin\BranchCategoryController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\DashboardController;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('admin.dashboard');
});

Route::controller(RoleController::class)->group(function () {
    Route::get('/role/list', 'index')->name('admin.role.list');
    Route::get('/role/create', 'create')->name('admin.role.create');
    Route::post('/role/store', 'store')->name('admin.role.store');
    Route::get('/role/edit/{id}', 'edit')->name('admin.role.edit');
    Route::get('/role/delete/{id}', 'delete')->name('admin.role.delete');
    Route::post('/role/update/{id}', 'update')->name('admin.role.update');
});
Route::controller(BranchCategoryController::class)->group(function () {
    Route::get('/branch_categorys/list', 'index')->name('admin.branch_categorys.list');
    Route::get('/branch_categorys/create', 'create')->name('admin.branch_categorys.create');
    Route::post('/branch_categorys/store', 'store')->name('admin.branch_categorys.store');
    Route::get('/branch_categorys/edit/{id}', 'edit')->name('admin.branch_categorys.edit');
    Route::get('/branch_categorys/delete/{id}', 'delete')->name('admin.branch_categorys.delete');
    Route::post('/branch_categorys/update/{id}', 'update')->name('admin.branch_categorys.update');
});

Route::controller(BranchController::class)->group(function () {
    Route::get('/branch/list', 'index')->name('admin.branch.list');
    Route::get('/branch/create', 'create')->name('admin.branch.create');
    Route::post('/branch/store', 'store')->name('admin.branch.store');
    Route::get('/branch/edit/{id}', 'edit')->name('admin.branch.edit');
    Route::get('/branch/delete/{id}', 'delete')->name('admin.branch.delete');
    Route::post('/branch/update/{id}', 'update')->name('admin.branch.update');
});

