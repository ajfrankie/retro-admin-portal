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
    Schema::create('orders', function (Blueprint $table) {

        $table->uuid('id')->primary();
        $table->foreignUuid('customer_id')->constrained()->restrictOnDelete();
        $table->string('order_number')->unique();
        $table->enum('status',['pending','confirmed','preparing','ready','delivered','cancelled'])->default('pending');
        $table->decimal('subtotal',10,2)->default(0);
        $table->decimal('tax',10,2)->default(0);
        $table->decimal('discount',10,2)->default(0);
        $table->decimal('total',10,2)->default(0);
        $table->timestamp('order_date')->useCurrent();

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
