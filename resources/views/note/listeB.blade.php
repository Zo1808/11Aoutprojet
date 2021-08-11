@extends('layouts.app')
@section('content')
  <!-- Main content -->
<section class="content">
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                    <div class="top-bar-title padding-bottom">Liste des Notes</div>
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
                    <th>Etudiant</th>
                    <th>Matiere</th>
                    <th>Note</th>
                    <th>Examen</th>
                    
                    <th><center>Action</center></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($record as  $item)
                  <tr>
                  
                  <td>{{$item->id}}</td>
                  
                    <td>{{App\Etudiants::select('*')->where('id',$item->etudiants_id)->first()->nom}} {{App\Etudiants::select('*')->where('id',$item->etudiants_id)->first()->prenom}}</td>
                    <td>{{App\Matieres::select('*')->where('id',$item->matiere_id)->first()->nom_matiere}}</td>
                    <td>{{$item->notes}}</td>
                    <td>{{App\TypeExamens::select('*')->where('id',$item->type_exam_id)->first()->type}}</td>
                    
                    <td>
                    <center>
                        <a href="{{url('notes')}}/{{$item->id}}"><i class="btn btn-primary fa fa-eye"></i></a>
                        <a href="{{url('notes')}}/{{$item->id}}/edit"><i class="btn btn-primary fa fa-edit"></i></a>
                        <form method="POST" action="{{url('notes')}}/{{$item->id}}" accept-charset="UTF-8" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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