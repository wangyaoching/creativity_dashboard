<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('subtitle', 50);
            $table->longText('content');
            $table->string('source', 20); //各處室來源
            $table->string('position', 20);
            $table->datetime('begin_date');
            $table->date('end_date');
            $table->boolean('visibled')->default(false);          
            $table->integer('quota');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
