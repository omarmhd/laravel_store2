<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
use App\Models\Product;
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
              return $user->hasRoles(['admin',"seller"]);
        });
        Gate::define('admin',function($user){
            return $user->hasRoles(['admin']);
      });
        Gate::define('access_to_controll_panel_as_a_seller',function($user){
            return $user->hasRoles(['seller']);
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
        Gate::define('edit-product', function ($user,$product) {
            return $user->id == $product->user_id||$user->hasRole('admin');
        });
        Gate::define('show-product', function ($user,$product) {
            return $user->id == $product->user_id||$user->hasRole('admin');
        });
        //
    }
}
