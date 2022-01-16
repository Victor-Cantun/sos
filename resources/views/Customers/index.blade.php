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
                    <li class="breadcrumb-item active">CLIENTES</li>
                </ol>
            </div>
        <h4 class="page-title">CLIENTES</h4>
        </div>
    </div>
</div>     
    <!-- end page title --> 


<!--  Modal content for the Large example -->
<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">NUEVO CLIENTE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('Customers.store') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="card-box ">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-default-file="{{ asset('images/users/sin-foto.png') }}" name="photo" accept="image/*"  />
                                                <p class="text-muted text-center mt-2 mb-0">Foto de perfil</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div>
                        <div class="col-8">
                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Información del cliente</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">RFC</label>
                                        <input type="text" class="form-control" id="lastname" name="rfc" required autocomplete="off">
                                    </div>
                                </div> <!-- end col -->                                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Nombres</label>
                                        <input type="text" class="form-control" placeholder="" name="name" required autocomplete="off">
                                    </div>
                                </div>
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="userpassword">Celular</label>
                                        <input type="text" class="form-control" placeholder="" name="cellphone"  required autocomplete="off">
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="userpassword">Teléfono</label>
                                        <input type="text" class="form-control" placeholder="" name="phone"  autocomplete="off">                                            
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="useremail">Correo electónico</label>
                                        <input type="email" class="form-control" placeholder="" name="email" required autocomplete="off">                                            
                                    </div>
                                </div>                                    
                            </div> <!-- end row -->       
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="userpassword">Ciudad</label>
                                        <input type="text" class="form-control" placeholder="" name="city"  required autocomplete="off">
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="userpassword">Estado</label>
                                        <input type="text" class="form-control" placeholder="" name="state"  autocomplete="off">                                            
                                    </div>
                                </div> <!-- end col -->                                    
                            </div>  
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="userpassword">Colonia</label>
                                        <input type="text" class="form-control" placeholder="" name="colony"  required autocomplete="off">
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="userpassword">Codigo Postal</label>
                                        <input type="text" class="form-control" placeholder="" name="postalcode"  autocomplete="off">                                            
                                    </div>
                                </div> <!-- end col -->                                    
                            </div>                                     
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="userbio">Domicilio</label>
                                        <textarea class="form-control"  rows="4" placeholder="" name="address" autocomplete="off"></textarea>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <button id="btn_new" class="btn btn-primary waves-effect waves-light">Guardar</button>
                        </div>
                        <div class="col-8">
                        </div>                    
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
<!--<div class="modal fade" id="modal_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
</div>-->
<div class="row">
    <div class="col-xs-12 col-lg-8">
        <div class="card">
            <div class="card-header py-3 text-white" style="background-color: #62B22F;">
                <div class="card-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0 text-white">CLIENTES</h5>
            </div>
            <div id="cardCollpase1" class="collapse show">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#bs-example-modal-lg"><i class="mdi mdi-plus-circle mr-2"></i> Nuevo</a>
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
                        <table  id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>    
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Celular</th> 
                                    <th>Correo Electrónico</th>                                           
                                    <th>Acciones</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1 ?>
                                @foreach($Customers as $column)
                                <tr>
                                    <td>{{ $c }}</td>
                                    <td class="table-user">
                                        <img src="{{ asset( $column->photo ) }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">{{ $column->name }} {{ $column->surnames }}</a>
                                    </td> 
                                    <td>{{ $column->cellphone }}</td>
                                    <td>{{ $column->email }}</td>                                   
                                    <td>

                                        <a data-toggle="modal" data-target="#modal_show" onclick="btn_show({{$column->id}})" id="show{{$column->id}}" data-status="{{route('Customers.show',$column->id)}}" href="javascript:void(0);" class="action-icon" title="Ver" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-eye text-primary"></i></a>
                                        <a data-toggle="modal" data-target="#modal_edit" onclick="btn_edit({{$column->id}})" id="edit{{$column->id}}" data-status="{{route('Customers.edit',$column->id)}}" href="javascript:void(0);" class="action-icon btn-edit" title="Editar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-square-edit-outline text-warning"></i></a>
                                        <a onclick="btn_delete({{ $c }})" href="javascript:void(0);" class="action-icon btn-delete" title="Eliminar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-delete text-danger"></i></a>
      
                                        <form method="POST" id="form{{ $c }}" action="{{route('Customers.destroy',$column->id)}}">
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
               
