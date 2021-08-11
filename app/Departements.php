<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departements extends Model
{
    protected $table="departements";
    protected $fillable=['nom_departement'];
   protected $guarded=['created_at','updated_at'];
}
