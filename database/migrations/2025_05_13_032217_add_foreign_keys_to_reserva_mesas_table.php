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
        Schema::table('reserva_mesas', function (Blueprint $table) {
            $table->foreign(['mesa_nro'], 'reserva_mesas_mesa_nro_fkey')->references(['nro'])->on('mesas')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['reserva_nro'], 'reserva_mesas_reserva_nro_fkey')->references(['nro'])->on('reservas')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reserva_mesas', function (Blueprint $table) {
            $table->dropForeign('reserva_mesas_mesa_nro_fkey');
            $table->dropForeign('reserva_mesas_reserva_nro_fkey');
        });
    }
};
