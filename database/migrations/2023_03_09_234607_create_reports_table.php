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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->string('comment');
            $table->string('status');
            $table->string('rating');
            $table->string('date');
            $table->string('time');
            $table->string('stock');
            $table->string('stock_type');
            $table->string('stock_status');
            $table->string('stock_number');
            $table->string('stock_date');
            $table->string('due_date');
            $table->string('stock_total');
            $table->string('stock_total_tax');
            $table->string('stock_total_discount');
            $table->string('stock_total_paid');
            $table->string('order_id');
            $table->string('customer_id');
            $table->string('order_date');
            $table->string('order_due_date');
            $table->string('order_total');
            $table->string('order_total_tax');
            $table->string('order_total_discount');
            $table->string('order_total_paid');
            $table->string('order_total_due');
            $table->string('order_note');
            $table->string('order_terms');
            $table->string('order_status');
            $table->string('order_type');
            $table->string('order_number');
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_price');
            $table->string('product_tax');
            $table->string('product_discount');
            $table->string('product_total');
            $table->string('product_quantity');
            $table->string('product_unit');
            $table->string('product_category');
            $table->string('product_brand');
            $table->string('product_supplier');
            $table->string('product_status');
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
