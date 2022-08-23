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
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id_empleado');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->integer('dpi');
            $table->bigInteger('id_tipo_usuario')->unsigned();
            $table->date('fecha_inicio_labores');
            $table->date('feche_nacimiento');
            $table->timestamps();


            $table->foreign('id_tipo_usuario')
                ->references('id_tipo_usuario')
                ->on('tipo_usuarios')
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
        Schema::dropIfExists('empleados');
    }
};
