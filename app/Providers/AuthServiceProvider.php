<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::define('admin-only', function($user){
            if($user->role == "Admin")
            {
                return true;

            }else
            {
                return false;
            }
        });
        
        Gate::define('team-only', function($user){
            if($user->role == "Tutor")
            {
                return true;

            }else
            {
                return false;
            }
        });
        
        Gate::define('student-only', function($user)
        {
            if($user->role == "Varsity")
            {
                return true;

            }else
            {
                return false;
            }

        });

        Gate::define('basic-only', function($user)
        {
            if($user->role == "High")
            {
                return true;

            }else
            {
                return false;
            }

        });
    }
}
