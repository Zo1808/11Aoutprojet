<?php
use App\Filieres;
namespace App\Http\Controllers;
use DB;
use App\Notes;
use Illuminate\Http\Request;
use App\Matieres;
use App\NoteRestit;
use App\Etudiants;
use App\UniteEnseignement;
use Barryvdh\DomPDF\Facade as PDF;
use App\ResultatFinal;
use App\ResultatMoyenneGeneral;
use App\CommentaireResult;
use App\Filieres;
use Illuminate\Support\Facades\Session;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use  App\QrCode;
use App\TypeExamens;
use App\Classes;

class noteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'etudiant_id'=>'required',
            'classe_id'=>'required',
            'filiere_id'=>'required',
            'matiere_id'=>'required',
            'note'=>'required',
            'type_exam_id'=>'required',
            'credit'=>'required',
            'status'=>'string'
        ]);

        $coef=Matieres::select('coeff')->where('id',$request->matiere_id)->first()->coeff;
  
        $noteCoef=floatval($request->note)*$coef;
      
        $data=[
            'etudiants_id'=>$request->etudiant_id,
            'notes'=>$request->note,
            'matiere_id'=>$request->matiere_id,
            'classe_id'=>$request->classe_id,
            'notesWithCoeff'=>$noteCoef,
            'filiere_id'=>$request->filiere_id,
            'type_exam_id'=>$request->type_exam_id,
            'credit'=>$request->credit,
            'status'=>'ok',
        ];  
        
        Notes::create($data);
     
        return redirect('saisir/note');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function show(Notes $notes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function edit($notes)
    {
        $da=Notes::find($notes);
        $data=[
            'note'=>$notes,
            'matiere_id'=>$da->matiere_id,
            'etudiants_id'=>$da->etudiants_id,
            'notes'=>$da->notes,
            'type_exam_id'=>$da->type_exam_id,
            'credit'=>$da->credit,
        ];  
        return view('note.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$notes)
    {
        $da=Notes::find($notes);
        $da->matiere_id=$request->matiere_id;
        $mat=Matieres::select('coeff')->where('id',$request->matiere_id)->first()->coeff;
       
        $da->notesWithCoeff=$request->note*$mat;

        $da->notes=$request->note;
        $da->etudiants_id=$request->etudiants_id;
        $da->type_exam_id=$request->type_exam_id;
        $da->credit=$request->credit;
        $da->save();
        return  redirect('notes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notes $notes)
    {
        //
    }
    public function saisir()
    {
        return view('note.saisir');
    }
    public  function resultatEtudiant()
    {
        $data['record']=Notes::all();
        return view('note.resultat',$data);
    }
    public function traitementNote(Request $request)
    {
      $donne=Notes::join('etudiants','etudiants.id','notes.etudiants_id')->select('notes.*','etudiants.*')->where('notes.etudiants_id',$request->vehic)->get();
     
      if(!empty($donne))
      {
        for ($i=0;$i<count($donne);$i++)
        {
            $dataControle[$i]="<tr><td>".$donne[$i]['nom']." ".$donne[$i]['prenom']."</td><td>".DB::table('filieres')->select('nom')->where('filieres.id',$donne[$i]['filiere_id'])->first()->nom."</td><td>".DB::table('classes')->select('classes.nom_classe')->where('classes.id',$donne[$i]['classe_id'])->first()->nom_classe."</td>"."<td>".DB::table('matieres')->select('nom_matiere')->where('matieres.id',$donne[$i]['matiere_id'])->first()->nom_matiere."</td>"."<td>".$donne[$i]['notesWithCoeff']."</td>"."<td>".$donne[$i]['credit']."</td></tr>";
        }
      }
      else
      {
        $dataControle=[];
      }
      return $dataControle;
    }
    public function releveNotes(Request $request)

    {
      
    $etudiant=Etudiants::select('*')->where('id',$request->et_id)->first();
    
      $da=Notes::join('matieres','matieres.id','notes.matiere_id')
      ->select('matieres.*','notes.*')
      ->where('etudiants_id',$request->et_id)
      ->where('matieres.filiere_id',$etudiant->filiere_id)
      ->where('matieres.classe_id',$etudiant->classe_id)
      ->where('notes.type_exam_id',$request->type_exam_id)
      ->where('notes.status','ok')
      ->orderby('notes.created_at','DESC')->get();
   
    if(!empty($da))
    {
      $dat=array();
      NoteRestit::truncate();
        for($i=0;$i<count($da);$i++)
         {
            $data[$i]=[
                "etudiant_id"=>$da[$i]['etudiants_id'],
                "filiere_id"=>$da[$i]['filiere_id'],
                "classe_id"=>$da[$i]['classe_id'],
                "UE_id"=>$da[$i]['unite_enseignement_id'],
                "matiere"=>$da[$i]['nom_matiere'],
                "coeff"=>$da[$i]['coeff'],
                "credit"=>$da[$i]['credit'],
                "note"=>$da[$i]['notesWithCoeff'],
                "noteSansCoeff"=>$da[$i]['notes'],
                "type_exam_id"=>$da[$i]['type_exam_id'],
                
            ];
            NoteRestit::create($data[$i]);
         }
    }
    else
    {
        dd('Il n\'y a pas encore de note');
    }
    /*
    */
    $matiere=Matieres::select('unite_enseignement_id')
    ->where('filiere_id',$etudiant->filiere_id)
    ->where('classe_id',$etudiant->classe_id)
    ->distinct()->get();
  //   dd($matiere);
$ue=array();
    for($k=0;$k<count($matiere);$k++)
    {
        $ue[$k]=$matiere[$k]['unite_enseignement_id'];
    }

    $totalNote=array();
    $totalCoeff=array();
    $value=array();
    $moyenne=array();
    $recap=array();
    $totalCredit=array();
    for($k=0;$k<count($ue);$k++)
    {
        $totalNote[$k]=NoteRestit::select('*')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('UE_id',$ue[$k])
        ->where('type_exam_id',$request->type_exam_id)
        ->sum('note');
        //chq UE
        $totalCoeff[$k]=NoteRestit::select('*')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('UE_id',$ue[$k])
        ->sum('coeff');
        $totalCredit[$k]=NoteRestit::select('*')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('UE_id',$ue[$k])
        ->where('type_exam_id',$request->type_exam_id)
        ->sum('credit');
        $value[$k]=NoteRestit::join('unite_enseignements','unite_enseignements.id','note_restits.UE_id')->select('unite_enseignements.*','note_restits.*')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('UE_id',$ue[$k])
        ->where('type_exam_id',$request->type_exam_id)
        ->get();
        $nb=NoteRestit::select('matiere')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('etudiant_id',$request->et_id)
        ->where('type_exam_id',$request->type_exam_id)
        ->count();
        $nbUE=NoteRestit::select('UE_id')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('etudiant_id',$request->et_id)
        ->where('type_exam_id',$request->type_exam_id)
        ->distinct('UE_id')->count();
//dd($nbUE);
        $donne=array();
        $m=0;
        $totalCoefficient=NoteRestit::select('*')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('type_exam_id',$request->type_exam_id)
        ->sum('coeff');
        $totalGlobalCredit=NoteRestit::select('*')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('type_exam_id',$request->type_exam_id)->distinct('UE_id')
        ->sum('credit');
     //   dd($totalGlobalCredit);
        $totalNoteglobal=NoteRestit::select('*')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('type_exam_id',$request->type_exam_id)
        ->sum('note');
        $typeExam=NoteRestit::join('type_examens','type_examens.id','note_restits.type_exam_id')->select('type_examens.type')
        ->where('note_restits.filiere_id',$etudiant->filiere_id)
        ->where('note_restits.classe_id',$etudiant->classe_id)
        ->where('note_restits.type_exam_id',$request->type_exam_id)
        ->first();
        if(!empty($typeExam))
        {
            $data['typeExam']=$typeExam->type;
        }
        else
        {
            dd('Pas de note');
        }
      $data['totalCoefficient']=$totalCoefficient;
      $data['totalglobalCredit']=$totalGlobalCredit;
  //   dd($value);
      for($i=0;$i<count($value);$i++)
      {
        $totalNotess=0;
        $totalCoeffss=0;
        $moyennes=0;
        $totalMoy=0;
        
          for($j=0;$j<count($value[$i]);$j++)
          {
             $totalNotess+=$value[$i][$j]['note'];
             $totalCoeffss+=$value[$i][$j]['coeff'];
             $moyennes=($totalNotess)/($totalCoeffss);
         //   dd($value);
             $donne[$i][$j]=[
                            "UE"=>DB::table('unite_enseignements')->select('UE')->where('id',$value[$i][$j]['UE_id'])->first()->UE,
                            "matiere"=>$value[$i][$j]['matiere'],
                            "note"=>$value[$i][$j]['noteSansCoeff'],
                            "coeff"=>$value[$i][$j]['coeff'],
                            "classe_id"=>$value[$i][$j]['classe_id'],
                            "filiere_id"=>$value[$i][$j]['filiere_id'],
                            "etudiant_id"=>$value[$i][$j]['etudiant_id'],
                            "credit"=>$value[$i][$j]['credit'],
                            "moyenne"=>$moyennes,
                        
                        ];
          }
          
      
      }
      
       $uniteE=Matieres::select('nom_matiere')->where('unite_enseignement_id',$ue[$k])->first();
      
    }
  
    $avg=0;

           for($i=0;$i<count($donne);$i++)
           {
               if(count($donne[$i])>1)
                {
                     $avg+=$donne[$i][0]['moyenne'];            
                }
                if(count($donne[$i])==1)
                {
                    $avg+=$donne[$i][0]['moyenne'];
                                
                }
              // $data['etudiant']=$donne[$i][0]['etudiant_id'];
           }
          
           $data['MoyenneGeneral']=$avg/$nbUE;
           $moyennGenerale=$avg/$nbUE;
            $typp=TypeExamens::select('type')->where('id',$request->type_exam_id)->first()->type;
           $class=Classes::select('nom_classe')->where('id',$etudiant->classe_id)->first()->nom_classe;
           $filiere=Filieres::select('nom')->where('id',$etudiant->filiere_id)->first()->nom;
           $text="'RELEVE de NOTE'.$etudiant->nom' '$etudiant->prenom'de la filiere '$filiere' classe:' $class ' avec une moyenne' $moyennGenerale";
           $na=$typp.$etudiant->nom.$etudiant->prenom.$etudiant->ddn.$etudiant->numero_immatricule.$etudiant->classe_id.$etudiant->filiere_id;
           $namefichier="$na";
        
           Notes::qrCode($text,$namefichier);
           
           QrCode::truncate();
           $dataQR=[
            'etudiant_id'=>$etudiant->id,
            'classe_id'=>$etudiant->classe_id,
           'filiere_id'=>$etudiant->filiere_id,
            'nameFichier'=>$namefichier,
           ];
          $qs=QrCode::create($dataQR);
         $path2 = public_path() ."\img\\".$qs->nameFichier.".png";
         
           $dataimg2 = file_get_contents($path2);
          
            $type12 = pathinfo($path2, PATHINFO_EXTENSION);
           
            $base64Z = 'data:image/' . $type12 . ';base64,' . base64_encode($dataimg2);
           // dd( );
           // $data['namef']=$base64Z;
           $data['namef']=$base64Z;
            
           for($i=0;$i<count($donne);$i++)
           {
               if(count($donne[$i])>1)
               {
                    for($j=0;$j<count($donne[$i]);$j++)
                    {
                            $d[$i][$j]=[
                                "UE"=>$donne[$i][$j]['UE'],
                                "matiere"=>$donne[$i][$j]['matiere'],
                                "note"=>$donne[$i][$j]['note'],
                                "coeff"=>$donne[$i][$j]['coeff'],
                                "classe_id"=>$donne[$i][$j]['classe_id'],
                                "filiere_id"=>$donne[$i][$j]['filiere_id'],
                                "etudiant_id"=>$donne[$i][$j]['etudiant_id'],
                                "credit"=>$donne[$i][$j]['credit'],
                              
                            ];
                            $data['moyenne']=$donne[$i][$j]['moyenne'];
                            $data['etudiant']=$donne[$i][$j]['etudiant_id'];
                    }
                }
                if(count($donne[$i])==1)
                {
                   
                    $d[$i][0]=[
                        "UE"=>$donne[$i][0]['UE'],
                        "matiere"=>$donne[$i][0]['matiere'],
                        "note"=>$donne[$i][0]['note'],
                        "coeff"=>$donne[$i][0]['coeff'],
                        "classe_id"=>$donne[$i][0]['classe_id'],
                        "filiere_id"=>$donne[$i][0]['filiere_id'],
                        "etudiant_id"=>$donne[$i][0]['etudiant_id'],
                        "credit"=>$donne[$i][0]['credit'],
                        "moyenne"=>$donne[$i][0]['moyenne'],
                    ];
                    
               }
               $data['etudiant']=$donne[$i][0]['etudiant_id'];
           }
       
           $data['note']=$donne;
   
           $path = public_path() .'\img\UM.jpg';
           $path1 = public_path() .'\img\IESSI.jpg';
          
           $type = pathinfo($path, PATHINFO_EXTENSION);
           $type1 = pathinfo($path1, PATHINFO_EXTENSION);
         
           $dataimg = file_get_contents($path);
           $dataimg1 = file_get_contents($path1);
           
           $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
           $base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($dataimg1);
           
           $data['UM']=$base64;
           $data['IESSI']=$base641;
           $data['type_exam_id']=$request->type_exam_id;
           $responsable=Filieres::join('responsable_parcours','responsable_parcours.id','filieres.responsable_id')->select('responsable_parcours.*')->where('filieres.id',$etudiant->filiere_id)->first();
           $data['responsable']=$responsable->nom.' '.$responsable->prenom;    
           $par=Filieres::select('nom')->where('id',$etudiant->filiere_id)->first()->nom;
      $data['parcours']=$par;
        $data['niveau']=Classes::select('nom_classe')->where('id',$etudiant->classe_id)->first()->nom_classe;
      //  dd($data);
        $pdf=PDF::loadView('note.releve',$data)
       ->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download($etudiant->nom.'.pdf');
           // return view ('note.releve',$data);
    }
    
   public function ExportPDF(Request  $request)
   {

    $etudiant=Etudiants::select('*')->where('id',$request->et_id)->first();
   
    $da=Notes::join('matieres','matieres.id','notes.matiere_id')
    ->select('notes.*','matieres.*')
    ->where('etudiants_id',$request->et_id)
    ->where('matieres.filiere_id',$etudiant->filiere_id)
    ->where('matieres.classe_id',$etudiant->classe_id)
    ->where('notes.type_exam_id',$request->type_exam_id)
    ->where('notes.status','ok')
    ->get();//->groupby('matieres.unite_enseignement_id');
  
    $dat=array();
    NoteRestit::truncate();
    for($i=0;$i<count($da);$i++)
       {
          $data[$i]=[
              "etudiant_id"=>$da[$i]['etudiants_id'],
              "filiere_id"=>$da[$i]['filiere_id'],
              "classe_id"=>$da[$i]['classe_id'],
              "UE_id"=>$da[$i]['unite_enseignement_id'],
              "matiere"=>$da[$i]['nom_matiere'],
              "coeff"=>$da[$i]['coeff'],
              "credit"=>$da[$i]['credit'],
              "note"=>$da[$i]['notesWithCoeff'],
              "noteSansCoeff"=>$da[$i]['notes'],
             "type_exam_id"=>$da[$i]['type_exam_id'],
              
          ];
          NoteRestit::create($data[$i]);
       }
  /*
  */
  $matiere=Matieres::select('unite_enseignement_id')
  ->where('filiere_id',$etudiant->filiere_id)
  ->where('classe_id',$etudiant->classe_id)
  ->distinct()->get();
 
$ue=array();
  for($k=0;$k<count($matiere);$k++)
  {
      $ue[$k]=$matiere[$k]['unite_enseignement_id'];
  }
  $totalNote=array();
  $totalCoeff=array();
  $value=array();
  $moyenne=array();
  $recap=array();
  $totalCredit=array();
  for($k=0;$k<count($ue);$k++)
  {
      $totalNote[$k]=NoteRestit::select('*')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->where('UE_id',$ue[$k])
      ->where('type_exam_id',$request->type_exam_id)
      ->sum('note');
      $nbUE=NoteRestit::select('UE_id')
        ->where('filiere_id',$etudiant->filiere_id)
        ->where('classe_id',$etudiant->classe_id)
        ->where('etudiant_id',$request->et_id)
        ->where('type_exam_id',$request->type_exam_id)
        ->distinct('UE_id')->count();
      //chq UE
      $totalCoeff[$k]=NoteRestit::select('*')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->where('UE_id',$ue[$k])
      ->where('type_exam_id',$request->type_exam_id)
      ->sum('coeff');
      $totalCredit[$k]=NoteRestit::select('*')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->where('type_exam_id',$request->type_exam_id)
      ->where('UE_id',$ue[$k])
      ->sum('credit');
      $value[$k]=NoteRestit::join('unite_enseignements','unite_enseignements.id','note_restits.UE_id')->select('unite_enseignements.*','note_restits.*')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->where('UE_id',$ue[$k])
      ->where('type_exam_id',$request->type_exam_id)
      ->get();
      $nb=NoteRestit::select('matiere')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->where('etudiant_id',$request->et_id)
      ->where('type_exam_id',$request->type_exam_id)
      ->count();
      $donne=array();
      $m=0;
      $totalCoefficient=NoteRestit::select('*')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->where('type_exam_id',$request->type_exam_id)
      ->sum('coeff');
      $totalGlobalCredit=NoteRestit::select('*')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->where('type_exam_id',$request->type_exam_id)
      ->sum('coeff');
      $typeExam=NoteRestit::join('type_examens','type_examens.id','note_restits.type_exam_id')->select('type_examens.type')
      ->where('filiere_id',$etudiant->filiere_id)
      ->where('classe_id',$etudiant->classe_id)
      ->first();
      
      if(!empty($typeExam))
      {
          $data['typeExam']=$typeExam->type;
      }
      else
      {
          dd('Pas de notess');
      }
    $data['typeExam']=$typeExam;
    $data['totalCoefficient']=$totalCoefficient;
    $data['totalglobalCredit']=$totalGlobalCredit;
    for($i=0;$i<count($value);$i++)
    {
      $totalNotess=0;
      $totalCoeffss=0;
      $moyennes=0;
      $totalMoy=0;
        for($j=0;$j<count($value[$i]);$j++)
        {
           $totalNotess+=$value[$i][$j]['note'];
           $totalCoeffss+=$value[$i][$j]['coeff'];
          $moyennes=($totalNotess)/($totalCoeffss);
          $totalMoy+=$moyennes;
          $donne[$i][$j]=[
                          "UE"=>DB::table('unite_enseignements')->select('UE')->where('id',$value[$i][$j]['UE_id'])->first()->UE,
                          "matiere"=>$value[$i][$j]['matiere'],
                          "note"=>$value[$i][$j]['noteSansCoeff'],
                          "coeff"=>$value[$i][$j]['coeff'],
                          "classe_id"=>$value[$i][$j]['classe_id'],
                          "filiere_id"=>$value[$i][$j]['filiere_id'],
                          "etudiant_id"=>$value[$i][$j]['etudiant_id'],
                          "credit"=>$value[$i][$j]['credit'],
                          "moyenne"=>$moyennes,
                          "type_exam_id"=>$value[$i][$j]['type_exam_id'],
                      
                      ];
        }
      
    
    }
   
     $uniteE=Matieres::select('nom_matiere')->where('unite_enseignement_id',$ue[$k])->first();
     
    
  }
 
  $avg=0;
  for($i=0;$i<count($donne);$i++)
  {
      if(count($donne[$i])>1)
       {
            $avg+=$donne[$i][0]['moyenne'];            
       }
       if(count($donne[$i])==1)
       {
           $avg+=$donne[$i][0]['moyenne'];
                       
       }
  }
  $data['MoyenneGeneral']=$avg/$nbUE;
  $moyennGenerale=$avg/$nbUE;
  $typp=TypeExamens::select('type')->where('id',$request->type_exam_id)->first()->type;
  $class=Classes::select('nom_classe')->where('id',$etudiant->classe_id)->first()->nom_classe;
  $filiere=Filieres::select('nom')->where('id',$etudiant->filiere_id)->first()->nom;
  $text="'RELEVE de NOTE'.$etudiant->nom' '$etudiant->prenom'de la filiere '$filiere' classe:' $class ' avec une moyenne' $moyennGenerale";
  $na=$typp.$etudiant->nom.$etudiant->prenom.$etudiant->ddn.$etudiant->numero_immatricule.$etudiant->classe_id.$etudiant->filiere_id;
  $namefichier="$na";

 Notes::qrCode($text,$namefichier);
  
  QrCode::truncate();
  $dataQR=[
   'etudiant_id'=>$etudiant->id,
   'classe_id'=>$etudiant->classe_id,
  'filiere_id'=>$etudiant->filiere_id,
   'nameFichier'=>$namefichier,
  ];
 $qs=QrCode::create($dataQR);
 $path2 = public_path() ."\img\\".$qs->nameFichier.".png";
 $dataimg2 = file_get_contents($path2);
 $type12 = pathinfo($path2, PATHINFO_EXTENSION);
 $base64Z = 'data:image/' . $type12 . ';base64,' . base64_encode($dataimg2);
 
 $data['namef']=$base64Z;
 
 
         for($i=0;$i<count($donne);$i++)
         {
             if(count($donne[$i])>1)
             {
                  for($j=0;$j<count($donne[$i]);$j++)
                  {
                          $d[$i][$j]=[
                              "UE"=>$donne[$i][$j]['UE'],
                              "matiere"=>$donne[$i][$j]['matiere'],
                              "note"=>$donne[$i][$j]['note'],
                              "coeff"=>$donne[$i][$j]['coeff'],
                              "classe_id"=>$donne[$i][$j]['classe_id'],
                              "filiere_id"=>$donne[$i][$j]['filiere_id'],
                              "etudiant_id"=>$donne[$i][$j]['etudiant_id'],
                              "credit"=>$donne[$i][$j]['credit'],
                              "type_exam_id"=>$donne[$i][$j]['type_exam_id'],
                            
                          ];
                          $data['moyenne']=$donne[$i][$j]['moyenne'];
                          $data['etudiant']=$donne[$i][$j]['etudiant_id'];
                  }
              }
              if(count($donne[$i])==1)
              {
                 
                  $d[$i][0]=[
                      "UE"=>$donne[$i][0]['UE'],
                      "matiere"=>$donne[$i][0]['matiere'],
                      "note"=>$donne[$i][0]['note'],
                      "coeff"=>$donne[$i][0]['coeff'],
                      "classe_id"=>$donne[$i][0]['classe_id'],
                      "filiere_id"=>$donne[$i][0]['filiere_id'],
                      "etudiant_id"=>$donne[$i][0]['etudiant_id'],
                      "credit"=>$donne[$i][0]['credit'],
                      "moyenne"=>$donne[$i][0]['moyenne'],
                      "type_exam_id"=>$donne[$i][0]['type_exam_id'],
                            
                  ];
                  
             }
             $data['etudiant']=$donne[$i][0]['etudiant_id'];
             $res[$i]=[
                'etudiant_id'=>$donne[$i][0]['etudiant_id'],
                'filiere_id'=>$donne[$i][0]['filiere_id'],
                'classe_id'=>$donne[$i][0]['classe_id'],
                'moyenneGeneral'=>$d,
                'moyenneparUE'=>$donne[$i][0]['moyenne'],
                'UE_id'=>$donne[$i][0]['UE'],
                'type_exam_id'=>$donne[$i][0]['type_exam_id'],
            ];
    
         //   ResultatFinal::create($donne[$i][0]);
         }
     
         $data['note']=$donne;
        
        
         $path = public_path() .'\img\UM.jpg';
         $path1 = public_path() .'\img\IESSI.jpg';
        
         $type = pathinfo($path, PATHINFO_EXTENSION);
         $type1 = pathinfo($path1, PATHINFO_EXTENSION);
       
         $dataimg = file_get_contents($path);
         $dataimg1 = file_get_contents($path1);
         
         $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
         $base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($dataimg1);
         
         $data['UM']=$base64;
         $data['IESSI']=$base641;
         $responsable=Filieres::join('responsable_parcours','responsable_parcours.id','filieres.responsable_id')->select('responsable_parcours.*')->where('filieres.id',$etudiant->filiere_id)->first();
         $data['responsable']=$responsable->nom.' '.$responsable->prenom;    
      $data['type_exam_id']=$request->type_exam_id;
     // dd($par);
        //$data['niveau']=Classes::select('nom_classe')->where('id',$etudiant->classe_id)->first()->nom_classe;
         $pdf=PDF::loadView('note.releve',$data)
       ->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('releve.pdf');
   }
   public function ViewSearch()
   {
        return view('note.search');
   }
   public function Res(Request $request)
   {
    $etudiant=Notes::join('etudiants','etudiants.id','notes.etudiants_id')->select('etudiants.*')->where('etudiants.classe_id',$request->classe_id)->where('etudiants.filiere_id',$request->filiere_id)->distinct('notes.etudiants_id')->get();

    $da=array();
    for ($i=0; $i <count($etudiant); $i++) { 
    $da[$i]=Notes::join('matieres','matieres.id','notes.matiere_id')
    ->select('notes.*','matieres.*')
    ->where('etudiants_id',$etudiant[$i]['id'])
    ->where('matieres.filiere_id',$request->filiere_id)
    ->where('matieres.classe_id',$request->classe_id)
    ->where('notes.type_exam_id',$request->type_exam_id)
    ->where('notes.status','ok')
    ->get();
   }
  
   if(!empty($da))
    {
      $dat=array();
      NoteRestit::truncate();
        for($i=0;$i<count($da);$i++)
         {
            for($j=0;$j<count($da[$i]);$j++)
            {
            
            $data[$i][$j]=[
                "etudiant_id"=>$da[$i][$j]['etudiants_id'],
                "filiere_id"=>$da[$i][$j]['filiere_id'],
                "classe_id"=>$da[$i][$j]['classe_id'],
                "UE_id"=>$da[$i][$j]['unite_enseignement_id'],
                "matiere"=>$da[$i][$j]['nom_matiere'],
                "coeff"=>$da[$i][$j]['coeff'],
                "credit"=>$da[$i][$j]['credit'],
                "note"=>$da[$i][$j]['notesWithCoeff'],
                "noteSansCoeff"=>$da[$i][$j]['notes'],
               "type_exam_id"=>$da[$i][$j]['type_exam_id'],
                
            ];
          
       
         NoteRestit::create(($data[$i][$j]));
        }
        }
       // dd( array_values($data));
       
    }
    else
    {
        dd('Il n\'y a pas encore de note');
    }
    $matiere=Matieres::select('unite_enseignement_id')
        ->where('filiere_id',$request->filiere_id)
        ->where('classe_id',$request->classe_id)
        ->distinct()->get();
 
    $ue=array();
        for($k=0;$k<count($matiere);$k++)
        {
            $ue[$k]=$matiere[$k]['unite_enseignement_id'];
        }
       
    $note=array();
    $moy=  array();
    ResultatFinal::truncate();
        for ($i=0;$i<count($etudiant);$i++) { 
            for ($k=0; $k < count($ue); $k++) { 
                
                $note[$i]=NoteRestit::select('note')->where('etudiant_id',$etudiant[$i]['id'])->where('UE_id',$ue[$k])->sum('note');
             $etudianttes[$i]=NoteRestit::select('type_exam_id')->where('etudiant_id',$etudiant[$i]['id'])->where('UE_id',$ue[$k])->first();
                $coeff[$i]=NoteRestit::select('note')->where('etudiant_id',$etudiant[$i]['id'])->where('UE_id',$ue[$k])->sum('coeff');
                if($coeff[$i]==0 || empty($etudianttes[$i]) || empty($note[$i]))
                {
                    dd('Resultats Non  disponible');
                } 
                else 
                {
                $moyenne[$i]=$note[$i]/$coeff[$i];
                 $moy[$i][$k]=[
                        "totalNote"=>$note[$i],
                        "coeff"=>$coeff[$i],
                        "etudiant_id"=>$etudiant[$i]['id'],
                        "classe_id"=>$etudiant[$i]['classe_id'],
                        "filiere_id"=>$etudiant[$i]['filiere_id'],
                        "moyenne"=>$moyenne[$i],
                        "ue"=>$ue[$k],
                        "type_exam_id"=>$etudianttes[$i]->type_exam_id
                 ];
                 
                 ResultatFinal::create($moy[$i][$k]);
            }
            
        }
        }
      $resultes=array();
      ResultatMoyenneGeneral::truncate();
       for ($i=0; $i <count($etudiant) ; $i++) { 
        
           $resultes[$i]=ResultatFinal::select('totalNote')->where('etudiant_id',$etudiant[$i]['id'])->sum('moyenne');
           $typeExam[$i]=ResultatFinal::select('type_exam_id')->where('etudiant_id',$etudiant[$i]['id'])->first()->type_exam_id;
           $noteUE[$i]=ResultatFinal::select('moyenne','ue')->where('etudiant_id',$etudiant[$i]['id'])->get();
           
          
           $ueC[$i]=ResultatFinal::select('ue')->where('etudiant_id',$etudiant[$i]['id'])->count();
             $moyenneGeneral[$i]=$resultes[$i]/$ueC[$i];
             $noteUEData="";
             for($k=0;$k<count($noteUE[$i]);$k++)
             {
                 $noteUEData.=$noteUE[$i][$k]['moyenne'].":".$noteUE[$i][$k]['ue'].'/';
             }
           
             $valueResult[$i]=[
                "etudiant"=>$etudiant[$i]['id'],
                "classe"=>$etudiant[$i]['classe_id'],
                "filiere"=>$etudiant[$i]['filiere_id'],
                "moyenne_general"=>$moyenneGeneral[$i],
                "type_exam"=>$typeExam[$i],  
                "note"=>$noteUEData   
            ];
            ResultatMoyenneGeneral::create($valueResult[$i]);
       }

       $donne= ResultatMoyenneGeneral::join('etudiants','etudiants.id','resultat_moyenne_generals.etudiant')->orderBy('moyenne_general', 'DESC')->get();
       $j=1;
       for ($i=0; $i <count($donne) ; $i++) { 
           
           $sansSlash[$i]=explode('/',$donne[$i]['note']);
           $resultatsGe[$i]=[
               "etudiant_id"=>$donne[$i]['etudiant'],
                "nom_prenom"=>$donne[$i]['nom'].' '.$donne[$i]['prenom'],
                "moyenne"=>$donne[$i]['moyenne_general'],
                "rang"=>$j
           ];
           $j++;
       }
    
       $data['record']=$resultatsGe;
       $edi=array();
            for ($k=0; $k <count($sansSlash) ; $k++) { 
                for ($j=0; $j <count($sansSlash[$k])-1 ; $j++) { 
                    $edi[$k][$j]=explode(':',$sansSlash[$k][$j]);
                }
            }
     
       $path = public_path() .'\img\UM.jpg';
       $path1 = public_path() .'\img\IESSI.jpg';
      
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $type1 = pathinfo($path1, PATHINFO_EXTENSION);
     
       $dataimg = file_get_contents($path);
       $dataimg1 = file_get_contents($path1);
       
       $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
       $base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($dataimg1);
       
       $data['UM']=$base64;
       $data['IESSI']=$base641;
       $data['filiere_id']=$request->filiere_id;
       $data['type_exam_id']=$request->type_exam_id;
       $data['classe_id']=$request->classe_id;
          $re=TypeExamens::select('type')->where('id',$request->type_exam_id+1)->first();
       if(empty($re))
       {
        $data['type1']=TypeExamens::select('type')->where('id',$request->type_exam_id)->first()->type;
       }
       else
       {
           $data['type1']=$re->type;
       }
       return view('note.affichageResultat',$data);
   }
   public function ExportPDFResultat(Request $request)
   {
    $etudiant=NoteRestit::join('etudiants','etudiants.id','note_restits.etudiant_id')->select('etudiants.*')->where('etudiants.classe_id',$request->classe_id)->where('etudiants.filiere_id',$request->filiere_id)->distinct('note_restits.etudiant_id')->get();

    $da=array();
    for ($i=0; $i <count($etudiant); $i++) { 
       
    $da[$i]=Notes::join('matieres','matieres.id','notes.matiere_id')
    ->select('notes.*','matieres.*')
    ->where('etudiants_id',$etudiant[$i]['id'])
    ->where('matieres.filiere_id',$request->filiere_id)
    ->where('matieres.classe_id',$request->classe_id)
    ->where('notes.type_exam_id',$request->type_exam_id)
    ->where('notes.status','ok')
    
    ->get();
   }
  
   if(!empty($da))
    {
      $dat=array();
      NoteRestit::truncate();
        for($i=0;$i<count($da);$i++)
         {
            for($j=0;$j<count($da[$i]);$j++)
            {
            
            $data[$i][$j]=[
                "etudiant_id"=>$da[$i][$j]['etudiants_id'],
                "filiere_id"=>$da[$i][$j]['filiere_id'],
                "classe_id"=>$da[$i][$j]['classe_id'],
                "UE_id"=>$da[$i][$j]['unite_enseignement_id'],
                "matiere"=>$da[$i][$j]['nom_matiere'],
                "coeff"=>$da[$i][$j]['coeff'],
                "credit"=>$da[$i][$j]['credit'],
                "note"=>$da[$i][$j]['notesWithCoeff'],
                "noteSansCoeff"=>$da[$i][$j]['notes'],
               "type_exam_id"=>$da[$i][$j]['type_exam_id'],
                
            ];
          
       
         NoteRestit::create(($data[$i][$j]));
        }
        }
       // dd( array_values($data));
       
    }
    else
    {
        dd('Il n\'y a pas encore de note');
    }
    $matiere=Matieres::select('unite_enseignement_id')
        ->where('filiere_id',$request->filiere_id)
        ->where('classe_id',$request->classe_id)
        ->distinct()->get();
 
    $ue=array();
        for($k=0;$k<count($matiere);$k++)
        {
            $ue[$k]=$matiere[$k]['unite_enseignement_id'];
        }
       
    $note=array();
    $moy=  array();
    ResultatFinal::truncate();
        for ($i=0;$i<count($etudiant);$i++) { 
            for ($k=0; $k < count($ue); $k++) { 
                
                $note[$i]=NoteRestit::select('note')->where('etudiant_id',$etudiant[$i]['id'])->where('UE_id',$ue[$k])->sum('note');
                 $etudianttes[$i]=NoteRestit::select('type_exam_id')->where('etudiant_id',$etudiant[$i]['id'])->where('UE_id',$ue[$k])->first();
                $coeff[$i]=NoteRestit::select('note')->where('etudiant_id',$etudiant[$i]['id'])->where('UE_id',$ue[$k])->sum('coeff');
                 $moyenne[$i]=$note[$i]/$coeff[$i];
                 $moy[$i][$k]=[
                        "totalNote"=>$note[$i],
                        "coeff"=>$coeff[$i],
                        "etudiant_id"=>$etudiant[$i]['id'],
                        "classe_id"=>$etudiant[$i]['classe_id'],
                        "filiere_id"=>$etudiant[$i]['filiere_id'],
                        "moyenne"=>$moyenne[$i],
                        "ue"=>$ue[$k],
                        "type_exam_id"=>$etudianttes[$i]->type_exam_id
                 ];
                 
                 ResultatFinal::create($moy[$i][$k]);
            }
            
       
        }
      $resultes=array();
      ResultatMoyenneGeneral::truncate();
       for ($i=0; $i <count($etudiant) ; $i++) { 
        
           $resultes[$i]=ResultatFinal::select('totalNote')->where('etudiant_id',$etudiant[$i]['id'])->sum('moyenne');
           $typeExam[$i]=ResultatFinal::select('type_exam_id')->where('etudiant_id',$etudiant[$i]['id'])->first()->type_exam_id;
           $noteUE[$i]=ResultatFinal::select('moyenne','ue')->where('etudiant_id',$etudiant[$i]['id'])->get();
           
          
           $ueC[$i]=ResultatFinal::select('ue')->where('etudiant_id',$etudiant[$i]['id'])->count();
             $moyenneGeneral[$i]=$resultes[$i]/$ueC[$i];
             $noteUEData="";
             for($k=0;$k<count($noteUE[$i]);$k++)
             {
                 $noteUEData.=$noteUE[$i][$k]['moyenne'].":".$noteUE[$i][$k]['ue'].'/';
             }
           
             $valueResult[$i]=[
                "etudiant"=>$etudiant[$i]['id'],
                "classe"=>$etudiant[$i]['classe_id'],
                "filiere"=>$etudiant[$i]['filiere_id'],
                "moyenne_general"=>$moyenneGeneral[$i],
                "type_exam"=>$typeExam[$i],  
                "note"=>$noteUEData   
            ];
            ResultatMoyenneGeneral::create($valueResult[$i]);
       }

       $donne= ResultatMoyenneGeneral::join('etudiants','etudiants.id','resultat_moyenne_generals.etudiant')->orderBy('moyenne_general', 'DESC')->get();
         $j=1;
       for ($i=0; $i <count($donne) ; $i++) { 
           $sansSlash[$i]=explode('/',$donne[$i]['note']);
           $resultatsGe[$i]=[
               "etudiant_id"=>$donne[$i]['etudiant'],
                "nom_prenom"=>$donne[$i]['nom'].' '.$donne[$i]['prenom'],
                "moyenne"=>$donne[$i]['moyenne_general'],
                "rang"=>$j    
           ];
           $j++;
       }
      
       $data['record']=$resultatsGe;
       $edi=array();
            for ($k=0; $k <count($sansSlash) ; $k++) { 
                for ($j=0; $j <count($sansSlash[$k])-1 ; $j++) { 
                    $edi[$k][$j]=explode(':',$sansSlash[$k][$j]);
                }
            }
     
       $path = public_path() .'\img\UM.jpg';
       $path1 = public_path() .'\img\IESSI.jpg';
      
       $type = pathinfo($path, PATHINFO_EXTENSION);
       $type1 = pathinfo($path1, PATHINFO_EXTENSION);
     
       $dataimg = file_get_contents($path);
       $dataimg1 = file_get_contents($path1);
       
       $base64 = 'data:image/' . $type . ';base64,' . base64_encode($dataimg);
       $base641 = 'data:image/' . $type1 . ';base64,' . base64_encode($dataimg1);
       
       $data['UM']=$base64;
       $data['IESSI']=$base641;
       $data['filiere_id']=$request->filiere_id;
       $data['type_exam_id']=$request->type_exam_id;
       $data['classe_id']=$request->classe_id;

        $pdf=PDF::loadView('note.affichageResultat',$data)->setPaper('a4', 'portrait')
        ->setOptions(['defaultFont' => 'sans-serif']);
        $nomR="Resultat".$request->filiere_id.''.$request->classe_id.''.$request->type_exam_id;
         return $pdf->download($nomR.".pdf");
      // }
   }
   public function ListeNV()
   {

       return view('parametre.insertRattrapager.formSearc');
   }
   public function VoirListNV(Request $request)
   {
      $data['record']=ResultatFinal::select('*')->where('filiere_id',$request->filiere_id)->where('classe_id',$request->classe_id)->where('type_exam_id',$request->type_exam_id)->where('moyenne','<',10)->get();
      return view('parametre.insertRattrapager.insert',$data);
   }
   public function noteRattraper(Request $request)
   {
      //dd($request->all());
       $mat=Matieres::select('*')->where('unite_enseignement_id',$request->ue)->get();
       $noteMAt=array();
       for ($i=0; $i <count($mat);$i++) { 
        $noteMAt[$i]=DB::table('notes')->where('matiere_id',$mat[$i]['id'])->where('etudiants_id',$request->etudiant_id)->where('type_exam_id',$request->type_exam_id)->update(['status'=>'ko']);   

       }
     // dd($noteMAt);
     // $data['record']=ResultatFinal::select('*')->where('filiere_id',$request->filiere_id)->where('classe_id',$request->classe_id)->where('type_exam_id',$request->type_exam_id)->where('moyenne','<',10)->get();*/
     $data=[
        'mat'=>$mat,
        'etudiant_id'=>$request->etudiant_id,   
        'UE'=>$request->ue,       
        'type_exam_id'=>$request->type_exam_id,       
     ];
     return view('parametre.insertRattrapager.createN',$data);
   }
   public function insererNoteRattr(Request $request)
   {
       
    $mat=Matieres::select('*')->where('unite_enseignement_id',$request->UE)->get();
  
   
for ($i=0; $i <count($mat);$i++) {
    $cred[$i]=Notes::select('credit')->where('matiere_id',$mat[$i]['id'])->where('etudiants_id',$request->etudiant_id)->where('type_exam_id',$request->type_exam_id)->get();
    $donne[$i]=[
        "matiere_id"=>$request->matiere_id[$i],
        "etudiants_id"=>$request->etudiant_id,
        "notes"=>$request->note[$i],
        "notesWithCoeff"=>$request->note[$i]*$mat[$i]['coeff'],
        "credit"=>$request->credit[$i],
        "type_exam_id"=>$request->type_exam_id,
      ];
    Notes::create($donne[$i]);
    
    }
    return redirect('listeNV');
   }
  
   public function ListeDesNotes()
   {
       $data['record']=Notes::all();
       return view('note.listeB',$data);
   }
}