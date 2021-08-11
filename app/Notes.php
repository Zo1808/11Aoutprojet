<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use QrCode;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
class Notes extends Model
{
    protected $table="notes";
    protected $fillable=['notes','status','matiere_id','etudiants_id','type_exam_id','notesWithCoeff','credit'];
    protected $guarded=['created_at','updated_at'];

    public static function qrCode($text,$nomFichier)
    {
     /*$renderer = new ImageRenderer(
         new RendererStyle(400),
         new ImagickImageBackEnd()
     );
     $writer = new Writer($renderer);
     $writer->writeFile("$text","img/$nomFichier.png");
        //return view('home'); */
        $val=public_path('img\\');
       
        $nam=$val.$nomFichier.'.png';
       
             // \QrCode::size(500)
            //->format('png')
           // ->generate("$urlF/$object",$nam);
      QrCode::format('png')->size(400)->generate($text, $nam);
    }
      public static function qrCodeEtudiant($text,$nomFichier)
    {
       // dd($nomFichier);
     /*$renderer = new ImageRenderer(
         new RendererStyle(400),
         new ImagickImageBackEnd()
     );
     $writer = new Writer($renderer);
     $writer->writeFile("$text","img/$nomFichier.png");
        //return view('home'); */
        $val=public_path('img\\');
      
        $nam=$nomFichier.'.png';
      // dd($nam);
             // \QrCode::size(500)
            //->format('png')
           // ->generate("$urlF/$object",$nam);
      QrCode::format('png')->size(400)->generate($text, $nam);
    }
}
