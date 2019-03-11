<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('main_content')->nullable();
            $table->string('image_url')->nullable();
            $table->string('image_alt')->nullable();
            $table->json('classes')->nullable();
            $table->integer('sort')->default(0);
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
        Schema::dropIfExists('class_cards');
    }
}
