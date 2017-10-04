<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
	
	public function __construct(){
		$this->middleware('auth');
	}
	
    public static function menu($thang){
    	
    	
    }
    
}
