<?php
namespace Abhishekgandhi11\Quotes\Providers;

use Illuminate\Support\ServiceProvider;

class QuotesProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}