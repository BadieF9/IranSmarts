<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        foreach ($this->getPermission() as $permission){
            Gate::define($permission->name, function ($user) use($permission){
                return $user->hasRole($permission->roles);
            });
        }
    }
    protected function getPermission()
    {
        return Permission::with('roles')->get();
    }
}
