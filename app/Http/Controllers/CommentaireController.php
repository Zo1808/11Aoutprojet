<?php

namespace App\Http\Controllers;

use App\CommentaireResult;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['record']=CommentaireResult::all();
       
        return view('parametre.comm',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        return view('parametre.ajoutercommRes');
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
            "UE_id"=>$request->ue,
            "classe_id"=>$request->classe_id,
            "filiere_id"=>$request->filiere_id,
            "exam_type_id"=>$request->exam_type_id,
            "commentaire"=>$request->commentaire,      
       ];
        CommentaireResult::create($data);   
       return redirect('comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentaireResult  $commentaireResult
     * @return \Illuminate\Http\Response
     */
    public function show($commentaireResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentaireResult  $commentaireResult
     * @return \Illuminate\Http\Response
     */
    public function edit($commentaireResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentaireResult  $commentaireResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$commentaireResult)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentaireResult  $commentaireResult
     * @return \Illuminate\Http\Response
     */
    public function destroy($commentaireResult)
    {
        
    }
}
