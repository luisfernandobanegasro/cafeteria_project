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
        Schema::table('venta_inventarios', function (Blueprint $table) {
            $table->foreign(['inventario_codigo'], 'venta_inventarios_inventario_codigo_fkey')->references(['codigo'])->on('inventarios')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['nota_venta_codigo'], 'venta_inventarios_nota_venta_codigo_fkey')->references(['codigo'])->on('nota_ventas')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('venta_inventarios', function (Blueprint $table) {
            $table->dropForeign('venta_inventarios_inventario_codigo_fkey');
            $table->dropForeign('venta_inventarios_nota_venta_codigo_fkey');
        });
    }
};
