@extends('layouts.app')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

@endsection
@section('content')
@section('department') Recursos humanos @endsection
@section('module') Departamentos @endsection


<!--  Modal content for the Large example -->
<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">NUEVA CATEGORIA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal content for the Large example -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">EDITAR CATEGORIA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="body-edit">

                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="row">
    <div class="col-xs-12 col-lg-8">
        <div class="card">
            <div class="card-header bg-dark py-3 text-white">
                <div class="card-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0 text-white">CATEGORIAS</h5>
            </div>
            <div id="cardCollpase1" class="collapse show">
                <div class="card-body">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#bs-example-modal-lg"><i class="mdi mdi-plus-circle mr-2"></i> Nueva </a>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                                <!--<button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog"></i></button>-->
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-file-excel"></i></span>.xlsx
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-file-pdf"></i></span>.pdf
                                </button>
                            </div>
                        </div><!-- end col-->
                    </div>    
                    <div class="table-responsive">
                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>    
                                    <th>#</th>
                                    <th>Departamento</th>                                                                           
                                    <th style="width: 150px;">Acciones</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1 ?>
                                @foreach($Departments as $column)
                                <tr>
                                    <td>{{ $c }}</td>
                                    <td>{{ $column->name }}</td>                                                                        
                                    <td>
                                        <a onclick="btn_show({{$column->id}})" id="show{{$column->id}}" data-status="{{route('Departments.show',$column->id)}}" href="javascript:void(0);" class="action-icon" title="Ver" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-eye text-primary"></i></a>
                                        <a data-toggle="modal" data-target="#modal_edit" onclick="btn_edit({{$column->id}})" id="edit{{$column->id}}" data-status="{{route('Departments.edit',$column->id)}}" href="javascript:void(0);" class="action-icon btn-edit" title="Editar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-square-edit-outline text-warning"></i></a>
                                        <a  onclick="btn_delete({{ $c }})" href="javascript:void(0);" class="action-icon btn-delete" title="Eliminar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-delete text-danger"></i></a>
                                        <form method="POST" id="form{{ $c }}" action="{{route('Departments.destroy',$column->id)}}">
                                            
                                            @csrf
                                            @method('delete')
                                            
                                        </form>                                                  
                                    </td>                                   
                                </tr>
                                <?php $c = $c + 1 ?>
                                @endforeach                                                                                                                                                                                                                
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
    <div class="col-xs-12 col-lg-4">
        <div class="card">
            <div class="card-header bg-dark py-3 text-white">
                <div class="card-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0 text-white">MÁS INFORMACIÓN</h5>
            </div>
            <div id="cardCollpase2" class="collapse show">
                <div class="card-body">
                    <div id="body-show">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection   
 
@section('js')
<script src="{{ asset('libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('libs/pdfmake/build/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ asset('js/pages/datatables.init.js') }}"></script>
<!-- Sweet Alerts js -->
<script src="{{ asset('libs/tippy.js/tippy.all.min.js') }}"></script>





@if(Session::has('success'))
<script>
    Swal.fire(
        {   type: "success",
            icon: 'success',
            title: '{{ Session::get('success') }}',
            showConfirmButton: false,
            timer: 2000        
        }
    )    
</script>  
@endif


<script>
function btn_show(id){
    //alert(id);

    var valor = $('#show'+id).attr('data-status');
        //alert(valor);
        $("#body-show").load(valor);
}

function btn_edit(id){
   
    var valor = $('#edit'+id).attr('data-status');
    //alert(valor);
        //alert(valor);
        $("#body-edit").load(valor);
}

function btn_delete(id){
//alert('hola'+id);
Swal.fire({
        title: 'Seguro?',
        text: "Deseas eliminar el registro no. "+id+"?",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
        }).then(function (t) {
        //alert('eliminaste');
        t.value && $("#form"+id).submit();
        // Swal.fire("Deleted!", "Your file has been deleted.", "success");
    });
}


</script>  
@endsection                
