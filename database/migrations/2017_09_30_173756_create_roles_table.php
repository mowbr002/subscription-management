<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('rid');
            $table->timestamps();
            $table->string('name',60);
        });
        
        	Schema::table('users', function (Blueprint $table) {
        		$table->boolean('active')->default('true');
        		$table->integer('role')->nullable();
        		$table->foreign('role')->references('rid')->on('roles');
        	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
