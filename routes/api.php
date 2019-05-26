<?php

use Illuminate\Http\Request;
use Signifly\Janitor\Facades\Janitor;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Janitor::routes();
