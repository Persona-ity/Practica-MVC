<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/AttachSubscriber', [Controller\Site::class, 'AttachSubscriber']);
Route::add('GET', '/subdivition', [Controller\Site::class, 'subdivition']);
Route::add('GET', '/alltelephone', [Controller\Site::class, 'alltelephone']);
Route::add('GET', '/Countabonent', [Controller\Site::class, 'Countabonent']);