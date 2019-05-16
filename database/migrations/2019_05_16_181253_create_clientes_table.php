<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('identificacion')->unique();
            $table->date('fechaNacimiento');
            $table->string('email');
            $table->string('direccion');
            $table->string('telefono1', 20);
            $table->string('telefono2', 20)->nullable();
            $table->enum('estadoCivil', ['soltero(a)', 'casado(a)', 'viudo(a)', 'divorsiado(a)', 'union libre', 'no responde'])->default('no responde');
            $table->enum('ocupacion', ['empleado', 'independiente', 'empresario'])->default('independiente');
            // $table->unsignedBigInteger('disponibilidadPago');
            $table->unsignedBigInteger('estadoPropiedad');
            $table->unsignedBigInteger('proyectoInteres');
            $table->unsignedBigInteger('necesidadPrimaria');

            $table->unsignedBigInteger('otraNecesidad');

            // $table->unsignedBigInteger('bienNegociable');
            $table->unsignedBigInteger('interes');
            $table->enum('referido', ['Si', 'No'])->default('No');
            $table->text('nota');
            $table->unsignedBigInteger('estadoCliente');
            $table->unsignedBigInteger('clasificacion');

            /*-- SECTION relaciones
            +======================+
            |REFERENCIAS PARA CREAR|
            |      RELACIONES      |
            +======================+
            --*/
            // $table->foreign('disponibilidadPago')->references('id')->on('cliente_dispopago')->onDelete('cascade');
            $table->foreign('estadoPropiedad')->references('id')->on('propiedadestados')->onDelete('cascade');
            $table->foreign('proyectoInteres')->references('id')->on('proyectos')->onDelete('cascade');
            $table->foreign('necesidadPrimaria')->references('id')->on('tiposProyectos')->onDelete('cascade');

            $table->foreign('otraNecesidad')->references('id')->on('propventas')->onDelete('cascade');

            // $table->foreign('bienNegociable')->references('id')->on('cliente_propventa')->onDelete('cascade');
            $table->foreign('interes')->references('id')->on('tiempoinversiones')->onDelete('cascade');
            $table->foreign('estadoCliente')->references('id')->on('tipoclientes')->onDelete('cascade');
            $table->foreign('clasificacion')->references('id')->on('clasificaciones')->onDelete('cascade');

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
        Schema::dropIfExists('clientes');
    }
}
