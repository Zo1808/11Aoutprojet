<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matieres extends Model
{
    protected $table="matieres";
    protected $fillable=['nom_matiere','coeff','unite_enseignement_id','filiere_id','classe_id'];
    protected $guarded=['created_at','updated_at'];
}
