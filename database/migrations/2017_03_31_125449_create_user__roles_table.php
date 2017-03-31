<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__roles', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('role_id');
            $table->timestamps();
            $table->primary('user_id', 'role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user__roles');
    }
}
