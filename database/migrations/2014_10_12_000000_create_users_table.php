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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('No utilizar');
            $table->string('usuario')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable()->comment('No utilizar');
            $table->string('medico_firma')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('old_password')->nullable();
            $table->char('estado', 1)->default('1');
            $table->string('created_by')->nullable()->comment('0:Inactivo, 1: Activo');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
