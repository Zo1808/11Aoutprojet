<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filieres extends Model
{
    protected $table="filieres";
    protected $fillable=['nom','departement_id','responsable_id'];
   protected $guarded=['created_at','updated_at'];
}
