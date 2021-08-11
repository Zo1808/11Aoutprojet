<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    protected $table="etudiants";
    protected $fillable=['nom','prenom','ddn','filiere_id','numero_immatricule','classe_id','photo','numero_bourse','commune','district','postal','sitM','nationalite','CIN','datecin','lieuCin','adresse','telEtu','email','bacc_annee','numInsBac','bacc_serie','secteur','spec','cfo','nom_p','prenom_p','adresse_p','prof_p','phone_p','nom_m','prenom_m','adresse_m','prof_m','phone_m',"qrcodes"];
    protected $guarded=['created_at','updated_at'];
}
   