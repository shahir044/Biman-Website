<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::provider('custom',function ($app, array $config){
            return new CustomProvider();
        });

        Gate::define('logged-in', function($user){
            return $user;
        });

        Gate::define('is-flightschedule', function($user){

            return $user->hasAnyRole('FlightSchedule');

        });

        Gate::define('is-newsUpload', function($user){

            return $user->hasAnyRole('News');

        });

        Gate::define('is-travelAdvisory', function($user){

            return $user->hasAnyRole('TravelAdvisory');

        });
    }
}
