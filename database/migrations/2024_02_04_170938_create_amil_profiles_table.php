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
        Schema::create('amil_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('type', 30);
            $table->string('amil_no', 10);
            $table->string('phone_no', 20);
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('kariah_id');
            $table->auditable();

            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('kariah_id')->references('id')->on('kariahs');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amil_profiles');
    }
};
