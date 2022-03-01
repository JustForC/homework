<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunctionController;

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

Route::get('/',[FunctionController::class, 'landingPage'])->name('landingPage');

// Product
Route::get('/product',[FunctionController::class, 'indexProduct'])->name('indexProduct');
Route::get('/product/create',[FunctionController::class, 'createProduct'])->name('createProduct');
Route::get('/product/read',[FunctionController::class, 'readProduct'])->name('readProduct');
Route::get('/product/edit/{id}',[FunctionController::class, 'editProduct'])->name('editProduct');
Route::get('/product/delete/{id}',[FunctionController::class, 'deleteProduct'])->name('deleteProduct');
Route::post('/product/update/{id}',[FunctionController::class, 'updateProduct'])->name('updateProduct');
Route::post('/product/store',[FunctionController::class, 'storeProduct'])->name('storeProduct');
// End Product

// Snapshot
Route::get('/snapshot',[FunctionController::class, 'indexSnapshot'])->name('indexSnapshot');
Route::get('/snapshot/create',[FunctionController::class, 'createSnapshot'])->name('createSnapshot');
Route::get('/snapshot/read',[FunctionController::class, 'readSnapshot'])->name('readSnapshot');
Route::get('/snapshot/edit/{id}',[FunctionController::class, 'editSnapshot'])->name('editSnapshot');
Route::get('/snapshot/delete/{id}',[FunctionController::class, 'deleteSnapshot'])->name('deleteSnapshot');
Route::post('/snapshot/update/{id}',[FunctionController::class, 'updateSnapshot'])->name('updateSnapshot');
Route::post('/snapshot/store',[FunctionController::class, 'storeSnapshot'])->name('storeSnapshot');
// End Snapshot

// Thumbnail
Route::get('/thumbnail',[FunctionController::class, 'indexThumbnail'])->name('indexThumbnail');
Route::get('/thumbnail/create',[FunctionController::class, 'createThumbnail'])->name('createThumbnail');
Route::get('/thumbnail/read',[FunctionController::class, 'readThumbnail'])->name('readThumbnail');
Route::get('/thumbnail/edit/{id}',[FunctionController::class, 'editThumbnail'])->name('editThumbnail');
Route::get('/thumbnail/delete/{id}',[FunctionController::class, 'deleteThumbnail'])->name('deleteThumbnail');
Route::post('/thumbnail/update/{id}',[FunctionController::class, 'updateThumbnail'])->name('updateThumbnail');
Route::post('/thumbnail/store',[FunctionController::class, 'storeThumbnail'])->name('storeThumbnail');
// End Thumbnail
