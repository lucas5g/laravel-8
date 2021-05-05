<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['teste' => 'api teste'];
});