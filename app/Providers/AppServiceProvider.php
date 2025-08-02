<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
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
        if(Schema::hasTable('users')) 
        {
            if(count(User::all()) == 0 ) 
            {
                User::create([
                    "name_and_family" => "admin" , 
                    "email" => "admin@gmail.com" ,
                    "password" => Hash::make("admin123") ,
                    "role" => "superadmin"
                ]) ;
            }
        } 
        
    }
}
