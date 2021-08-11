@extends('layouts.app')
@section('content')
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Nouveau Responsable</h3></center/></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">

            <div class="box box-default">

                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{route('responsable.store')}}" method="POST" id="demandForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Civilité</label>
                                    <select name="civil" id="civil" class="form-control">
                                        <option value=""disabled>---</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mme">Mme</option>
                                        <option value="Mlle">Mlle</option>

                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control" value="{{old('nom')}}">
                                </div>
                                <!-- /.form-group -->
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Prenom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{old('prenom')}}">
                                </div>
                                <!-- /.form-group -->
                            </div>
                         </div>
                        
                         <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Date de naissance</label>
                                    <input type="date" min="21" name="ddn" id="ddn" value="{{old('ddn')}}"class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                         </div>
                         
                         <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Numéro tel</label>
                                    <input type="text"  name="numero" id="numero" value="{{old('numero')}}"class="form-control">
                                </div>
                                <!-- /.form-group -->
                            </div>
                         </div>
                         <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Fonction</label>
                                   <input type="text" name="fonction" id="fonction" value="{{old('fonction')}}" class="form-control">
            
                                </div>
                                <!-- /.form-group -->
                            </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Details Fonction</label>
                                   <input  type="text" name="detailsFonction" id="detailsFonction" value="{{old('detailsFonction')}}" class="form-control">
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