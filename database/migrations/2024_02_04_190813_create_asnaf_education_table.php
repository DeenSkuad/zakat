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
        Schema::create('asnaf_education', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asnaf_profile_id');
            $table->string('highest_education');
            $table->string('school');
            $table->unsignedBigInteger('year');
            $table->auditable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asnaf_education');
    }
};
