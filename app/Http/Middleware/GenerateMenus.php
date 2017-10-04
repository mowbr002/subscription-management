<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\MenuController;
use Illuminate\Foundation\Auth\User;

class GenerateMenus
{
	
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	\Menu::make('top_nav', function($menu){
    		$menu->add('Home', 'home');
    		$menu->add('Associations', '#');
    		$menu->associations->add('Associations', 'associations/list');
    		$menu->associations->add('Add Association', 'associations/add');
    	});
    	
    	\Menu::make('admin_nav', function($menu){
    		$menu->add('Admin', 'admin');
    	});
    	
        return $next($request);
    }
}
