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
        Schema::create("user", function (Blueprint $table) {
            $table->string('id_user', 30)->primary();
            $table->string('nama_user', 30);
            $table->string('username', 30);
            $table->string('password', 250);
            $table->string('email', 200);
            $table->string('no_hp', 30);
            $table->string('wa', 30);
            $table->string('pin', 30);
            $table->string('id_jenis_user', 30);
            $table->string('status_user', 30);
            $table->string('delete_mark', 1);
            $table->string('create_by', 30);
            $table->timestamp('create_date')->useCurrent();
            $table->string('update_by', 30);
            $table->timestamp('update_date')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropIfExists('user');
    }
};
