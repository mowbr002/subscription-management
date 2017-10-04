<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $table = "association";
    protected $primaryKey = "aid";
    
    protected $fillable = [
    	'name'	
    ];
    
    public function get($field){
    
    }
    
}
