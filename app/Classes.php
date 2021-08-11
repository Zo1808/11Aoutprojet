<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table="classes";
    protected $fillable=['nom_classe'];
    protected $guarded=['created_at','updated_at'];
}
