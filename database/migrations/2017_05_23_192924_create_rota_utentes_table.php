<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRotaUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rota_utentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rota_id')->unsigned();
            $table->integer('utente_id')->unsigned();
            $table->date('data_viagem');
            $table->date('data_embarque');
            $table->foreign('rota_id')->references('id')->on('rotas')->
                    onUpdate('cascade')->onDelete('cascade');
            $table->foreign('utente_id')->references('id')->on('utentes')->
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
        Schema::dropIfExists('rota_utentes');
    }
}
