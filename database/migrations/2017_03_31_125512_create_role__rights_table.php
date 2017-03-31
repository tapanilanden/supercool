<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role__rights', function (Blueprint $table) {
            $table->integer('role_id');
            $table->integer('right_id');
            $table->timestamps();
            $table->primary('role_id','user_id');
            $table->foreign('right_id')->references('id')->on('rights')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role__rights');
    }
}
