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
        Schema::create('supplier_accounts', function (Blueprint $table) {
            $table->string('supplier_id');
            $table->string('name');
            $table->string('surname');
            $table->string('companyName');
            $table->string('address');
            $table->string('Phone');
            $table->string('email');
            $table->string('password');
            $table->string('remember_token');
            $table->string('vergiNo');
            $table->string('vergiDairesi');
            $table->string('faturaAdresi');
            $table->string('faturaAdresi2');
            $table->string('sirketturu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_accounts');
    }
};
