<?php

namespace App\Http\Controllers;

use App\Matieres;
use Illuminate\Http\Request;

class matiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['record']=Matieres::all();
        return  view('matiere.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return  view('matiere.create');
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
            'nom_matiere'=>'required|string',
            'coeff'=>'required',
            'filiere_id'=>'required',
            'unite_enseignement_id'=>'required',
            'classe_id'=>'required',
            
        ]);
        $data=[
            'nom_matiere'=>$request->nom_matiere,
            'coeff'=>$request->coeff,
            'unite_enseignement_id'=>$request->unite_enseignement_id,
            'filiere_id'=>$request->filiere_id,
            'classe_id'=>$request->classe_id,
        ];  
        Matieres::create($data);
        \Session::Flash('success','Enregistrement avec succès!');
        return  redirect('matiere');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function show( $matieres)
    {
        $da=Matieres::find($matieres);
        $data=[
            'nom_matiere'=>$da->nom_matiere,
            'coeff'=>$da->coeff,
            'unite_enseignement_id'=>$da->unite_enseignement_id,
            'filiere_id'=>$da->filiere_id,
            'classe_id'=>$da->classe_id,
        ];  
        return view('matiere.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function edit($matieres)
    {
        $da=Matieres::find($matieres);
        $data=[
            'matieres'=>$matieres,
            'nom_matiere'=>$da->nom_matiere,
            'coeff'=>$da->coeff,
            'unite_enseignement_id'=>$da->unite_enseignement_id,
            'filiere_id'=>$da->filiere_id,
            'classe_id'=>$da->classe_id,
        ];  
        return view('matiere.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matieres)
    {
        $da=Matieres::find($matieres);
       
            $da->nom_matiere=$request->nom_matiere;
            $da->coeff=$request->coeff;

            $da->unite_enseignement_id=$request->unite_enseignement_id;

            $da->filiere_id=$request->filiere_id;

            $da->classe_id=$request->classe_id;
            $da->save();
            return  redirect('matiere');

  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matieres  $matieres
     * @return \Illuminate\Http\Response
     */
    public function destroy( $matieres)
    {
        
        $da=Matieres::find($matieres);
            $da->delete();
            return  redirect('matiere');
    }
}
