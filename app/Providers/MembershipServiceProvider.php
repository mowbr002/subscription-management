<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Connection;

class MembershipServiceProvider extends ServiceProvider
{
	/**
	 *	Defer loading until needed 
	 */
	
	protected $defer = true;
	
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('view', function(){});
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Connection::class, function($app){
        	return new Connection($app['config']['riak']);
        });
    }
    
    /**
     * Services provided by this provider
     */
    
    public function provides(){
    	return [Connection::class];
    }
}
