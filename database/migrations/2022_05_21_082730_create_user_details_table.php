<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('prefixe_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('nickname');
            $table->string('born');
            $table->string('address');
            $table->string('sub_district');
            $table->string('district');
            $table->string('province');
            $table->integer('email_id');
            $table->integer('com_id');
            $table->integer('dep_id');
            $table->integer('position_id');
            $table->string('approve_a');
            $table->string('approve_b');
            $table->string('status');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
