<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QrCode extends Model
{
    protected $table="qr_codes";
    protected $fillable=['etudiant_id','classe_id','filiere_id','nameFichier'];
    protected $guarded=['created_at','updated_at'];
}
