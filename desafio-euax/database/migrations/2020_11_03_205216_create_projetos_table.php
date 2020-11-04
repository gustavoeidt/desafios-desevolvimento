<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Campos do Projeto
            $table->string('projeto')->nullable(false); // Nome do projeto
            $table->date('inicio')->nullable(false); // Data de início do projeto
            $table->date('fim')->nullable(false); // Data de término do projeto
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Usuário dono do projeto
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
