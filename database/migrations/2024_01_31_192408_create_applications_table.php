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
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asnaf_profile_id');
            $table->unsignedInteger('service_id');
            $table->string('name')->nullable();
            $table->string('ic_no', 15)->nullable();
            $table->string('disease_background')->nullable();
            $table->string('treatment_period')->nullable();
            $table->string('medical_cost')->nullable();
            $table->string('frequency')->nullable();
            $table->string('medical_tool')->nullable();
            $table->string('self_support')->nullable();
            $table->string('comments')->nullable();
            $table->string('heir_name')->nullable();
            $table->string('her_ic_no')->nullable();
            $table->auditable();

            $table->foreign('asnaf_profile_id')->references('id')->on('asnaf_profiles');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
