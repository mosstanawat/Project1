<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildingOfType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_of_building', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->timestamps();
        $table->integer('user_id')->nullable();
        $table->integer('id_of_pic')->nullable();
        $table->string('geometry')->nullable();
        $table->string('material')->nullable();
        $table->boolean('regular')->nullable();
        $table->boolean('random')->nullable();
        $table->boolean('simple')->nullable();
        $table->boolean('busy')->nullable();
        $table->boolean('inorganic')->nullable();
        $table->boolean('organic')->nullable();
        $table->boolean('dynamic')->nullable();
        $table->boolean('delicate')->nullable();
        $table->boolean('solid')->nullable();
        $table->boolean('soft')->nullable();
        $table->boolean('flat')->nullable();
        $table->boolean('light')->nullable();
        $table->boolean('modern')->nullable();
        $table->boolean('massive')->nullable();
        $table->boolean('postmodern')->nullable();
        $table->boolean('craggy')->nullable();
        $table->boolean('classical')->nullable();
        $table->boolean('luxury')->nullable();
        $table->boolean('cheap')->nullable();
        $table->boolean('transparent')->nullable();
        $table->boolean('speed')->nullable();
        $table->boolean('like')->nullable();
        $table->string('other')->nullable();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_of_building');
    }
}
