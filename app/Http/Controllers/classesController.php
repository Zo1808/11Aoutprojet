<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;

class classesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['record']=Classes::all();
       return  view('classe.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('classe.create');
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
        ]);
        $data=[
            'nom_classe'=>$request->nom,
        ];  
        Classes::create($data);
        \Session::Flash('success','Enregistrement avec succès!');
        return  redirect('classe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show( $classes)
    {
        $dat=Classes::find($classes);
        $data["nom_classe"]=$dat->nom_classe;
        $data["classes"]=$dat->id;

        return  view('classe.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit( $classes)
    {
        $dat=Classes::find($classes);
        $data["nom_classe"]=$dat->nom_classe;
        $data["classes"]=$dat->id;

        return  view('classe.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $classes)
    {
        $data=Classes::find($classes);
        $data->nom_classe=$request->nom;
        $data->save();
        return redirect('classe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy( $classes)
    {
        $data=Classes::find($classes);
        if($data)
        {
            $data->delete();
            \Session::Flash('success',trans('message.success.delete_success'));
        
                return redirect('classe');
        }
    }
}
