<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcacions', function (Blueprint $table) {
            $table->id('id_marcaje');
            $table->bigInteger('id_empleado')->unsigned();
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();

            $table->foreign('id_empleado')
                ->references('id_empleado')
                ->on('empleados')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcacions');
    }
};
