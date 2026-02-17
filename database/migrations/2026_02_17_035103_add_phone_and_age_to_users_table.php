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
        Schema::table('song_request_logs', function (Blueprint $table) {
            $table->dropColumn(['genre', 'playlist', 'request_time']);
            $table->integer('pos_id')->nullable();
            $table->string('pos')->nullable();
            $table->integer('client_id')->nullable();
            $table->string('client')->nullable();
        });

        Schema::create('liked_logs', function (Blueprint $table) {
            $table->id();

            // User info
            $table->string('username');
            $table->string('email');
            $table->string('phone')->nullable();

            // POS info
            $table->bigInteger('pos_id');
            $table->string('pos');

            // Client info
            $table->bigInteger('client_id');
            $table->string('client');

            // Status / Feedback
            $table->boolean('status')->default(true);
            $table->string('value');

            // Song info
            $table->string('title');
            $table->string('author');

            // Rule info
            $table->string('name_rule');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('song_request_logs', function (Blueprint $table) {
            $table->string('genre')->nullable();
            $table->string('playlist')->nullable();
            $table->time('request_time');
        });

        Schema::dropIfExists('liked_logs');
    }
};
