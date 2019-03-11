<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnsFromFormDownloads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_downloads', function (Blueprint $table) {
            $table->dropColumn('file_name');
            $table->dropColumn('file_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_downloads', function (Blueprint $table) {
            $table->string('file_name')->nullable();
            $table->string('file_url')->nullable();
        });
    }
}
