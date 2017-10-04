<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functions extends Model
{
    protected $fillable = [
    		'name', 'route'
    ];
    
    protected $table		= 'functions';
    protected $primaryKey	= 'fid';
    
    public function group(){
    	return $this->belongsTo('App\FunctionGroups');
    }
    
    public function role(){
    	return $this->belongsTo('App\Roles');
    }
    
    public function getNameAttribute($value){
    	return $value;
    }
    
    public function getRouteAttribute($value){
    	return $value;
    }
    
    public function getGroupAttribute($value){
    	
    }
}
