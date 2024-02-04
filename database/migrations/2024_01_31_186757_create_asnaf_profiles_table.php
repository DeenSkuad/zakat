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
        Schema::create('asnaf_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('state_id');
            $table->string('postcode', 10);
            $table->string('phone_no', 30);
            $table->unsignedInteger('kariah_id');
            $table->string('amil_comment')->nullable();
            $table->string('signature')->nullable();
            $table->string('front_ic')->nullable();
            $table->string('back_ic')->nullable();
            $table->string('muallaf_card')->nullable();
            $table->unsignedInteger('gender')->nullable();
            $table->unsignedInteger('marital_status')->nullable();
            $table->string('employment')->nullable();
            $table->unsignedBigInteger('salary')->nullable();
            $table->string('bank_account', 50)->nullable();
            $table->string('bank_account_no', 30)->nullable();
            $table->string('total_family_income', 10)->nullable();
            $table->string('total_family_income', 10)->nullable();
            $table->string('head_of_family')->nullable();
            $table->string('adult')->nullable();
            $table->string('dependants')->nullable();
            $table->string('dependants_cost')->nullable();
            $table->auditable();

            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('kariah_id')->references('id')->on('kariahs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
