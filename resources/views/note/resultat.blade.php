@extends('layouts.app')
@section('content')
  <!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    <div class="top-bar-title padding-bottom">Liste des  Etudiants</div>
                </div>
                <div class="col-md-2 top-right-btn">
                  
                   <br/>
                    <br/>  
                    <br/>
                   <br/>
                </div>
               
            </div>
        </div>
    </div>
      <!-- Default box -->
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
       
       
        <div class="table-responsive">
                 <table id="props1" class="table table-bordered table-striped" style="width:100%;" >
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Filiere</th>
                    <th>Niveau</th>
                    <th><center>Action</center></th>
                  </tr>
                </thead>
                <tbody>
                @foreach(App\Etudiants::all() as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->prenom}}</td>
                    <td>{{App\Filieres::select('nom')->where('id',$item->filiere_id)->first()->nom}}</td>
                    <td>{{App\Classes::select('nom_classe')->where('id',$item->classe_id)->first()->nom_classe}}</td>
                    <td>
                         <center>
                    <a data-toggle="modal" data-target="#resultat" id="detailsNoteIn" data-veh="{{$item->id}}"><i class="fa fa-edit"></i></a>
                        </center>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          
        </div>
        
        <!-- /.box-body -->
    </div>
   
    <!-- /.box -->
</section>
<div class="container">

     <div class="modal fade" id="resultat" role="dialog"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voici sa note</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                 </div>
                 <div class="modal-body">
                <!-- <select name="type_exam_id" id="type_exam_id" class="form-control">
                 <option value=""disabled></option>
                 @foreach(App\TypeExamens::all() as $item)
                    <option value="{{$item->id}}">{{$item->type}}</option>
                 @endforeach
                 </select>-->
                 <div class="table-responsive">
                 <table  class="table table-bordered table-striped" style="width:100%;">
                 <thead>
                        <tr>
                            <th>NOM ET PRENOM</th>
                            <th>FILIERE</th>
                            <th>NIVEAU</th>
                            <th>MATIERE</th>
                         
                            <th>NOTE avec Coeff</th>
                            <th>CREDIT</th>
                        </tr>
                        </thead>
                        <tbody id="detailNote">
                       </tbody>
                        
                    </table>
                    <tfooter>
                     <form action="{{url('releveNote')}}" method="POST">
                     {{csrf_field()}}
                        <input type="hidden" name="et_id"id="et_id"value="">
                        <select name="type_exam_id" id="type_exam_id" class="btn btn-danger">
                        @foreach(App\TypeExamens::all() as $item)
                            <option value="{{$item->id}}">{{$item->type}}</option>
                        @endforeach
                        </select>
                        <button class="btn btn-danger">Voir Relevé</button>
                     </form>
                        </tfooter>
                    </div>
             </div>
           
             </div>
           
           
         </div>
   
 </div>
 </div>
@endsection
@section('js')
<script type="text/javascript">

 
    /* Formating function for row details */
   
    $('body').on('click', '#noteinsert', function () {
        var customer_id = $(this).data('id');
        var nom = $(this).data('nom');
        var prenom = $(this).data('prenom');
        var classe_id = $(this).data('classe');
        var filiere_id = $(this).data('filiere');
   var nomwithclasse=(nom+' '+prenom);
       $('#etudiant_id').val(customer_id);
       $('#classe_id').val(classe_id);
       $('#filiere_id').val(filiere_id);
       $('#nomr').val(nomwithclasse);
      // $('#etudiant_id').val(customer_id);
       
    });
    $('body').on('click', '#detailsNoteIn', function () {
    var custom_id = $(this).data('veh');
   // var t = $(this).data('toke');
      $('#et_id').val(custom_id);  
        test(custom_id);
  });
  function test(monObjet){
                    var li=monObjet;
                      $.ajax({
                          type: 'GET',
                          url: '{{url("detailsNoteR")}}',
                          timeout: 1000,
                          data: {'vehic':li,
                                '_token':'{{csrf_token()}}'
                                },
                          success: function(dataControle){

                          $('#detailNote').html(dataControle);
                              
                          },
                          
                          error: function(){

                          alert('La requête n\'a pas abouti'); }

                      });
    };
    $(function () {
    $("#props").DataTable({
        'dom': 'Bfrtip',
        'responsive': true,
      "order": [],
      'buttons': [
         {
            extend: 'excelHtml5',
            autoFilter: true,
            sheetName: 'Exported data',
            text: 'Exporter',
            className: 'pull-right btn-warning'
        } ,
    ],
    });
});
$(function () {
    $("#props1").DataTable({
        'dom': 'Bfrtip',
        'responsive': true,
      "order": [],
      'buttons': [
         {
            extend: 'excelHtml5',
            autoFilter: true,
            sheetName: 'Exported data',
            className: 'pull-right btn-warning'
        } ,
    ],
    });
});
  </script>
@endsection