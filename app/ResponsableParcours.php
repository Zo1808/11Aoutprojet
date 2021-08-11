<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponsableParcours extends Model
{
    
    protected $table="responsable_parcours";
    protected $fillable=['civil','nom','prenom','ddn','numero','fonction','detailsFonction'];
    protected $guarded=['created_at','updated_at'];
}
