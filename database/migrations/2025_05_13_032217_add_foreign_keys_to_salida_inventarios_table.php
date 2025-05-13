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
        Schema::table('salida_inventarios', function (Blueprint $table) {
            $table->foreign(['inventario_codigo'], 'salida_inventarios_inventario_codigo_fkey')->references(['codigo'])->on('inventarios')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['nota_salida_codigo'], 'salida_inventarios_nota_salida_codigo_fkey')->references(['codigo'])->on('nota_salidas')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('salida_inventarios', function (Blueprint $table) {
            $table->dropForeign('salida_inventarios_inventario_codigo_fkey');
            $table->dropForeign('salida_inventarios_nota_salida_codigo_fkey');
        });
    }
};
