<?php

namespace App\Http\Controllers;

use App\Departements;
use Illuminate\Http\Request;

class departementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['record']=Departements::all();
        return view('departement.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('departement.create');
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
            'nom_departement'=>'required|string'
        ]);
        $data=[
            'nom_departement'=>$request->nom_departement
        ];
        Departements::create($data);
     
        \Session::Flash('success','Enregistrement avec succès!');
        return  redirect('departement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function show($departements)
    {
        $da=Departements::find($departements);
        $data=[
            'nom_departement'=>$da->nom_departement,
        ];
        return  view('departement.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function edit($departements)
    {
        
        $da=Departements::find($departements);
        $data=[
            'departements'=>$departements,
            'nom_departement'=>$da->nom_departement,
        ];
        return  view('departement.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$departements)
    {
        $da=Departements::find($departements);
      $da->nom_departement=$request->nom_departement;
      $da->save();
      return redirect('departement');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departements  $departements
     * @return \Illuminate\Http\Response
     */
    public function destroy($departements)
    {
        $da=Departements::find($departements);
        $da->delete();
        return redirect('departement');  
    }
}
