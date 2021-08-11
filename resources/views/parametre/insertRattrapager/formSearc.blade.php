@extends('layouts.app')
@section('content')
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Voir les Resultat Non Valider</h3></center/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <div class="box box-default">

                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{route('VoirResNV')}}" method="POST" id="demandForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Pour le filière</label>
                                   <select name="filiere_id" id="filiere_id" class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\Filieres::all() as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                        @endforeach
                        
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Niveau</label>
                                   <select name="classe_id" id="classe_id" class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\Classes::all() as $item)
                                            <option value="{{$item->id}}">{{$item->nom_classe}}</option>
                                        @endforeach
                        
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Année</label>
                                   <select name="type_exam_id" id="type_exam_id" class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\TypeExamens::all() as $item)
                                            <option value="{{$item->id}}">{{$item->type}}</option>
                                        @endforeach
                        
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                       <button class="pull-right btn btn-danger">Voir</button>
                  </form>

                </div>   
            </div>
        </div>
    </div>
</section>       
                            
@endsection