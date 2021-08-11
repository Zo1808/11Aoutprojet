<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniteEnseignement extends Model
{
    protected $table="unite_enseignements";
    protected $fillable=['UE'];
    protected $guarded=['created_at','updated_at'];
    
}
