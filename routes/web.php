<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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



//Normal Route
Route::get('/', [Controller::class, 'index'])->name('market.index');
Route::get('/buy', [Controller::class, 'showBuyPage'])->name('market.buyPage');
Route::get('/sell', [Controller::class, 'showMarketLock'])->name('market.locked');

Route::get('/login', [LoginController::class, 'index'])->name('market.loginPage');
Route::post('/login', [LoginController::class, 'login'])->name('market.Login');

Route::get('/logout', [LoginController::class, 'logout'])->name('market.Logout');

Route::get('/register', [RegisterController::class, 'index'])->name('market.registerPage');
Route::post('/register', [RegisterController::class, 'store'])->name('market.Register');


//Admin Route
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.Dashboard');
    Route::get('/user-list', [AdminController::class, 'userList'])->name('admin.userList');
    Route::get('/user-edit/{id}', [AdminController::class, 'edit'])->name('admin.userEdit');
    Route::post('/update/{id}', [AdminController::class, 'update'])->name('updateData');
    Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('deleteData');
    Route::get('/item-list', [AdminController::class, 'itemList'])->name('admin.itemList');
    Route::delete('/items/{id}', [AdminController::class, 'deleteItem'])->name('deleteItem');
});


//User Route
Route::prefix('user')->middleware('auth')->group(function () {
    Route::get('/sell', [Controller::class, 'showSellPage'])->name('market.sellPage');
    Route::get('/profile', [UserController::class, 'index'])->name('user.Profile');
    Route::post('/profile/update', [UserController::class, 'update'])->name('user.Update');
    Route::get('/inventory', [UserController::class, 'inventory'])->name('user.Inventory');
    Route::get('/insert-item', [UserController::class, 'newItem'])->name('user.newItem');
    Route::post('/insert', [UserController::class, 'insertItem'])->name('user.insertItem');
    Route::get('/item/{itemId}', [UserController::class, 'inputPrice'])->name('user.inputPrice');
    Route::put('/item/{itemId}', [UserController::class, 'keepItem'])->name('user.keepItem');
    Route::get('delete-item/{itemId}', [UserController::class, 'delete'])->name('user.deleteItem');
    Route::post('/sell-item/{itemId}', [UserController::class, 'publishItem'])->name('publishItem');
    Route::post('/buy-item/{itemId}', [MarketController::class, 'buyItem'])->name('buyItem');
    Route::get('/transaction/history', [UserController::class, 'showTransaction'])->name('history');
    Route::get('/transaction/detail/{id}', [UserController::class, 'showTransactionDetail'])->name('transaction');
});

// Market Route
Route::prefix('market')->middleware('auth')->group(function () {
    Route::get('/completed', [MarketController::class, 'formTrans'])->name('successBuy');
});
