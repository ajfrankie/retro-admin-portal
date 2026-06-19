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
        Schema::create('custom_cake_requests', function (Blueprint $table) {

            $table->uuid('id')->primary();
            $table->foreignUuid('customer_id')->constrained()->cascadeOnDelete();
            $table->string('theme')->nullable();
            $table->string('cake_message')->nullable();
            $table->string('image_reference')->nullable();
            $table->date('event_date')->nullable();
            $table->text('special_notes')->nullable();
            $table->enum('status',['pending','approved','rejected','completed'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_cake_requests');
    }
};
