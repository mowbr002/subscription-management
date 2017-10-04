<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table		= "roles";
    protected $primaryKey	= "rid";
    
    protected $fillable		= "name";
    private $user = null;
    
    public function __construct(){
    	$this->user = User::get();
    }
    
    public function functions(){
    	return $this->hasMany('App\Functions');
    }
    
    public function getNameAttribute($value){
    	return $value;
    }
}
