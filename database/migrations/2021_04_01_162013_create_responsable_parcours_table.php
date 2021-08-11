<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsableParcoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsable_parcours', function (Blueprint $table) {
            $table->id();
            $table->string('civil',255);
            $table->string('nom',255);
            $table->string('prenom',255);
            $table->date('ddn');
            $table->string('numero',255);
            $table->string('fonction',255);
            $table->string('detailsFonction',255);
            
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
        Schema::dropIfExists('responsable_parcours');
    }
}
