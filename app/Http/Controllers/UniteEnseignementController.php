<?php

namespace App\Http\Controllers;

use App\UniteEnseignement;
use Illuminate\Http\Request;

class UniteEnseignementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['record']=UniteEnseignement::all();
        return view ('UE.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('UE.create');
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
            'unite_enseignement'=>'required|string',
          ]);
        $data=[
            'UE'=>$request->unite_enseignement,
           
        ];  
        UniteEnseignement::create($data);
        \Session::Flash('success','Enregistrement avec succès!');
        return  redirect('unite');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UniteEnseignement  $uniteEnseignement
     * @return \Illuminate\Http\Response
     */
    public function show( $uniteEnseignement)
    {
        $da=UniteEnseignement::find($uniteEnseignement);
        $data['UE']=$da->UE;
        return view('UE.show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UniteEnseignement  $uniteEnseignement
     * @return \Illuminate\Http\Response
     */
    public function edit($uniteEnseignement)
    {
        $da=UniteEnseignement::find($uniteEnseignement);
        $data['UE']=$da->UE;
        $data['uniteEnseignement']=$uniteEnseignement;
        
        return view('UE.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UniteEnseignement  $uniteEnseignement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$uniteEnseignement)
    {
        $da=UniteEnseignement::find($uniteEnseignement);
        $da->UE=$request->unite_enseignement;
        $da->save();

        return redirect('unite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UniteEnseignement  $uniteEnseignement
     * @return \Illuminate\Http\Response
     */
    public function destroy($uniteEnseignement)
    {
        $da=UniteEnseignement::find($uniteEnseignement);
        $da->delete();
        return redirect('unite');
    }
}
