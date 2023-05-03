<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Owner;
use App\Models\Car;
use App\Policies\OwnerPolicy;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        Owner::class=>OwnerPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
