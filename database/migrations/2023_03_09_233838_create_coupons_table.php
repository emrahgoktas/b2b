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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code');
            $table->string('coupon_type');
            $table->string('coupon_value');
            $table->string('coupon_min_value');
            $table->string('coupon_max_value');
            $table->string('coupon_start_date');
            $table->string('coupon_end_date');
            $table->string('coupon_status');
            $table->string('coupon_total');
            $table->string('coupon_used');
            $table->string('coupon_created_by');
            $table->string('coupon_created_date');
            $table->string('coupon_modified_by');
            $table->string('coupon_modified_date');
            $table->string('coupon_note');
            $table->string('coupon_terms');
            $table->string('coupon_description');
            $table->string('coupon_image');
            $table->string('coupon_product');
            $table->string('coupon_category');
            $table->string('coupon_customer');
            $table->string('coupon_shipping');
            $table->string('coupon_total_usage');
            $table->string('coupon_total_usage_customer');
            $table->string('coupon_total_usage_product');
            $table->string('coupon_total_usage_category');
            $table->string('coupon_total_usage_shipping');
            $table->string('coupon_total_usage_customer_group');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
