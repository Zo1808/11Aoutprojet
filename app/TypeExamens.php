<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeExamens extends Model
{
    protected $table="type_examens";
    protected $fillable=['type'];
    protected $guarded=['created_at','updated_at'];
}
