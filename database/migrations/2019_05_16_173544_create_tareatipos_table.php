<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareatiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareatipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipoTarea')->unique();
            // $table->string('area')->nullable();
            $table->enum('area', ['Administrativa', 'Comercial', 'Compartida'])->default('Compartida');
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
        Schema::dropIfExists('tareatipos');
    }
}
