<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatMoyenneGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_moyenne_generals', function (Blueprint $table) {
            $table->id();
            $table->integer('etudiant');
            $table->integer('classe');
            $table->integer('filiere');
            $table->double('moyenne_general');
            $table->string('note');
            $table->integer('type_exam');
            
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
        Schema::dropIfExists('resultat_moyenne_generals');
    }
}
