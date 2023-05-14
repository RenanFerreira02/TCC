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
        Schema::create('serie_conteudo', function (Blueprint $table) {
            $table->id('idConteudo');
            $table->integer('idSerie')->index();
            $table->integer('idMateria')->index();
            $table->text('conteudo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serie_conteu');
    }
};
