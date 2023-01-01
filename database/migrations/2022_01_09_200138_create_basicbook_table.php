<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basicbook', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('grade');
            $table->string('subject');
            $table->string('adate');
            $table->string('atime');
            $table->string('venue');
            $table->string('address');
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
        Schema::dropIfExists('basicbook');
    }
}
