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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nome_completo')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cpf')->nullable()->unique();
            $table->string('endereco')->nullable();
            $table->string('passaporte')->nullable();
        });
    }

    
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {   
            $table->dropColumn([
                'nome_completo',
                'data_nascimento',
                'nacionalidade',
                'telefone',
                'cpf',
                'endereco',
                'passaporte'
            ]);
        });
    }
};
