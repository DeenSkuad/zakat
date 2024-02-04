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
        Schema::create('asnaf_spouses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asnaf_profile_id');
            $table->string('name');
            $table->string('ic_no', 15);
            $table->unsignedInteger('dependants');
            $table->auditable();

            $table->foreign('asnaf_profile_id')->references('id')->on('asnaf_profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asnaf_spouses');
    }
};
