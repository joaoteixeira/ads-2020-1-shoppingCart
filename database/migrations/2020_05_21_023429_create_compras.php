<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('usuarios');
            $table->integer('produto')->unsigned();
            $table->foreign('produto')->references('id')->on('produtos');
            $table->integer('quantidade')->default(1);
            $table->timestamp('data')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('finalizado')->default(false);
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
        Schema::dropIfExists('compras');
    }
}
