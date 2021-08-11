@extends('layouts.app')
@section('content')
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Voir Etudiants</h3></center/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <div class="box box-default">

                <!-- /.box-header -->
                <div class="box-body">
                    <form action="#" method="POST"  enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{METHOD_FIELD('PUT')}}
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom</label>
                                    <input type="text" name="nom" id="nom" readonly class="form-control" value="{{$nom}}">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Prenom</label>
                                    <input type="text" name="prenom" id="prenom" readonly class="form-control"value="{{$prenom}}">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                      <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Date de naissance</label>
                                    <input type="date" name="ddn" id="ddn" class="form-control" readonly value="{{$ddn}}">
                                </div>
                                <!-- /.form-group -->
                            </div>
                      </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Filière</label>
                                   <select name="filiere_id" id="filiere_id" class="form-control"readonly>
                                      <option value="">---</option>
                                        @foreach(App\Filieres::all() as $item)
                                            <option value="{{$item->id}}"{{$item->id == $filiere_id ? "selected" : ""}}>{{$item->nom}}</option>
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
                                   <select name="classe_id" id="classe_id" class="form-control" readonly>
                                      <option value="">---</option>
                                        @foreach(App\Classes::all() as $item)
                                            <option value="{{$item->id}}"{{$item->id == $classe_id ? "selected" : ""}}>{{$item->nom_classe}}</option>
                                        @endforeach
                        
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                     
                  </form>

                </div>   
            </div>
        </div>
    </div>
</section>       
                            
@endsection