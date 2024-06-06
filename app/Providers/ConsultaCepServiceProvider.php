<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ConsultaCEP;
class ConsultaCepServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ConsultaCEP::class, function ($app) {
            return new ConsultaCEP(config('services.cep.api_key', ''));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
