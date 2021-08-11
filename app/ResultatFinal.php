<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultatFinal extends Model
{
    
    
    protected $table="resultat_finals";
    protected $fillable=['classe_id','etudiant_id','type_exam_id','totalNote','filiere_id','moyenne','ue'];
    protected $guarded=['created_at','updated_at'];

}
