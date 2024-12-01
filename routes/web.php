<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UploadManager;
use Illuminate\Support\Facades\Route;

Route::get("/login",[AuthController::class ,"login"]);
Route::view("/upload","welcome");
Route::post("/upload",[UploadManager::class ,"uploadFile"])->name("upload.file.post");