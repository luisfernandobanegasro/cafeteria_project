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
        Schema::table('nota_compras', function (Blueprint $table) {
            $table->foreign(['metodo_pago_codigo'], 'nota_compras_metodo_pago_codigo_fkey')->references(['codigo'])->on('metodo_pagos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['proveedor_codigo'], 'nota_compras_proveedor_codigo_fkey')->references(['codigo'])->on('proveedores')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nota_compras', function (Blueprint $table) {
            $table->dropForeign('nota_compras_metodo_pago_codigo_fkey');
            $table->dropForeign('nota_compras_proveedor_codigo_fkey');
        });
    }
};
