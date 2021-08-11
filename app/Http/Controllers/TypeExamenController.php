<?php

namespace App\Http\Controllers;

use App\TypeExamens;
use Illuminate\Http\Request;

class TypeExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['type']=TypeExamens::all();
        return view('typeExam.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('typeExam.create');
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
            'type'=>$request->type
        ];
        TypeExamens::create($data);
        return redirect('typeExam');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeExamens  $typeExamens
     * @return \Illuminate\Http\Response
     */
    public function show( $typeExamens)
    {
       $da=TypeExamens::find($typeExamens);
       $data=
       [
           'typeExam'=>$da->id,
            'type'=>$da->type,
       ];
       return view('typeExam.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeExamens  $typeExamens
     * @return \Illuminate\Http\Response
     */
    public function edit($typeExamens)
    {
        $da=TypeExamens::find($typeExamens);
       $data=
       [
           'typeExam'=>$da->id,
            'type'=>$da->type,
       ];
       return view('typeExam.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeExamens  $typeExamens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $typeExamens)
    {
        $da=TypeExamens::find($typeExamens);
        $da->type=$request->type;
        $da->save();
        return redirect('typeExam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeExamens  $typeExamens
     * @return \Illuminate\Http\Response
     */
    public function destroy($typeExamens)
    {
        $da=TypeExamens::find($typeExamens);
        $da->delete();
        return redirect('typeExam');
    }
}
