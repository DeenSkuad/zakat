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
