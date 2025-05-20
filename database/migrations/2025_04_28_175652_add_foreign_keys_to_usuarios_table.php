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
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign(['id_tipo_usuario'], 'FKoow8x2v17mkigyn5wqptgucu')->references(['id_tipo_usuario'])->on('tipo_usuarios')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('FKoow8x2v17mkigyn5wqptgucu');
        });
    }
};
