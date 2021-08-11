@extends('layouts.app')
@section('content')
<section class="content">
<div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-title padding-bottom"><center><h3>Voir UE</h3></center/></div>
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
                        
                        <div class="row">
                            <div class="col-md-12">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="require control-label">Nom UE</label>
                                    <input type="text" name="unite_enseignement" readonly  value="{{$UE}}"id="unite_enseignement" class="form-control">
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