<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteRestit extends Model
{
    protected $table="note_restits";
    protected $fillable=['note','matiere','etudiant_id','coeff','credit','noteSansCoeff','type_exam_id','filiere_id','classe_id','UE_id'];
    protected $guarded=['created_at','updated_at'];
}
