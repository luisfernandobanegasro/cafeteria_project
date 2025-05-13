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
        Schema::table('recetas', function (Blueprint $table) {
            $table->foreign(['ingrediente_codigo'], 'recetas_ingrediente_codigo_fkey')->references(['codigo'])->on('ingredientes')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['producto_codigo'], 'recetas_producto_codigo_fkey')->references(['codigo'])->on('productos')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->dropForeign('recetas_ingrediente_codigo_fkey');
            $table->dropForeign('recetas_producto_codigo_fkey');
        });
    }
};
