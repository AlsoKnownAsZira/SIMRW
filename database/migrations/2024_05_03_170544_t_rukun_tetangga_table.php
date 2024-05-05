<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_rukun_tetangga', function (Blueprint $table) {
            $table->id('id_RT');
            $table->unsignedSmallInteger('nomor_RT')->unique();
            $table->text('alamat');
            $table->timestamps();

            $table->foreignId('id_RW')->constrained('t_rukun_warga', 'id_RW')->onUpdate('cascade')->onDelete('cascade');
            $table->string('NIK_RT', 16);
            $table->foreign('NIK_RT')->references('NIK')->on('t_users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_rukun_tetangga');
    }
};
