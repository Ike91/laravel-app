<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHightschoolATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hightschool_a', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('form_of_contact');
            $table->string('contact');
            $table->string('grade');
            $table->string('subject');
            $table->string('appt');
            $table->string('appd');
            $table->string('venue');
            $table->string('Venue_address');
            $table->string('shortd');
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
        Schema::dropIfExists('hightschool_a');
    }
}
