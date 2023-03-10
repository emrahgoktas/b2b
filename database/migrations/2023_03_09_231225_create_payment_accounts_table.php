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
        Schema::create('payment_accounts', function (Blueprint $table) {
            $table->integer('payment_id');
            $table->string('amount');
            $table->string('customer_id');
            $table->string('supplier_id');
            $table->string('payment_type');
            $table->string('payment_status');
            $table->string('payment_number');
            $table->string('payment_date');
            $table->string('due_date');
            $table->string('payment_total');
            $table->string('payment_total_tax');
            $table->string('payment_total_discount');
            $table->string('payment_total_paid');
            $table->string('payment_total_due');
            $table->string('payment_note');
            $table->string('payment_terms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_accounts');
    }
};
