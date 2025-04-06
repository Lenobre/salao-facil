<?php

use App\Http\Controllers\Api\AuthController as ApiAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get("/", [AuthController::class, "index"])->name("login");

Route::group(["prefix" => "dashboard", "as" => "dashboard.", "middleware" => "auth"], function () {
  Route::get("/", [DashboardController::class, "index"])->name("index");
});

Route::namespace("Api")->group(function () {
  Route::middleware('web')->prefix('api')->as("api.")->group(function () {
    Route::prefix('auth')->group(function () {
      Route::post('/login', [ApiAuthController::class, 'login']);
      Route::get('/logout', [ApiAuthController::class, 'logout']);
    });
  });
});
