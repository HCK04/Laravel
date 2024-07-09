<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;   //<------ Essential so the short simplified namespace could work


Route::get('/{nom}', [homeController::class, 'index']);





