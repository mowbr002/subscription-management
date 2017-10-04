<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Association;

class GetAssociationController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
	
    public function showAll(){
    	$associations = Association::all();
    	
    	return view('associations.list', ['associations' => $associations]);
    }
    
    public function show(Association $aid){
    	$association = Association::find($aid['aid']);
    	
//     	echo '<pre>';
//     	print_r($association);
//     	echo '</pre>';
    	
    	return view('associations.single', ['data' => $association]);
    }
}
