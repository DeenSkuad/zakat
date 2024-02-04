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
        Schema::create('asnaf_spouse_dependants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asnaf_spouse_id');
            $table->string('name');
            $table->unsignedInteger('age');
            $table->auditable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependants');
    }
};
