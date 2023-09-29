<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// property
Route::get('/property', [PropertyController::class, 'create'])
->name('property');
Route::post('/property', [PropertyController::class, 'store'])
->name('property.store');
Route::get('/proplist', [PropertyController::class, 'index'])
->name('proplist');

//unit
Route::get('/unit', [UnitController::class, 'create'])->name('unit');
Route::post('/unit', [UnitController::class, 'store'])->name('unit.store');
Route::get('/unitlist', [UnitController::class, 'index'])->name('unitlist');

//tenants
Route::get('/tenant', [TenantController::class, 'create'])->name('tenant');
Route::post('/tenant', [TenantController::class, 'store'])->name('tenant.store');
Route::get('/tenantlist', [TenantController::class, 'index'])->name('tenantlist');

//users
Route::get('/users', [UserController::class, 'create'])->name('users');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/userslist', [UserController::class, 'index'])->name('userslist');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/closeoff', function () {
    return view('closeoff');
})->name('closeoff');


Route::get('/normal', function () {
    return view('normal');
})->name('normal');

Route::get('/work', function () {
    return view('work');
})->name('work');

Route::get('/modernoff', function () {
    return view('modernoff');
})->name('modernoff');

Route::get('/openoff', function () {
    return view('openoff');
})->name('openoff');

Route::get('/luxury', function () {
    return view('luxury');
})->name('luxury');

Route::get('/outdoor', function () {
    return view('outdoor');
})->name('outdoor');

Route::get('/room', function () {
    return view('room');
})->name('room');
