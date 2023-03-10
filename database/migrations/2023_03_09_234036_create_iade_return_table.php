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
        Schema::create('iade_return', function (Blueprint $table) {
            $table->id();
            $table->string('return_id');
            $table->string('customer_id');
            $table->string('return_date');
            $table->string('return_due_date');
            $table->string('return_total');
            $table->string('return_total_tax');
            $table->string('return_total_discount');
            $table->string('return_total_paid');
            $table->string('return_total_due');
            $table->string('return_note');
            $table->string('return_terms');
            $table->string('return_status');
            $table->string('return_type');
            $table->string('return_number');
            $table->string('return_amount');
            $table->string('return_customer_id');
            $table->string('return_supplier_id');
            $table->string('return_payment_type');
            $table->string('return_payment_status');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iade_return');
    }
};
