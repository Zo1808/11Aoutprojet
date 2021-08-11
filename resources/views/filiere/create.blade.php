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
                    <form action="{{route('filiere.store')}}" method="POST" id="demandForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom de filière</label>
                                    <input type="text" name="nom" id="nom" class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom de departement</label>
                                   <select name="departement_id" id="departement_id" class="form-control">
                                      <option value=""disabled>---</option>
                                        @foreach(App\Departements::all() as $item)
                                            <option value="{{$item->id}}">{{$item->nom_departement}}</option>
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
                                    <label class="require control-label">Responsable</label>
                                   <select name="responsable_id" id="responsable_id" class="form-control">
                                      <option value=""disabled>---</option>
                                        @foreach(App\ResponsableParcours::all() as $item)
                                            <option value="{{$item->id}}">{{$item->nom}} {{$item->prenom}} --> {{$item->fonction}}</option>
                                        @endforeach
                        
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
              
                       <button class="pull-right btn btn-primary">Sauvegarder</button>
                  </form>

                </div>   
            </div>
        </div>
    </div>
</section>       
                            
@endsection