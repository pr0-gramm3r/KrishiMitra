<?php

use Illuminate\Support\Facades\Route;

Route::view("/","farmer.dashboard.dashboard");

Route::view("/register","farmer.authentication.register")->name("register");
Route::view("/login","farmer.authentication.login")->name("login");