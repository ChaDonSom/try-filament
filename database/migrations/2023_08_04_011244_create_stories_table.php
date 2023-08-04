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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('title');
            $table->text('body')->nullable();

            // Game session
            $table->unsignedBigInteger('game_session_id')->nullable();
            $table->foreign('game_session_id')->references('id')->on('game_sessions')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->index('status');
            $table->index('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
