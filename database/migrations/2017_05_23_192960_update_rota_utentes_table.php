<?php
/**
 * Created by PhpStorm.
 * User: claucio
 * Date: 5/23/17
 * Time: 11:48 PM
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateRotaUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rota_utentes', function (Blueprint $table) {
            $table->integer('bagagem_id')->nullable()->after('utente_id')->references('id')->on('bagagems')
                ->onUpdate('cascade')->onDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rota_utentes', function (Blueprint $table) {
            $table->dropColumn('bagagem_id');
        });
    }
}
