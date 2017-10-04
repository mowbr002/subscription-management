<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->increments('fid');
            $table->integer('fgid');
            $table->integer('rid');
            $table->string('name',60);
            $table->string('route',160);
            $table->integer('owner')->nullable();
            $table->boolean('active')->default('true');
        });
        
        Schema::create('function_groups', function(Blueprint $table){
        	$table->increments('fgid');
        	$table->string('name',100);
        	$table->boolean('active')->default('true');
        });
        
        Schema::table('functions', function(Blueprint $table){
        	$table->foreign('fgid')
        			->references('fgid')
        			->on('function_groups')
        			->onUpdate('cascade')
        			->onDelete('restrict');
        });
        
        Schema::table('functions', function(Blueprint $table){
        	$table->foreign('rid')
        			->references('rid')
        			->on('roles')
        			->onUpdate('cascade')
        			->onDelete('restrict');
        });
        
        Schema::table('functions', function(Blueprint $table){
        	$table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functions');
        Schema::dropIfExists('function_groups');
    }
}
