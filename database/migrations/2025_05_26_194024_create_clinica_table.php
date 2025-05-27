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
        Schema::create('clinica', function (Blueprint $table) {
            $table->id();
            $table->char('codigo', 5)->nullable();
            $table->integer('usuario_id')->nullable();
            $table->integer('ubigeo_id')->nullable();
            $table->string('nombre')->nullable();
            $table->string('ruc', 11)->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('tipo_clinica_id')->nullable();
            $table->string('ipress', 10)->nullable();
            $table->string('renipress', 10)->nullable();
            $table->char('estado', 1)->default('1');
            $table->string('zona')->nullable();
            $table->string('igv')->nullable();
            $table->string('sede')->nullable();
            $table->string('ubicacion')->nullable();
            $table->integer('id_equiv_sis')->nullable();
            $table->timestamps();
            $table->boolean('retener')->default(0);
            $table->boolean('retraccion')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinica');
    }
};
