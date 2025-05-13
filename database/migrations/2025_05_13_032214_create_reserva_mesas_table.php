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
        Schema::create('reserva_mesas', function (Blueprint $table) {
            $table->integer('reserva_nro');
            $table->integer('mesa_nro');
            $table->integer('cantidad');

            $table->primary(['reserva_nro', 'mesa_nro']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_mesas');
    }
};
