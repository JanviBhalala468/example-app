<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMany1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('many1', function (Blueprint $table) {
            $table->id();
            $table->biginteger('role_id')->unsigned()->index();
            $table->biginteger('person_id')->unsigned()->index();
            $table->foreign('person_id')->references('id')->on('people');

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('many1');
    }
}