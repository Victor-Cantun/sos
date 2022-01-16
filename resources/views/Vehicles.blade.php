@extends('layouts.app')

@section('content')

                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Logística</a></li>
                                            <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>-->
                                            <li class="breadcrumb-item active">Vehículos</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Vehículos</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Vehículos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <embed src="{{ asset('files/checklist_salida_unidad.pdf') }}" width="100%" height="1000px">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->                         
                        <!-- Full width modal content -->
                        <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-full-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="fullWidthModalLabel">Nuevo Vehículo</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="card-box text-center">
                                                    <img src="{{ asset('images/users/sin-foto.png') }}" class="rounded-circle avatar-xl img-thumbnail rounded-circle"
                                                        alt="profile-image">
                        
                                                    <h4 class="mb-0">Foto de la unidad</h4>
                                                    <!--<p class="text-muted">@webdesigner</p>-->
                        
                                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Nueva</button>
                                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Eliminar</button>
                                                    

                                                </div> <!-- end card-box -->
                                            </div>
                                            <div class="col-8">
                                                <form>
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fe-truck"></i> Información del vehículo</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">                                    
                                                            <div class="form-group">
                                                                <label for="firstname">Unidad</label>
                                                                <input type="number" class="form-control" id="firstname" placeholder="">
                                                            </div>                                    
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">Modelo</label>
                                                                <input type="number" class="form-control" id="firstname" placeholder="">
                                                            </div> 
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    <div class="row">
                                                        <div class="col-md-6">                                    
                                                            <div class="form-group">
                                                                <label for="firstname">Marca</label>
                                                                <input type="text" class="form-control" id="firstname" placeholder="">
                                                            </div>                                    
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">Motor</label>
                                                                <input type="number" class="form-control" id="firstname" placeholder="">
                                                            </div> 
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    <div class="row">
                                                        <div class="col-md-6">                                    
                                                            <div class="form-group">
                                                                <label for="firstname">Chasis</label>
                                                                <input type="number" class="form-control" id="firstname" placeholder="">
                                                            </div>                                    
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">Valor del vehículo</label>
                                                                <input type="number" class="form-control" id="firstname" placeholder="">
                                                            </div> 
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->                                                    
                                

                                
<!-- end row -->
                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fe-folder"></i> Documentos</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">                                    
                                                            <div class="form-group">
                                                                <label for="firstname">Factura</label>
                                                                <input type="file" class="form-control" id="firstname" placeholder="">
                                                            </div>                                    
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">Poliza</label>
                                                                <input type="file" class="form-control" id="firstname" placeholder="">
                                                            </div> 
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                
                                                    <div class="row">
                                                        <div class="col-md-6">                                    
                                                            <div class="form-group">
                                                                <label for="firstname">Tarjeta de circulación</label>
                                                                <input type="file" class="form-control" id="firstname" placeholder="">
                                                            </div>                                    
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">Placas</label>
                                                                <input type="file" class="form-control" id="firstname" placeholder="">
                                                            </div> 
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->

        
                                                                                
                                                    <!--<div class="text-right">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                    </div>-->
                                                </form>
                                            </div>
                                            <div class="col-8">
                                                <form>
                                                                     
                                                    
                                                    <!--<div class="text-right">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                    </div>-->
                                                </form>
                                            </div>                    
                                        </div>
                        
                                    </div>                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->                        
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header" style="background-color: #62B22F; color: white;">Vehículos</div>
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <form class="form-inline">
                                                    <div class="form-group mb-2">
                                                        <label for="inputPassword2" class="sr-only">Buscar</label>
                                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Buscar...">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <!--<button type="button" class="btn btn-success waves-effect waves-light mb-2 mr-1"><i class="mdi mdi-cog"></i></button>-->
                                                    <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-toggle="modal" data-target="#full-width-modal">Nueva Vehículo</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Unidad</th>
                                                        <th>Modelo</th>
                                                        <th>No. Placas</th>
                                                        <th>Motor</th>
                                                        <th>estatus</th>                                                        
                                                        <th style="width: 82px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion4.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">AJD293</a>
                                                        </td>
                                                        <td>2020</td>     
                                                        <td>KASDI3</td>  
                                                        <td>38491</td>                                                     
                                                        <td class="text-center"><span class="badge badge-success text-white">Activo</span></td>                                                         
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion3.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">KSK283</a>
                                                        </td>
                                                        <td>2020</td>     
                                                        <td>JD35KS2</td>  
                                                        <td>93583</td>                                                       
                                                        <td class="text-center"><span class="badge badge-success text-white">Activo</span></td>
                                                        
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion2.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">SIE293</a>
                                                        </td>
                                                        <td>2019</td>     
                                                        <td>M63FKA3</td>  
                                                        <td>395184</td>                                                         
                                                        <td class="text-center"><span class="badge badge-danger text-white">Inactivo</span></td>                                                        
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion.png') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">MSJ643</a>
                                                        </td>
                                                        <td>2020</td>     
                                                        <td>JDA283</td>  
                                                        <td>84192</td>  
                                                        <td class="text-center">
                                                            <span class="badge badge-warning text-white">En Mantenimiento</span>
                                                        </td>                                                        
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <ul class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header" style="background-color: #62B22F; color: white;">Informe de la unidad</div>
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img class="d-flex mr-3 rounded-circle avatar-lg" src="{{ asset('images/vehicles/camion4.jpeg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1">AJD293</h4>
                                                <!--<p class="text-muted">Branch manager</p>
                                                <p class="text-muted"><i class="mdi mdi-office-building"></i> Vine Corporation</p>
    
                                                <a href="javascript: void(0);" class="btn- btn-xs btn-info">Send Email</a>
                                                <a href="javascript: void(0);" class="btn- btn-xs btn-secondary">Call</a>
                                                <a href="javascript: void(0);" class="btn- btn-xs btn-secondary">Edit</a>-->
                                                                                    <!--<h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Información General</h5>-->

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Modelo:</h4>
                                                <p class="mb-3">2020</p>                                                
                                            </div>
                                            <div class="col-6">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">No. de Placas:</h4>
                                                <p class="mb-3">KASDI3</p>                                                
                                            </div>
                                            <div class="col-6">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Motor:</h4>
                                                <p class="mb-3">38491</p>                                                
                                            </div> 
                                            <div class="col-6">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Marca:</h4>
                                                <p class="mb-3">FORD</p>                                                
                                            </div> 
                                            <div class="col-6">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Chasis:</h4>
                                                <p class="mb-3">31DKSX93N3</p>                                                
                                            </div>                                                            
                                            <div class="col-6">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Factura</h4>
                                                <p class="mb-0">CTR39298193</p>                                                
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-3">Archivos</h5>

                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                PDF
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-0">
                                                        <a href="javascript:void(0);" class="text-muted font-weight-medium">Factura</a>
                                                        <p class="mb-0">2.3 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                DOC
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-0">
                                                        <a href="javascript:void(0);" class="text-muted font-weight-medium">Tarjeta de circulación</a>
                                                        <p class="mb-0">3.25 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class="card mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                                PNG
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col pl-0">
                                                        <a href="javascript:void(0);" class="text-muted font-weight-medium">Poliza</a>
                                                        <p class="mb-0">7.05 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                       
                                    </div>    




                                </div> <!-- end card-box-->
                            </div>
                        </div>  

@endsection