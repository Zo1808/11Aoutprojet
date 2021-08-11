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
       
       
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
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
                    <a data-toggle="modal" data-target="#insertionNote" id="noteinsert" data-id="{{$item->id}}"data-nom="{{$item->nom}}"data-prenom="{{$item->prenom}}"data-filiere="{{$item->filiere_id}}"data-classe="{{$item->classe_id}}"><i class="fa fa-edit"></i></a>
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

     <div class="modal fade" id="insertionNote" role="dialog"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertion de Note</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                 </div>
                 <form action="{{url('sauver')}}" method="POST">
                    {{csrf_field()}}
                        <div class="modal-body">
                        {{csrf_field()}}
                            <div class="form-group">
                            <input type="hidden" name="etudiant_id" id="etudiant_id" class="form-control" value="">
                            <input type="hidden" name="classe_id" id="classe_id" class="form-control" value="">
                            <input type="hidden" name="filiere_id" id="filiere_id" class="form-control" value="">
                            
                            <label for="">Etudiant</label>
                           
                           <input type="text" name="nomr"id="nomr" class="form-control" value="">
                            <label for="">Matiere</label>
                                    <select name="matiere_id" id="matiere_id" class="form-control">
                                        <option value="">---</option>
                                        @foreach(App\Matieres::all() as $item)
                                            <option value="{{$item->id}}" >{{$item->nom_matiere}}</option>
                                        @endforeach
                                    </select>
                                    <label for="note">Note</label>
                                    <input type="text" name="note" id="note" class="form-control">
                                    <label for="">Type Examen</label>
                                    <select name="type_exam_id" id="type_exam_id" class="form-control"> 
                                    <option value="">----</option>
                                    @foreach(App\TypeExamens::all() as $item)
                                    <option value="{{$item->id}}">{{$item->type}}</option>
                                    @endforeach
                                    </select>   
                                <label for="">Crédit</label>
                                <input type="number" min="1" class="form-control" name="credit" id="credit"value="{{old('credit')}}" >
                            </div>
                                
                      
                              <button class="btn btn-primary" style="margin-left:655px;">Ajouter Maintenant</button>
                       
                       </div>
                     </div>                
                </div>
              </div>
          
         </form>
             </div>
         </div>
   
 </div>
 </div>
@endsection
@section('js')
<script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
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
  </script>
@endsection