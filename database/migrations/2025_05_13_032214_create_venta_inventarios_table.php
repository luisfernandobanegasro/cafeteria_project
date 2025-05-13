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
        Schema::create('venta_inventarios', function (Blueprint $table) {
            $table->integer('nota_venta_codigo');
            $table->integer('inventario_codigo');
            $table->integer('cantidad');

            $table->primary(['nota_venta_codigo', 'inventario_codigo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_inventarios');
    }
};
