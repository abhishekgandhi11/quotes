<?php

use Abhishekgandhi11\Quotes\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Abhishekgandhi11\Quotes\Http\Controllers\QuotesController;

Route::get('get-quote', [ QuotesController::class, 'getQuote']);
