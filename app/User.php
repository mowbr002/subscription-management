<?php

namespace App;

use App\Roles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function __construct(){
    	
    }
    
    public function getRoleAttribute($value){
    	//$role = $this->hasOne('Role','users_role_foreign');
    	$role = Roles::find($value);
    	return $role->name;
    }
    
    public function getNameAttribute($value){
    	return $value;
    }
    
    public function getIdAttribute($value){
    	return $value;
    }
    
    public function can($ability, $arguments = []){
    	
    }
    
    /**
     * Non-laravel functions
     */
    
    public static function retrieveUsersRole($this){
    	print_r($this);
    }
    
    public static function thing($role){
    	echo $role;
    }
    
    public static function retrieveRole($user){
    	$rid = $user->__get('role');
    	
    	$role = Roles::find($rid);
    	return $role->name;
    }
    
    
    
    
    
    
    
    
}