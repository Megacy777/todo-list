<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\AuctioneerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/saveItem', function () {
    return view('saveItem');
})->name("saveItem");

Route::get('auctions', [AuctionController::class, 'index'])->name('auctions.index');
Route::get('auctions/create', [AuctionController::class, 'create'])->name('auctions.create');
Route::post('auctions', [AuctionController::class, 'store'])->name('auctions.store');
Route::get('auctions/{auction}/edit', [AuctionController::class, 'edit'])->name('auctions.edit');
Route::put('auctions/{auction}', [AuctionController::class, 'update'])->name('auctions.update');
Route::delete('auctions/{auction}', [AuctionController::class, 'destroy'])->name('auctions.destroy');


Route::get('auctioneers', [AuctioneerController::class, 'index'])->name('auctioneers.index');
Route::get('auctioneers/create', [AuctioneerController::class, 'create'])->name('auctioneers.create');
Route::post('auctioneers', [AuctioneerController::class, 'store'])->name('auctioneers.store');
Route::get('auctioneers/{auctioneer}/edit', [AuctioneerController::class, 'edit'])->name('auctioneers.edit');
Route::put('auctioneers/{auctioneer}', [AuctioneerController::class, 'update'])->name('auctioneers.update');
Route::delete('auctioneers/{auctioneer}', [AuctioneerController::class, 'destroy'])->name('auctioneers.destroy');

Route::post('saveItem', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::resource('listItem', ListItemController::class);
Route::get('/listItems', [ListItemController::class, 'index'])->name('listItems.index');
Route::get('/listItems/create', [ListItemController::class, 'create'])->name('listItems.create');
Route::post('/listItems', [ListItemController::class, 'store'])->name('listItems.store');
Route::get('/listItems/{listItem}/edit', [ListItemController::class, 'edit'])->name('listItems.edit');
Route::put('/listItems/{listItem}', [ListItemController::class, 'update'])->name('listItems.update');
Route::delete('/listItems/{listItem}', [ListItemController::class, 'destroy'])->name('listItems.destroy');
