@extends('layouts.app')
@section('content')
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Mise à jour  de Matière</h3></center/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <div class="box box-default">

                <!-- /.box-header -->
                <div class="box-body">
                    <form action="#" method="POST" id="demandForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom de Matière</label>
                                    <input type="text" name="nom_matiere" id="nom_matiere" readonly class="form-control" value='{{$nom_matiere}}'>
                                </div>
                                <!-- /.form-group -->
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Coéfficient</label>
                                    <input type="number" min="1" name="coeff" readonly id="coeff" class="form-control"value='{{$coeff}}'>
                                </div>
                                <!-- /.form-group -->
                            </div>
                         </div>
                         <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">UE</label>
                                   <select name="unite_enseignement_id" readonly id="unite_enseignement_id" class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\UniteEnseignement::all() as $item)
                                            <option value="{{$item->id}}"{{$item->id==$unite_enseignement_id  ? "selected" :""}}>{{$item->UE}}</option>
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
                                    <label class="require control-label">Pour le filière</label>
                                   <select name="filiere_id" id="filiere_id"readonly class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\Filieres::all() as $item)
                                            <option value="{{$item->id}}" {{$item->id==$filiere_id  ? "selected" :""}}>{{$item->nom}}</option>
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
                                   <select name="classe_id" id="classe_id" readonly class="form-control">
                                      <option value="">---</option>
                                        @foreach(App\Classes::all() as $item)
                                            <option value="{{$item->id}}"{{$item->id==$classe_id  ? "selected" :""}}>{{$item->nom_classe}}</option>
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