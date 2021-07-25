<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterPaket;
use App\Http\Controllers\ItemPaket;
use App\Http\Controllers\ListPaket;

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
    return view('admin.dashboard');
});

Route::get('/master/data', [MasterPaket::class, 'data'])->name('master.data');
Route::resource('/master', MasterPaket::class);

Route::get('/item/data', [ItemPaket::class, 'data'])->name('item.data');
Route::resource('/item', ItemPaket::class);

Route::get('/list/data', [ListPaket::class, 'data'])->name('list.data');
Route::resource('/list', ListPaket::class);
