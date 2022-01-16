@extends('layouts.app')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
        <!-- Plugins css -->
        <link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">OPERATIVA</a></li>
                    <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Departamentos</a></li>-->
                    <li class="breadcrumb-item active">VEHÍCULOS</li>
                </ol>
            </div>
        <h4 class="page-title">VEHÍCULOS</h4>
        </div>
    </div>
</div>     
    <!-- end page title --> 


<!--  Modal content for the Large example -->
<div class="modal fade" id="modal_new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">NUEVO VEHÍCULO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('Vehicles.store') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show mb-1" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">
                                    <i class="fe-truck"></i> INF. DEL VEHÍCULO</a>
                                <a class="nav-link mb-1" id="documents-tab" data-toggle="pill" href="#documents" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">
                                    <i class="mdi mdi-file-account"></i> DOCUMENTOS</a>                                
                            </div>
                        </div> <!-- end col-->
                        <div class="col-sm-9">
                            <div class="tab-content pt-0">
                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                                <div class="mt-3">
                                                    <input type="file" data-plugins="dropify" data-default-file="{{ asset('images/sin_foto.jpeg') }}" name="photo" accept="image/*"  />
                                                    <p class="text-muted text-center mt-2 mb-0">Foto del vehículo</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fe-truck mr-1"></i> Información del Vehículo</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname">Clave Vehículo</label>
                                                            <input type="text" class="form-control" id="lastname" name="vehiclekey" required autocomplete="off">
                                                        </div>
                                                    </div> <!-- end col -->                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname">Modelo</label>
                                                            <input type="text" class="form-control" placeholder="" name="model" required autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userpassword">Número de placas</label>
                                                            <input type="text" class="form-control" placeholder="" name="plates"  required autocomplete="off">
                                                        </div>
                                                    </div> <!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userpassword">Marca</label>
                                                            <input type="text" class="form-control" placeholder="" name="mark"  autocomplete="off">                                            
                                                        </div>
                                                    </div> <!-- end col -->                                  
                                                </div> <!-- end row -->       
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="useremail">Número de motor</label>
                                                            <input type="text" class="form-control" placeholder="" name="motor" required autocomplete="off">                                            
                                                        </div>
                                                    </div>                                  
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="userpassword">Chasis</label>
                                                            <input type="text" class="form-control" placeholder="" name="chassis"  required autocomplete="off">
                                                        </div>
                                                    </div> <!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="userpassword">Color</label>
                                                            <input type="text" class="form-control" placeholder="" name="color"  autocomplete="off">                                            
                                                        </div>
                                                    </div> <!-- end col -->                                    
                                                </div>  
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userpassword">Número de factura</label>
                                                            <input type="text" class="form-control" placeholder="" name="invoicenumber"  required autocomplete="off">
                                                        </div>
                                                    </div> <!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userpassword">Tarjeta de circulación</label>
                                                            <input type="text" class="form-control" placeholder="" name="trafficcard"  autocomplete="off">                                            
                                                        </div>
                                                    </div> <!-- end col -->                                    
                                                </div>  
                                            </div>
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-max-file-size="1M" />
                                                <label>Factura</label>
                                               <!-- <p class="text-muted text-center mt-2 mb-0">Max File size</p>-->
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-max-file-size="1M" />
                                                <label>Tarjeta de circulación</label>
                                               <!-- <p class="text-muted text-center mt-2 mb-0">Max File size</p>-->
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-max-file-size="1M" />
                                                <label>Seguro</label>
                                               <!-- <p class="text-muted text-center mt-2 mb-0">Max File size</p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="row">
                                        <div class="col-lg-4">
                                            
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-max-file-size="1M" />
                                                <label>CURP</label>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-max-file-size="1M" />
                                                <label>RFC</label>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-max-file-size="1M" />
                                                <label>SEGURO SOCIAL</label>
                                                
                                            </div>
                                        </div>
                                    </div>  --> 
                                </div>                            
                            </div>
                            <!--<button id="btn_new" class="btn btn-primary waves-effect waves-light">Guardar</button>-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->         
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" id="btn_new" class="btn btn-primary">Guardar</button>
                    </div>                                                   
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal content for the Large example -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">EDITAR CLIENTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="body-edit">
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="modal_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">INFORMACIÓN GENERAL DEL CLIENTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="body-show">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header py-3 text-white" style="background-color: #62B22F;">
                <div class="card-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0 text-white">VEHÍCULOS</h5>
            </div>
            <div id="cardCollpase1" class="collapse show">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal_new"><i class="mdi mdi-plus-circle mr-2"></i> Nuevo</a>
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
                    <div class="table-responsive" style="overflow-x: scroll;">
                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>    
                                    <th>#</th>
                                    <th>Clave vehicular</th>
                                    <th>Modelo</th> 
                                    <th>Placas</th>                                           
                                    <th>Acciones</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1 ?>
                                @foreach($Vehicles as $column)
                                <tr>
                                    <td>{{ $c }}</td>
                                    <td class="table-user">
                                        <img src="{{ asset( $column->photo ) }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">{{ $column->vehiclekey }}</a>
                                    </td> 
                                    <td>{{ $column->model }}</td>
                                    <td>{{ $column->plates }}</td>                                   
                                    <td>

                                        <a data-toggle="modal" data-target="#modal_show" onclick="btn_show({{$column->id}})" id="show{{$column->id}}" data-status="{{route('Vehicles.show',$column->id)}}" href="javascript:void(0);" class="action-icon" title="Ver" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-eye text-primary"></i></a>
                                        <a data-toggle="modal" data-target="#modal_edit" onclick="btn_edit({{$column->id}})" id="edit{{$column->id}}" data-status="{{route('Vehicles.edit',$column->id)}}" href="javascript:void(0);" class="action-icon btn-edit" title="Editar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-square-edit-outline text-warning"></i></a>
                                        <a onclick="btn_delete({{ $c }})" href="javascript:void(0);" class="action-icon btn-delete" title="Eliminar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-delete text-danger"></i></a>    
                                        <form method="POST" id="form{{ $c }}" action="{{route('Vehicles.destroy',$column->id)}}">
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
   <!-- <div class="col-xs-12 col-lg-4">
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
    </div>-->
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

<!-- Plugins js -->
<script src="{{ asset('libs/dropzone/min/dropzone.min.js') }}"></script>
<script src="{{ asset('libs/dropify/js/dropify.min.js') }}"></script>

<!-- Init js-->
<script src="{{ asset('js/pages/form-fileuploads.init.js') }}"></script>
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
