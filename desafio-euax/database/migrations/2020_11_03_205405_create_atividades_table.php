<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Campos da Atividade
            $table->string('atividade')->nullable(false); // Nome da atividade
            $table->date('inicio')->nullable(false); // Data de início da atividade
            $table->date('fim')->nullable(false); // Data de término da atividade
            $table->boolean('finalizada')->default(false); // Flag indicando se a atividade foi finalizada ou não
            $table->foreignId('projeto_id')->constrained('projetos')->onDelete('cascade'); // Projeto relacionado à atividade
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividades');
    }
}
