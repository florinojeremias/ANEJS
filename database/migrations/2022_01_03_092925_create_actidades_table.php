<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actidades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tema');
            $table->text('descricao');
            $table->string('endereco');
            $table->string('fotografia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actidades');
    }
}
