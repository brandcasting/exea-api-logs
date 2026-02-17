<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('song_request_logs', function (Blueprint $table) {
            $table->id();

            // Datos del usuario
            $table->string('username');
            $table->string('email');
            $table->string('phone');

            // Datos de la canción solicitada
            $table->string('song_name');
            $table->string('album')->nullable();
            $table->string('genre')->nullable();
            $table->string('playlist')->nullable();

            // Hora de solicitud
            $table->time('request_time');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('song_request_logs');
    }
};

