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
        Schema::create('invoice_accounts', function (Blueprint $table) {
          
            $table->string('invoice_id');
            $table->string('amount');
            $table->string('customer_id');
            $table->string('supplier_id');
            $table->string('invoice_type');
            $table->string('invoice_number');
            $table->string('invoice_date');
            $table->string('due_date');
            $table->string('invoice_total');
            $table->string('invoice_total_tax');
            $table->string('invoice_total_discount');
            $table->string('invoice_total_paid');
            $table->string('invoice_total_due');
            $table->string('invoice_note');
            $table->string('invoice_terms');
            $table->string('invoice_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_accounts');
    }
};
