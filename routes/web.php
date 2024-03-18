<?php

use App\Http\Controllers\Admin\BedManager\RoomController;
use App\Http\Controllers\Admin\BetManager\RoomCategoryController;
use App\Http\Controllers\Admin\BranchCategoryController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\NoticeController;
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

Route::controller(NoticeController::class)->group(function () {
    Route::get('/notice/list', 'index')->name('admin.notice.list');
    Route::get('/notice/create', 'create')->name('admin.notice.create');
    Route::post('/notice/store', 'store')->name('admin.notice.store');
    Route::get('/notice/edit/{id}', 'edit')->name('admin.notice.edit');
    Route::get('/notice/delete/{id}', 'delete')->name('admin.notice.delete');
    Route::post('/notice/update/{id}', 'update')->name('admin.notice.update');
});


Route::controller(RoomCategoryController::class)->group(function () {
    Route::get('/room/category/list', 'index')->name('admin.room_categorys.list');
    Route::get('/room/category/create', 'create')->name('admin.room_categorys.create');
    Route::post('/room/category/store', 'store')->name('admin.room_categorys.store');
    Route::get('/room/category/edit/{id}', 'edit')->name('admin.room_categorys.edit');
    Route::get('/room/category/delete/{id}', 'delete')->name('admin.room_categorys.delete');
    Route::post('/room/category/update/{id}', 'update')->name('admin.room_categorys.update');
});



Route::controller(RoomController::class)->group(function () {
    Route::get('/room/list', 'index')->name('admin.room.list');
    Route::get('/room/create', 'create')->name('admin.room.create');
    Route::post('/room/store', 'store')->name('admin.room.store');
    Route::get('/room/edit/{id}', 'edit')->name('admin.room.edit');
    Route::get('/room/delete/{id}', 'delete')->name('admin.room.delete');
    Route::post('/room/update/{id}', 'update')->name('admin.room.update');
});
