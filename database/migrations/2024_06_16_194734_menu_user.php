<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('menu_user', function (Blueprint $table) {
            $table->increments('no_setting')->primary();
            $table->string('id_user', 30);
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->string('menu_id', 30);
            $table->foreign('menu_id')->references('menu_id')->on('menu')->onDelete('cascade');
            $table->string('create_date', 30);
            $table->timestamp('create_time');
            $table->string('delete_mark', 1);
            $table->string('update_by', 30);
            $table->timestamp('update_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menu_user', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });
        Schema::table('menu_user', function (Blueprint $table) {
            $table->dropForeign(['menu_id']);
        });
        Schema::dropIfExists('menu_user');
    }
};
