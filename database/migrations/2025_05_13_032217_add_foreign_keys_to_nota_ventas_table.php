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
        Schema::table('nota_ventas', function (Blueprint $table) {
            $table->foreign(['metodo_pago_codigo'], 'nota_ventas_metodo_pago_codigo_fkey')->references(['codigo'])->on('metodo_pagos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['reserva_nro'], 'nota_ventas_reserva_nro_fkey')->references(['nro'])->on('reservas')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['usuario_codigo'], 'nota_ventas_usuario_codigo_fkey')->references(['codigo'])->on('usuarios')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nota_ventas', function (Blueprint $table) {
            $table->dropForeign('nota_ventas_metodo_pago_codigo_fkey');
            $table->dropForeign('nota_ventas_reserva_nro_fkey');
            $table->dropForeign('nota_ventas_usuario_codigo_fkey');
        });
    }
};
