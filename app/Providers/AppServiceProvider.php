<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //será executado na primeira fase da inicialização da aplicação
        //esse método é o lugar correto para fazer o bind de classes

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //só será executado depois que todos os métodos register forem executados

    }
}
