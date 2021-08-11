<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('ddn');
            $table->string('numero_immatricule');
            $table->string('filiere_id');
            $table->string('classe_id');
            $table->string('numero_bourse');
            $table->string('photo');

             $table->string('commune',255);
            $table->string('district',255);
           
             $table->string('postal',255);
            $table->string('sitM',255);
           
             $table->string('nationalite',255);
            $table->string('CIN',255);
           
             $table->string('dateCin',255);
            $table->string('lieuCin',255);
           
             $table->string('adresse',255);
            $table->string('telEtu',255);
           
              $table->string('email',255);
            $table->string('bacc_annee',255);
           
             $table->string('numInsBac',255);
            $table->string('bacc_serie',255);
           
             $table->string('secteur',255);
            $table->string('spec',255);
           
            $table->string('cfo',255);
            $table->string('nom_p',255);
           
            $table->string('cfo',255);
            $table->string('nom_p',255);
           
            $table->string('cfo',255);
            $table->string('nom_p',255);
           
            $table->string('prenom_p',255);
            $table->string('prof_p',255);
            $table->string('adresse_p',255);
            $table->string('phone_p',255);
             $table->string('prenom_p',255);
            $table->string('nom_m',255); 
            $table->string('prenom_m',255);
            $table->string('prof_m',255);
              $table->string('adresse_m',255);
            $table->string('phone_m',255);
              $table->string('qrcodes');
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
        Schema::dropIfExists('etudiants');
    }
}
