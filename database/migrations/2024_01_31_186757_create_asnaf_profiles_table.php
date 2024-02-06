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
            $table->unsignedInteger('user_id');
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->string('postcode', 10)->nullable();
            $table->string('phone_no', 30)->nullable();
            $table->unsignedInteger('kariah_id');
            $table->string('amil_comment')->nullable();
            $table->string('signature')->nullable();
            $table->string('front_ic')->nullable();
            $table->string('back_ic')->nullable();
            $table->string('muallaf_card')->nullable();
            $table->unsignedInteger('gender_id')->nullable();
            $table->unsignedInteger('marital_status_id')->nullable();
            $table->unsignedInteger('occupation_id')->nullable();
            $table->unsignedBigInteger('salary')->nullable();
            $table->unsignedInteger('bank_id')->nullable();
            $table->string('bank_account_no', 30)->nullable();
            $table->string('total_family_income', 10)->nullable();
            $table->unsignedInteger('head_of_family_id')->nullable();
            $table->unsignedInteger('adult_id')->nullable();
            $table->unsignedInteger('education_id')->nullable();
            $table->unsignedInteger('school_id')->nullable();
            $table->unsignedBigInteger('year')->nullable();
            $table->unsignedBigInteger('total_children')->nullable();
            $table->unsignedBigInteger('total_children_ipt')->nullable();
            $table->unsignedBigInteger('total_children_school')->nullable();
            $table->unsignedBigInteger('total_children_underage')->nullable();
            $table->unsignedBigInteger('total_children_oku')->nullable();
            $table->unsignedBigInteger('total_dependant_cost')->nullable();
            $table->auditable();

            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('kariah_id')->references('id')->on('kariahs');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('education_id')->references('id')->on('educations');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->foreign('head_of_family_id')->references('id')->on('head_of_families');
            $table->foreign('adult_id')->references('id')->on('adults');
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
