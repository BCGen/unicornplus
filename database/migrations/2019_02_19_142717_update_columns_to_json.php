<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsToJson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->longText('image_alt')->nullable()->change();
        });

        Schema::table('class_cards', function (Blueprint $table) {
            $table->json('title')->nullable()->change();
            $table->json('image_alt')->nullable()->change();
        });

        Schema::table('school_environments', function (Blueprint $table) {
            $table->json('title')->nullable()->change();
            $table->json('image_alt')->nullable()->change();
        });

        Schema::table('message_announcements', function (Blueprint $table) {
            $table->json('title')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('image_alt')->nullable()->change();
        });

        Schema::table('class_cards', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('image_alt')->nullable()->change();
        });

        Schema::table('school_environments', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('image_alt')->nullable()->change();
        });

        Schema::table('message_announcements', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
        });
    }
}
