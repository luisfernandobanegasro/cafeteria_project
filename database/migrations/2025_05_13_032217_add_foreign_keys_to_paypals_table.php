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
        Schema::table('paypals', function (Blueprint $table) {
            $table->foreign(['codigo'], 'paypals_codigo_fkey')->references(['codigo'])->on('metodo_pagos')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paypals', function (Blueprint $table) {
            $table->dropForeign('paypals_codigo_fkey');
        });
    }
};
