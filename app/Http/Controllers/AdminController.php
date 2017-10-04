<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
	}
	
	public function showAdminScreen(Request $request){
		$role = \App\User::retrieveRole($request->user());
		
		if($role != 'admin'){
			return redirect(warnings.no_admin_auth);
		}
		
		$data = array(
				'role' => $role,
		);
		
		$data['groups'] = \App\FunctionGroups::get();
		
		$data['grouped'] = \App\FunctionGroups::with('functions')->get();
		
		$data['functions'] = \App\Functions::get();
		
		return view('dashboards.admin_dashboard', ['data' => $data]);
	}
    
	
}
