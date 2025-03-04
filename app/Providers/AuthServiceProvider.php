<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\ToDos;
use App\Policies\TodoPolicy;
 


class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services. */
    protected $policies = [ToDos::class => TodoPolicy::class];

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
