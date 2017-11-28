<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profiles', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('users_id');
                $table->string('firstName');
                $table->string('lastName');
                $table->string('address');
                $table->string('jobTitle');
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
        Schema::dropIfExists('Profiles');
    }
}
