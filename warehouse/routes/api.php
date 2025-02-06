<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'getById']);

Route::get('/warehouses', [WarehouseController::class, 'index']);
Route::get('/addresses', [AddressController::class, 'index']);
Route::get('/inventories', [InventoryController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);

Route::post('/orders', [OrderController::class, 'store']);
Route::put('/orders/{id}', [OrderController::class, 'edit']);

