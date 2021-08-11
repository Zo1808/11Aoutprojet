@extends('layouts.app')
@section('content')
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Selectionner</h3></center/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <div class="box box-default">

                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{route('extract.generateFichePresencePdf')}}" method="POST" id="demandForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom de filière</label>
                                 
                                    <select name="filiere_id" id="filiere_id" class="form-control">
                                      <option value=""disabled>---</option>
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
                                    <label class="require control-label">Classe</label>
                                   <select name="classe_id" id="classe_id" class="form-control">
                                      <option value=""disabled>---</option>
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
                                    <label class="require control-label">Année Scolaire</label>
                                   <select name="annee_scolaire" id="annee_scolaire" class="form-control">
                                      <option value=""disabled>---</option>
                                      <option value="2015-2016">2015-2016</option>
                                      <option value="2016-2017">2016-2017</option>
                                      <option value="2017-2018">2017-2018</option>
                                      <option value="2018-2019">2018-2019</option>
                                      <option value="2019-2020">2019-2020</option>
                                      <option value="2020-2021">2020-2021</option>
                                      <option value="2021-2022">2021-2022</option>
                                      <option value="2022-2023">2022-2023</option>
                                      <option value="2023-2024">2023-2024</option>
                                      <option value="2024-2025">2024-2025</option>
                                      <option value="2025-2026">2025-2026</option>
                                      <option value="2026-2027">2026-2027</option>
                                      <option value="2027-2028">2027-2028</option>
                                      <option value="2028-2029">2028-2029</option>
                                      <option value="2029-2030">2029-2030</option>
                                      <option value="2030-2031">2030-2031</option>
                                      <option value="2031-2032">2031-2032</option>
                                      <option value="2032-2033">2032-2033</option>
                                       
                                   </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    
                       <button class="pull-right btn btn-primary">Extraire</button>
                  </form>

                </div>   
            </div>
        </div>
    </div>
</section>       
                            
@endsection