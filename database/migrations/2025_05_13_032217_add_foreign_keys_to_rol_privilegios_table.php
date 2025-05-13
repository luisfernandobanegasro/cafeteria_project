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
        Schema::table('rol_privilegios', function (Blueprint $table) {
            $table->foreign(['privilegio_id'], 'rol_privilegios_privilegio_id_fkey')->references(['id'])->on('privilegios')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['rol_id'], 'rol_privilegios_rol_id_fkey')->references(['id'])->on('roles')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rol_privilegios', function (Blueprint $table) {
            $table->dropForeign('rol_privilegios_privilegio_id_fkey');
            $table->dropForeign('rol_privilegios_rol_id_fkey');
        });
    }
};
