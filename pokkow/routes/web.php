<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', 
[DashboardController :: class,"index"]
);

Route::get('/profile', 
[UserController :: class,"index"]
);

