<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        Gate::define('access_to_controll_panel',function($user){
              return $user->hasRoles(['admin','Employee']);
        });




        Gate::define('delete-user',function($user){
            return $user->hasRole('admin');


        });
        Gate::define('edit-user',function($user){
            return $user->hasRole('admin');


        });

         Gate::define('access_to_role',function($user){
            return $user->hasRole('admin');


        });

        Gate::define('access_to_edit_user',function($user){
            return $user->hasRole('admin');


        });
        //
    }
}
