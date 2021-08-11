<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentaireResult extends Model
{
    protected $table="commentaire_results";
    protected $fillable=['id','UE_id','classe_id','filiere_id','exam_type_id','commentaire'];
    protected $guarded=['created_at','updated_at'];
}
