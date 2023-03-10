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
        Schema::create('product_stock', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->integer('stock');
            $table->string('stock_type');
            $table->string('stock_status');
            $table->string('stock_number');
            $table->string('stock_date');
            $table->string('due_date');
            $table->string('stock_total');
            $table->string('stock_total_tax');
            $table->string('stock_total_discount');
            $table->string('stock_total_paid');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stock');
    }
};
