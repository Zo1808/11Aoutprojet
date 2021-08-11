<?php

namespace App\Http\Controllers;

use App\Etudiants;
use Illuminate\Http\Request;
use App\Filieres;
use App\Classes;
use  DateTime;
use App\Notes;
use Barryvdh\DomPDF\Facade as PDF;
class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['record']=Etudiants::all();
        return view('etudiant.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');
    }
    public function viexExtractFiche()
    {
        return view('etudiant.generatePresenceFiche');
    }
    
public function fpPdf (Request $request)

{
  //  dd($request->all());
   // $data=["test"=>"voir"];
    $classe=Classes::select('*')->where('id',$request->classe_id)->first();
          $path = public_path() .'\img\UM.jpg';
         $path1 = public_path() .'\img\IESSI.jpg';
        
         $type = pathinfo($path, PATHINFO_EXTENSION);
         $type1 = pathinfo($path1, PATHINFO_EXTENSION);
       
         $dataimg = file_get_contents($path);
         $dataimg1 = file_get_contents($path1);
         
          // dd(encrypt($etudiant->qrcodes));

         $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
         $base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($dataimg1);
        

         $data['UM']=$base64;
         $data['IESSI']=$base641;
       $data['classe_id']=$classe->id;
       $data['filiere_id']= Filieres::select('id')->where('id',$request->filiere_id)->first()->id;
       $data['annee_scolaire']=$request->annee_scolaire;
       $data['record']=Etudiants::select('*')->where('classe_id',$classe->id)->where('filiere_id',$request->filiere_id)->orderby('nom')->get();
       
   
     $pdf=PDF::loadView('etudiant.fichePresence',$data)
       ->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('test.pdf');
    
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
     
       $this->validate($request,[
            'nom'=>'required|string',
            'prenom'=>'string',
            'ddn'=>'string',
            'filiere_id'=>'required',
            'classe_id'=>'required',

        ]);

        if(empty($request->ddn))
        {
            $dd="01/01/1900";
        }
        else
        {
            $dd=$request->ddn;
        } 
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $longueur=strlen($request->nom);
        $chaineAleatoire = '';
        for ($i = 0; $i < $longueur; $i++)
        {
        $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
    
        if($image=$request->file('photo'))
        {
           $image_name=$chaineAleatoire.'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path("photo");
          $image->move($destinationPath,$image_name);
          $url=$image_name;
        }
        else
        {
            $url="pas de photos";
        }

        $data=[
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'ddn'=>$dd,
            'numero_immatricule'=>'',
            'filiere_id'=>$request->filiere_id,
            'classe_id'=>$request->classe_id,
            'photo'=>$url,
            'numero_bourse'=>'',
            'qrcodes'=>'',
             "commune" => $request->commune,
              "district" => $request->district,
              "postal" =>$request->postal,
              "sitM" => $request->sitM,
              "nationalite" => $request->nationalite,
              "CIN" =>$request->CIN,
              "datecin" => $request->dateCin,
              "lieuCin" =>$request->lieuCin,
              "adresse" => $request->adresse,
              "telEtu" => $request->telEtu,
              "email" =>   $request->email, 
              "bacc_annee" => $request->bacc_annee,
              "numInsBac" => $request->numInsBac,
              "bacc_serie" => $request->bacc_serie,
              "secteur" => $request->secteur,
              "spec" => $request->spec,
              "cfo" => $request->cfo,
              "nom_p" => $request->nom_p,
              "prenom_p" => $request->prenom_p,
              "prof_p" => $request->prof_p,
              "adresse_p" =>$request->adresse_p,
              "phone_p" => $request->phone_p,
              "nom_m" => $request->nom_m,
              "prenom_m" => $request->prenom_m,
              "prof_m" => $request->prof_m,
              "adresse_m" => $request->adresse_m,
              "phone_m" =>$request->phone_m,
        ];  
        
        $etudiant=Etudiants::create($data);
        $num="";
        $data=Etudiants::find($etudiant->id);
        if($etudiant->id <10)
        {
            $num="000".$etudiant->id;
        }
        if($etudiant->id >=10 && $etudiant->id <100 )
        {
            $num="00".$etudiant->id;
        }
        if($etudiant->id>=100)
        {
            $num="0".$etudiant->id;
        }
        $niv=Classes::find($etudiant->classe_id);
        if($niv->nom_classe === "L1" ||$niv->nom_classe === "Première Année" )
        {
            $numNiv=10;
        }
        if($niv->nom_classe === "L2" || $niv->nom_classe === "Deuxième Année" )
        {
            $numNiv=20;
        }
        if($niv->nom_classe === "L3"|| $niv->nom_classe === "Troisième Année" )
        {
            $numNiv=30;
        }
        if($niv->nom_classe === "M1"|| $niv->nom_classe === "Quatrième Année")
        {
            $numNiv=40;
        }
        if($niv->nom_classe === "M2"|| $niv->nom_classe === "Cinquième Année")
        {
            $numNiv=50;
        }
        if($niv->nom_classe === "L6"|| $niv->nom_classe === "Sixième Année")
        {
            $numNiv=60;
        }
        if($niv->nom_classe === "L7"|| $niv->nom_classe === "Septième Année")
        {
            $numNiv=70;
        }
        if($niv->nom_classe === "L8"|| $niv->nom_classe === "Huitième Année")
        {
            $numNiv=80;
        }
        if($niv->nom_classe === "L9"|| $niv->nom_classe === "Neuvième Année")
        {
            $numNiv=90;
        }
        $nomFil=Filieres::find($request->filiere_id);
        $l="";
        $nf=explode(' ',$nomFil->nom);
      
        for($i=0;$i<count($nf);$i++)
        {
            $l.=$nf[$i][0];
        }
        $yearLast=new DateTime();
        $yearLast->modify('-1 years');
     
        $currentYear=new DateTime();
    
        $years=$yearLast->format('y').'-'.$currentYear->format('y');
        $numero=$num.'.'.$numNiv.". IES-SI .".$l.'.'.$years;
        $qr=encrypt($numero);

        $data->numero_immatricule= $numero;
        $data->qrcodes=$qr;
        $data->save();
        \Session::Flash('success','Enregistrement avec succès!');
          $text=$numero." ".$etudiant->nom.$etudiant->prenom." ".$etudiant->classe_id.$etudiant->filiere_id;
           $na=$qr;
           $namefichier="$na";
        
           Notes::qrCodeEtudiant($text,$namefichier);
        return  redirect('etudiant');
    }
public function card($id)
{
    $etudiant=Etudiants::find($id);
     
    
          $path = public_path() .'\img\UM.jpg';
         $path1 = public_path() .'\img\IESSI.jpg';
        
         $type = pathinfo($path, PATHINFO_EXTENSION);
         $type1 = pathinfo($path1, PATHINFO_EXTENSION);
       
         $dataimg = file_get_contents($path);
         $dataimg1 = file_get_contents($path1);
          $pathQr = public_path() .'\\'.$etudiant->qrcodes.".png";
           $typeQR = pathinfo($pathQr, PATHINFO_EXTENSION);

          // dd(encrypt($etudiant->qrcodes));

         $dataimgQR = file_get_contents($pathQr);
          $base64QR = 'data:image/' . $typeQR . ';base64,' . base64_encode($dataimgQR);
         $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
         $base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($dataimg1);
        

         $path3 = public_path() ."\photo\\".$etudiant->photo;
      
         $path4 = public_path() .'\sonia.png';
         $dataimg3 = file_get_contents($path3);
         $dataimg4 = file_get_contents($path4);
         $type3 = pathinfo($path3, PATHINFO_EXTENSION);
         $type4 = pathinfo($path4, PATHINFO_EXTENSION);
         $base643 = 'data:image/' . $type3 . ';base64,' . base64_encode($dataimg3);
         $base644 = 'data:image/' . $type4 . ';base64,' . base64_encode($dataimg4);
         $data['sonia']=$base644;
         $data['photoEtudiant']=$base643;
         $data['UM']=$base64;
         $data['IESSI']=$base641;
         $data['qrcodess']= $base64QR;

       $data['etudiant']=$etudiant;
   // return  view('etudiant.card',$data);
        $pdf=PDF::loadView('etudiant.card',$data)
       ->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download($etudiant->nom.'.pdf');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function show($etudiants)
    {
        
        $da=Etudiants::find($etudiants);
        
        $data=[
            'nom'=>$da->nom,
            'prenom'=>$da->prenom,
            'ddn'=>$da->ddn,
            'filiere_id'=>$da->filiere_id,
            'classe_id'=>$da->classe_id,
        ];  
        
    return  view('etudiant.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function edit( $etudiants)
    {
        $da=Etudiants::find($etudiants);
        $data=[
            'etudiants'=>$etudiants,
            'nom'=>$da->nom,
            'prenom'=>$da->prenom,
            'ddn'=>$da->ddn,
            'filiere_id'=>$da->filiere_id,
            'classe_id'=>$da->classe_id,
        ];  
    return  view('etudiant.edit',$data);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $etudiants)
    {
        $da=Etudiants::find($etudiants);
      
            $da->nom=$request->nom;
            $da->prenom=$request->prenom;
            $da->ddn=$request->ddn;
            $da->filiere_id=$request->filiere_id;
            $da->classe_id=$request->classe_id;
            $da->save();

       return  redirect('etudiant');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiants  $etudiants
     * @return \Illuminate\Http\Response
     */
    public function destroy($etudiants)
    {
        $da=Etudiants::find($etudiants);
      if(!empty($da))
      {
          $da->delete();
          return redirect('etudiant');
      }
        
    }
}
