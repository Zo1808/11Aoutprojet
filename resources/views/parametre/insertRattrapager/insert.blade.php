@extends('layouts.app')
@section('content')
  <!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    <div class="top-bar-title padding-bottom">Liste des UE NV par chaque Eleve</div>
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
                    <th>Moyenne UE</th>
                    <th>Etudiant</th>
                    <th>Filiere</th>
                    <th>Classe</th>
                    <th>Année</th>
                    <th>UE à Repeché</th>
                    <th><center>Action</center></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($record as $item)
                  <tr >
                    <td>{{$item->id}}</td>
                    <td>{{$item->moyenne}}</td>
                    <td>{{App\Etudiants::select('nom')->where('id',$item->etudiant_id)->first()->nom}}  {{App\Etudiants::select('prenom')->where('id',$item->etudiant_id)->first()->prenom}}</td>
                    <td>{{App\Filieres::select('nom')->where('id',$item->filiere_id)->first()->nom}}</td>
                    <td>{{App\Classes::select('nom_classe')->where('id',$item->classe_id)->first()->nom_classe}}</td>
                    <td>{{App\TypeExamens::select('type')->where('id',$item->type_exam_id)->first()->type}}</td>
                    <td>{{$item->ue}}</td>
                    <td>
                    <center>
                    <form action="{{url('noteRattraper')}}" method="POST">
                    {{csrf_field()}}
                        <input type="hidden" name="ue" id="ue" value="{{$item->ue}}">
                        <input type="hidden" name="etudiant_id" id="etudiant_id" value="{{$item->etudiant_id}}">
                        <input type="hidden" name="classe_id" id="classe_id" value="{{$item->classe_id}}">
                        <input type="hidden" name="filiere_id" id="filiere_id" value="{{$item->filiere_id}}">
                        <input type="hidden" name="type_exam_id" id="type_exam_id" value="{{$item->type_exam_id}}">
                       
                        
                        <button><i class="btn btn-warning">Ajouter Note Rattrapage</i></button>
                    </form>
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
  </script>
@endsection