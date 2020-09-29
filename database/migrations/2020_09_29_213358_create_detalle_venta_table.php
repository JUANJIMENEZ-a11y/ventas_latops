<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id();
            $table->string('articulo');
            $table->string('cantidad');
            $table->bigInteger('id_venta')->unsigned();
            $table->bigInteger('id_articulo')->unsigned();
            $table->foreign('id_venta')->references('id')->on('ventas');
            $table->foreign('id_articulo')->references('id')->on('articulos');


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
        Schema::dropIfExists('detalle_venta');
    }
}
