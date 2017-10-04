<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Association;

class AddAssociationController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	
    public function showAddScreen(Request $request){
    	$role = \App\User::retrieveRole($request->user());
    	
    	$data = array(
    		'role' => $role,	
    	);
    	
    	return view('associations.add', ['data' => $data]);
	}
	
	public function store(Request $request){
		$association = new Association();
		
		$request->validate([
				'name'	=> 'required|unique:association|max:160',
		]);
		
		$association->name = $request->name;
		
		$association->save();
		
		return redirect('associations/list');
	}
}
