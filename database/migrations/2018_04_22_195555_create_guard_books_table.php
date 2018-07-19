<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guard_books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gfname');
            $table->string('glname');
            $table->string('email');
            $table->string('phone');
            $table->string('gender')->nullable();
            $table->string('exProfession')->nullable();
            $table->string('qualification')->nullable();
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
        Schema::dropIfExists('guard_books');
    }
}
