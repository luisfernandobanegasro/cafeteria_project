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
        Schema::table('compra_inventarios', function (Blueprint $table) {
            $table->foreign(['inventario_codigo'], 'compra_inventarios_inventario_codigo_fkey')->references(['codigo'])->on('inventarios')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['nota_compra_codigo'], 'compra_inventarios_nota_compra_codigo_fkey')->references(['codigo'])->on('nota_compras')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('compra_inventarios', function (Blueprint $table) {
            $table->dropForeign('compra_inventarios_inventario_codigo_fkey');
            $table->dropForeign('compra_inventarios_nota_compra_codigo_fkey');
        });
    }
};
