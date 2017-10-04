<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{
	private $role = null;
	
	public function __construct(){
		$this->middleware('auth');
	}
	
	public function show(Request $request, $id){
		//return view('dashboards.user', ['user' => User::findOrFail($id)]);
		$value = $request->session()->get('key');
		
		$data = array('id' => $id);
		
		if(Auth::check()){
			$user = Auth::user();
			$data['auth_id'] = $user->id;
			$this->role = $user->role;
			
			switch($this->role){
				case 0:
					$data['role'] = 'admin';
					break;
				case 1:
					$data['role'] = 'priv';
					break;
				default:
					$data['role'] = 'unpriv';
					break;
			}
			
			$data['name'] = $user->name;
		}
		
		if($this->role == 0 && $id != $data['auth_id']){
			$user = User::findOrFail($id);
			
			$data['name'] = $user->name;
			$data['role'] = $user->role;
		
			return view('dashboards.edit_user', ['data' => $data]);
		}elseif($this->role != 0 && $id != $data['auth_id']){
			return view('dashboards.not_authed', ['data' => $data]);
		}else{
			return view('dashboards.user', ['data' => $data]);
		}
	}
}