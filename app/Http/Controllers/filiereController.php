<?php

namespace App\Http\Controllers;

use App\Filieres;
use Illuminate\Http\Request;

class filiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu']="liste";
        $data['sub_menu']="liste/filiere";
        $data['records']=Filieres::all();
        return view('filiere.index',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu']="liste";
        $data['sub_menu']="liste/filiere";
      
        return view('filiere.create');
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
            'nom'=>'required|string',
            'departement_id'=>'required',
        ]);
        $data=[
            'nom'=>$request->nom,
            'departement_id'=>$request->departement_id,
            'responsable_id'=>$request->responsable_id

        ];
        Filieres::create($data);
     
        \Session::Flash('success','Enregistrement avec succès!');
        return  redirect('filiere');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function show($filieres)
    {
        $data['menu']="liste";
        $data['sub_menu']="liste/filiere";
         $fili=Filieres::find($filieres);
         $data['nom_filiere']=$fili->nom;
         
         $data['responsable_id']=$fili->responsable_id;

         $data['departement_id']=$fili->departement_id;
        return view('filiere.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function edit($filieres)
    {
        $data['menu']="liste";
        $data['sub_menu']="liste/filiere";
         $fili=Filieres::find($filieres);
         $data['filiere']=$fili->id;
         $data['nom_filiere']=$fili->nom;
         $data['departement_id']=$fili->departement_id;

         $data['responsable_id']=$fili->responsable_id;
        return view('filiere.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$filieres)
    {
        $data=Filieres::find($filieres);
        $data->nom=$request->nom;
        $data->departement_id=$request->departement_id;
        
        $data->responsable_id=$request->responsable_id;

        $data->save();
        return redirect('filiere');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filieres  $filieres
     * @return \Illuminate\Http\Response
     */
    public function destroy($filieres)
    {
        
        $data=Filieres::find($filieres);
        if($data)
        {
            $data->delete();
            \Session::Flash('success',trans('message.success.delete_success'));
        
                return redirect('filiere');
        }
    }
}
