<?php

namespace App\Http\Controllers;

use App\ResponsableParcours;
use Illuminate\Http\Request;

class ResponsableParcourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['record']=ResponsableParcours::all();
        return view('parametre.responsable.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parametre.responsable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data=[
            "civil" => $request->civil,
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "ddn" => $request->ddn,
            "numero" =>$request->numero,
            "fonction" => $request->fonction,
            "detailsFonction" => $request->detailsFonction,
            ];
            ResponsableParcours::create($data);
            return redirect('responsable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ResponsableParcours  $responsableParcours
     * @return \Illuminate\Http\Response
     */
    public function show($responsableParcours)
    {
        $da=ResponsableParcours::find($responsableParcours);
        $data=[
            "civil" => $da->civil,
            "nom" => $da->nom,
            "prenom" => $da->prenom,
            "ddn" => $da->ddn,
            "numero" =>$da->numero,
            "fonction" => $da->fonction,
            "detailsFonction" => $da->detailsFonction,
            ];
        return view('parametre.responsable.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ResponsableParcours  $responsableParcours
     * @return \Illuminate\Http\Response
     */
    public function edit($responsableParcours)
    {
        $da=ResponsableParcours::find($responsableParcours);
        $data=[
            "responsable"=>$da->id,
            "civil" => $da->civil,
            "nom" => $da->nom,
            "prenom" => $da->prenom,
            "ddn" => $da->ddn,
            "numero" =>$da->numero,
            "fonction" =>$da->fonction,
            "detailsFonction" =>$da->detailsFonction,
            ];
        return view('parametre.responsable.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ResponsableParcours  $responsableParcours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$responsableParcours)
    {
        $da=ResponsableParcours::find($responsableParcours);
            $da->civil =$request->civil;
            $da->nom =$request->nom;
            $da->prenom= $request->prenom;
            $da->ddn=$request->ddn;
            $da->numero =$request->numero;
            $da->fonction=$request->fonction;
            $da->detailsFonction=$request->detailsFonction;
            $da->save();
        return redirect('responsable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ResponsableParcours  $responsableParcours
     * @return \Illuminate\Http\Response
     */
    public function destroy($responsableParcours)
    {
        $da=ResponsableParcours::find($responsableParcours);
        $da->delete();
        return redirect('responsable');
    }
}
