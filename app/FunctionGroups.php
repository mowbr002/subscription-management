<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FunctionGroups extends Model
{
    protected $table		= 'function_groups';
    protected $primaryKey	= 'fgid';
    
    public function functions(){
    	return $this->hasMany('App\Functions','fgid');
    }
}
