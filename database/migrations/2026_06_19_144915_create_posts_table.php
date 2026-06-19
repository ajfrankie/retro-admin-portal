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
        Schema::create('posts', function (Blueprint $table) {

            $table->uuid('id')->primary();

            $table->foreignId('author_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->string('title', 200);
            $table->string('slug', 220)->unique();
            $table->longText('content');
            $table->string('featured_image')->nullable();

            $table->enum('status', [
                'draft',
                'published',
                'archived'
            ])->default('draft');

            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
