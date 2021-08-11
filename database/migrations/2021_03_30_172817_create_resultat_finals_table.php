<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_finals', function (Blueprint $table) {
            $table->id();
            $table->integer('etudiant_id');
            $table->integer('filiere_id');
            $table->integer('classe_id');
            $table->integer('ue');
            $table->double('totalNote');
            $table->double('moyenne');
            $table->integer('type_exam_id');
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
        Schema::dropIfExists('resultat_finals');
    }
}
