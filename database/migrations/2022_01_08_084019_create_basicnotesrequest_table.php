<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicnotesrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basicnotesrequest', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('grade');
            $table->string('subject');
            $table->string('notestittle');
            $table->string('descriptions');
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
        Schema::dropIfExists('basicnotesrequest');
    }
}
