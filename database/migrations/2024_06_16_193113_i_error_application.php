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
        Schema::create('i_user_application', function (Blueprint $table) {
            $table->string('error_id')->primary();
            $table->string('id_user', 30);
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->string('error_date', 30);
            $table->string('modules', 100);
            $table->string('controller', 200);
            $table->string('function', 200);
            $table->string('error_line', 30);
            $table->string('error_message', 1000);
            $table->string('status', 30);
            $table->string('param', 300);
            $table->date('create_date');
            $table->timestamps(); // Ini akan membuat kolom created_at dan updated_at dengan tipe timestamp
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
        Schema::table('i_user_application', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
        });

        Schema::dropIfExists('i_user_application');
    }
};
