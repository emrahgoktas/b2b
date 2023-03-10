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
        Schema::create('sale_order', function (Blueprint $table) {
            $table->id();
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


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_order');
    }
};
