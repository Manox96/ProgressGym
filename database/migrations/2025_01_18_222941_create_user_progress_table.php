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
        Schema::create('user_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assumes `users` table exists
            $table->timestamp('progress_date')->useCurrent(); // Sets default to current timestamp
            $table->string('photo_url', 255)->nullable(); // Store URL for photos (nullable)
            $table->text('notes')->nullable(); // Optional notes for progress tracking
            $table->timestamps(); // created_at, updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_progress');
    }
};
