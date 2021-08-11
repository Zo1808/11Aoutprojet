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
                    <form action="{{route('insererNoteRattr')}}" method="POST" id="demandForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @foreach($mat  as $it)
                            <div class="row">
                            <div class="col-md-12">
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label class="require control-label">Note pour la Matière  {{$it->nom_matiere}}</label>
                                            <input type="text" class="form-control" name="note[]"  value="">
                                            <label class="require control-label">Credit pour la Matière  {{$it->nom_matiere}}</label>
                                           <input type="number" min="0" class="form-control" name="credit[]"  value="">
                                            <input type="hidden" class="form-control" name="matiere_id[]"  value="{{$it->id}}">
                                            <input type="hidden" class="form-control" name="etudiant_id"  value="{{$etudiant_id}}">
                                            <input type="hidden" class="form-control" name="type_exam_id"  value="{{$type_exam_id}}">
                                          
                                            <input type="hidden" class="form-control" name="UE"  value="{{$UE}}">
                                                
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                            </div>
                        @endforeach
                       <button class="pull-right btn btn-danger">Inserer</button>
                  </form>

                </div>   
            </div>
        </div>
    </div>
</section>       
                            
@endsection