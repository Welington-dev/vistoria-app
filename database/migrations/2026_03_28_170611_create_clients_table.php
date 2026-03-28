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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->enum('tipo', ['pf', 'pj']);

            $table->string('nome');
            $table->string('sobrenome')->nullable();

            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();

            $table->string('empresa_nome')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};