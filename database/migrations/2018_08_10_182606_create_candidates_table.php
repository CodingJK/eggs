<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->string('email',255);
            $table->string('phone',255);
            // $table->string('address',255);
            // $table->string('city',255);
            // $table->string('province',255);
            // $table->string('country',255);
            // $table->string('postalcode',255);
            $table->timestamps();
        });

        DB::update("ALTER TABLE candidates AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
