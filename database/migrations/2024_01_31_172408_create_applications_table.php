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
            $table->string('name')->nullable();
            $table->string('ic_no', 15)->nullable();
            $table->string('disease_background')->nullable();
            $table->string('treatment_period')->nullable();
            $table->string('medical_cost')->nullable();
            $table->string('frequency')->nullable();
            $table->string('self_support')->nullable();
            $table->string('comments')->nullable();
            $table->auditable();
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
