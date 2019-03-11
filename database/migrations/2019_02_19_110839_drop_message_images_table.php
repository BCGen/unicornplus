<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropMessageImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('message_images');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('message_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('message_announcement_id');
            $table->string('file_url')->nullable();
            $table->string('file_name')->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }
}
