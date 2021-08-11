<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultatMoyenneGeneral extends Model
{
    protected $table="resultat_moyenne_generals";
    protected $fillable=['etudiant','classe','filiere','moyenne_general','note','type_exam'];
    protected $guarded=['created_at','updated_at'];
}
