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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('BillCode')->nullable();
            $table->string('userSecretKey')->nullable();
            $table->string('categoryCode')->nullable();
            $table->string('billName')->nullable();
            $table->string('billDescription')->nullable();
            $table->string('billPriceSetting')->nullable();
            $table->string('billPayorInfo')->nullable();
            $table->string('billAmount')->nullable();
            $table->string('billReturnUrl')->nullable();
            $table->string('billCallbackUrl')->nullable();
            $table->string('billExternalReferenceNo')->nullable();
            $table->string('billTo')->nullable();
            $table->string('billEmail')->nullable();
            $table->string('billPhone')->nullable();
            $table->string('billSplitPayment')->nullable();
            $table->string('billSplitPaymentArgs')->nullable();
            $table->string('billPaymentChannel')->nullable();
            $table->string('billContentEmail')->nullable();
            $table->string('billChargeToCustomer')->nullable();
            $table->string('billExpiryDate')->nullable();
            $table->string('billExpiryDays')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('order_id')->nullable();
            $table->auditable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_details');
    }
};
