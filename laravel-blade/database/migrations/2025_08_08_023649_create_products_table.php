<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a migration (cria a tabela).
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Cria a coluna 'id' como chave primária auto-incrementável
            $table->string('name'); // Cria uma coluna de texto para o nome do produto
            $table->integer('quantity'); // Cria uma coluna inteira para a quantidade (estoque, por exemplo)
            $table->decimal('price', 20, 2); // Cria uma coluna decimal para o preço (20 dígitos no total, 2 após a vírgula)
            $table->string('barcode')->unique(); // Cria uma coluna de texto para o código de barras e garante que seja único
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverte a migration (apaga a tabela).
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
