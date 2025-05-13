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
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->increments('codigo');
            $table->decimal('importe', 12);
            $table->date('fecha');
            $table->integer('usuario_codigo');
            $table->integer('metodo_pago_codigo');
            $table->integer('reserva_nro')->nullable()->unique('nota_ventas_reserva_nro_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_ventas');
    }
};
