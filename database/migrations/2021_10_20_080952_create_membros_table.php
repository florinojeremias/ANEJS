<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('nome_mae');
            $table->string('nome_pai');
            $table->enum('genero',['M','F']);
            $table->string('nacionalidade');
            $table->enum('estado_civil',['solteiro','casado','divorciado','marital','viuvo']);
            $table->date('data_nascimento');
            $table->string('numero_documento_identificacao');
            $table->string('local_emissao');
            $table->string('contacto');
            $table->softDeletes('deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros');
    }
}
