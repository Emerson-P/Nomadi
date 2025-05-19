<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('destinos_turisticos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('localizacao');
            $table->text('descricao')->nullable();
            $table->text('atracoes_turisticas')->nullable();
            $table->string('caminho_fotos')->nullable(); // pode guardar o caminho da imagem ou URL
            $table->decimal('precos', 10, 2)->nullable(); // exemplo de preço com 2 casas decimais
            $table->text('hoteis')->nullable(); // lista em JSON ou texto simples
            $table->text('pacotes_promocionais')->nullable();
            $table->dateTime('dia_horario_ida')->nullable();
            $table->dateTime('dia_horario_volta')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('destinos_turisticos');
    }
};
