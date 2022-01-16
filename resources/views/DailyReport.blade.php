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
                                            <li class="breadcrumb-item active">Reporte diario</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Reporte diario</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Reporte diario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <embed src="{{ asset('files/reporte_diario.pdf') }}" width="100%" height="1000px">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->                    
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header" style="background-color: #62B22F; color: white;">Reporte diario</div>
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
                                                    <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-toggle="modal" data-target="#bs-example-modal-lg">Nuevo Reporte</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                                        <!--  Modal content for the Large example -->
                                        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Reporte diario de operador</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-row"> 
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Nombre del operador</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Fecha</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Hora inicial</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Hora final</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Nombre del operador</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">km inicial</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>   
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">km final</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">No. Camion</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Zona</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div> 
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">No. de ruta</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Toneladas</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Salida de Base</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>   
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Inicio de ruta</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div> 
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">1a. Vuelta al tiradero</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div> 
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Regreso a ruta</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">2da. vuelta al tiradero</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Regreso a ruta</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">3a. vuelta altiradero</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div> 
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Termino de ruta</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Llegada a base</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>   
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Observaciones</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Mecánico que recibió</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div> 
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Folio o M.</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div> 
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Cliente</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>  
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Hora de recolección</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>    
                                                            <div class="form-group col-md-3 mb-4">
                                                                <label for="inputEmail4">Cant. de recolección</label>
                                                                <input type="email" class="form-control rounded" id="" placeholder="">
                                                            </div>   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->                                        
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No. Camion</th>
                                                        <th>Zona</th>
                                                        <th>No. De ruta</th>
                                                        <th>PDF</th>
                                                        <th style="width: 82px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion3.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">AJD293</a>
                                                        </td>
                                                        <td>
                                                            2020
                                                        </td>                                                        
                                                        <td class="text-center"><span class="badge badge-success text-white">Correcto</span></td>  
                                                        <td><a  href="" data-toggle="modal" data-target="#bs-example-modal-lg2"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                                                                              
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion4.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">KSK283</a>
                                                        </td>
                                                        <td>
                                                            2021
                                                        </td>                                                        
                                                        <td class="text-center"><span class="badge badge-success text-white">Correcto</span></td>
                                                        <td><a  href="" data-toggle="modal" data-target="#bs-example-modal-lg2"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                                                                               
                                                        <td>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion2.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">SIE293.</a>
                                                        </td>
                                                        <td>
                                                            2019
                                                        </td>                                                        
                                                        <td class="text-center"><span class="badge badge-danger text-white">Revisar</span></td>
                                                        <td><a href="DailyReportPDF.html"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                                                                              
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
                                                        <td>
                                                            2020
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge badge-warning text-white">Pendiente</span>
                                                        </td>
                                                        <td><a href="DailyReportPDF.html"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                      
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
                                    <div class="card-header" style="background-color: #62B22F; color: white;">Informe general</div>
                                    <div class="card-body">
                                        <div class="media mb-3">
                                            <img class="d-flex mr-3 rounded-circle avatar-lg" src="{{ asset('images/vehicles/camion3.jpeg') }}" alt="Generic placeholder image">
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
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase">Salida de base:</h4>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Inicio de ruta:</h4>
                                                 
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">1ª Vuelta al tiradero:</h4>
                                             
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Ingreso de la ruta:</h4>
                                             
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">2ª Vuelta al tiradero:</h4>
                                             
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Regreso de la ruta:</h4>
                                             
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">3ª Vuelta al tiradero:</h4>
                                             
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Termino de la ruta:</h4>
                                             
                                            </div>                                            
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Llegada a base:</h4>
                                             
                                            </div>  
                                        </div>
                                    </div>    




                                </div> <!-- end card-box-->
                            </div>
                        </div>  

@endsection