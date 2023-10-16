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
        Schema::create('trabalhe_conosco', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->json('carreira')->nullable();
            $table->text('habilidades');
            $table->char('disponibilidade')->default('A'); //QUAL A SUA EXPERIÊNCIA GERAL NA ÁREA TECH?
            $table->string('experiencia', 255);
            $table->text('sobre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabalhe_conosco');
    }
};
