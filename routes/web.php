<?php

use App\Http\Controllers\Testes;
use Illuminate\Support\Facades\Route;

Route::get('/testes', [Testes::class, 'teste']);
