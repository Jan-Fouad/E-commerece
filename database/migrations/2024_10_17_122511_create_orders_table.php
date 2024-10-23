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
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('customer_name')->nullable();
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->integer('quantity');
            $table->decimal('total_price');
            $table->string('status')->default('pending');
            $table->timestamp('order_date')->useCurrent();
            $table->text('shipping_address');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
