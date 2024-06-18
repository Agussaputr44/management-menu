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
        Schema::create('user_foto', function (Blueprint $table) {
            $table->increments('no_foto')->primary();
            $table->string('id_user', 30);
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->string('foto', 200);
            $table->string('create_by', 30)->nullable();
            $table->timestamp('create_date')->nullable();
            $table->string('delete_mark', 1)->default('0');
            $table->string('update_by', 30)->nullable();
            $table->timestamp('update_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_foto', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        Schema::dropIfExists('user_foto');
    }
};
