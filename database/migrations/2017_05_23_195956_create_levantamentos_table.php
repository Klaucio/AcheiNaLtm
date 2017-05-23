<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevantamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levantamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();//quem regista
            $table->integer('utente_id')->unsigned();//o receptor ou dono
            $table->integer('bagagem_id')->unsigned();
            $table->integer('publicacao_id')->unsigned();
            $table->foreign('bagagem_id')->references('id')->on('bagagems')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->
            onUpdate('cascade')->onDelete('cascade');
            $table->foreign('utente_id')->references('id')->on('utentes')->
            onUpdate('cascade')->onDelete('cascade');
            $table->foreign('publicacao_id')->references('id')->on('publicacaos')->
            onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levantamentos');
    }
}
