@extends('layouts.app')
@section('content')
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Création de Filière</h3></center/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <div class="box box-default">

                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{url('notes')}}/{{$note}}" method="POST" id="demandForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{METHOD_FIELD('PUT')}}
                        <label for="">Etudiant</label>
                        <input type="hidden" name="etudiants_id" id="" value="{{$etudiants_id}}">
             <input type="text" name="nomr"id="nomr" class="form-control" value="{{App\Etudiants::select('*')->where('id',$etudiants_id)->first()->nom}} {{App\Etudiants::select('*')->where('id',$etudiants_id)->first()->prenom}}" readonly>
                            <label for="">Matiere</label>
                                    <select name="matiere_id" id="matiere_id" class="form-control">
                                        <option value="">---</option>
                                        @foreach(App\Matieres::all() as $item)
                                            <option value="{{$item->id}}"{{$item->id==$matiere_id ? "selected": ""}} >{{$item->nom_matiere}}</option>
                                        @endforeach
                                    </select>
                                    <label for="note">Note</label>
                                    <input type="text" name="note" id="note" class="form-control" value='{{$notes}}'>
                                    <label for="">Type Examen</label>
                                    <select name="type_exam_id" id="type_exam_id" class="form-control"> 
                                    <option value="">----</option>
                                    @foreach(App\TypeExamens::all() as $item)
                                    <option value="{{$item->id}}"{{$item->id ==$type_exam_id ? "selected":""}}>{{$item->type}}</option>
                                    @endforeach
                                    </select>   
                                <label for="">Crédit</label>
                                <input type="number" min="1" class="form-control" name="credit" id="credit"value="{{$credit}}" >
                            </div>
                                
                      
                       <button class="btn btn-primary">Update</button>
                  </form>

                </div>   
            </div>
        </div>
    </div>
</section>       
                            
@endsection