<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBagagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bagagems', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
//            $table->integer('bilhet_id'); para caso de erros nas consultas
            $table->integer('item_id')->unsigned();
            $table->foreign('id')->references('id')->on('rota_utentes')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')
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
        Schema::dropIfExists('bagagems');
    }
}
