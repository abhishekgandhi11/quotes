<?php

namespace Abhishekgandhi11\Quotes\Http\Controllers;

use Illuminate\Http\Request;
use Abhishekgandhi11\Quotes\Quotes;
// use Abhishekgandhi11\Quotes\Controllers;

class QuotesController
{
    public function __construct()
    {
    }
    public function getQuote(Quotes $quotes) {
        $quote = $quotes->getQuote();
        return $quote;
    }
}