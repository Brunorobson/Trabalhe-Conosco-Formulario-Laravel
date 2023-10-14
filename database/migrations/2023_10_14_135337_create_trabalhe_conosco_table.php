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
            $table->string('nome_completo');
            $table->string('email');
            $table->string('telefone');
            $table->char('carreira', 2)->default('AA'); //QUAIS CARREIRAS VOCÊ ESTÁ BUSCANDO?
            $table->text('habilidades');
            $table->char('experiência')->default('A'); //QUAL A SUA EXPERIÊNCIA GERAL NA ÁREA TECH?
            $table->char('momento_profissional', 2)->default('AA'); //COMO ESTA SEU MOMENTO PROFISSIONAL?
            $table->string('cidade_residencia');
            $table->textarea('sobre');
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
