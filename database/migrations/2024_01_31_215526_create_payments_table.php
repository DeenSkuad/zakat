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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('kariah_id');
            $table->unsignedInteger('zakat_type_id');
            $table->float('amount');
            $table->auditable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kariah_id')->references('id')->on('kariahs');
            $table->foreign('zakat_type_id')->references('id')->on('zakat_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
