<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designacao');
            $table->string('sensibilidade')->nullable();
            $table->integer('bagagem_id')->unsigned()->nullable();
            $table->foreign('bagagem_id')->references('id')->on('bagagems')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('encomenda_id')->unsigned()->nullable();
            $table->foreign('encomenda_id')->references('id')->on('encomendas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
