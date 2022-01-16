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
                                            <li class="breadcrumb-item active">Revisión de la unidad</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Revisión de la unidad</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Revisión de la unidad</h4>
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
                                        <h4 class="modal-title" id="fullWidthModalLabel">Revisión de la unidad con el motor</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Revisión de la unidad con el motor
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="form-group mb-3">
                                                                        <label for="simpleinput">Unidad</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-group mb-3">
                                                                        <label for="simpleinput">Operador</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>                                                     
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-group mb-3">
                                                                        <label for="simpleinput">Fecha</label>
                                                                        <input type="date" class="form-control">
                                                                    </div>                                                     
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-group mb-3">
                                                                        <label for="simpleinput">Horometro</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>                                                     
                                                                </div>
                                                                <div class="col-3">
                                                                    <div class="form-group mb-3">
                                                                        <label for="simpleinput">Ruta</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>                                                      
                                                                </div>
                                                            </div>                                                                                                                                                                                                                                                                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Nivel de fluidos
                                                    </div>
                                                    <div class="card-body">
                                                        
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" value="option1" checked>
                                                                <label for="inlineCheckbox2"> AC. de motor</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" value="option2" checked>
                                                                <label for="inlineCheckbox2"> AC. de transmisión</label>
                                                            </div>   
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" value="option3" checked >
                                                                <label for="inlineCheckbox2"> AC. hidráulico</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" value="option4" checked>
                                                                <label for="inlineCheckbox2"> AC. de dirección</label>
                                                            </div> 
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox"  value="option5" checked>
                                                                <label for="inlineCheckbox2"> Anticongelante</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                      
                                                        
                                                    </div>
                                                </div>
                                            </div>   
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Llantas
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Tuercas, Birlos, Palomas</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Presión de llantas</label>
                                                            </div>   
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Válvulas</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2">Estado de llantas</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                      
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Documentación
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Tarj, circulación /seguro</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Licencia vigente</label>
                                                            </div>   
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Placas (ámbar)</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                      
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Sistema de frenos
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Purgado de tanques</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> No fugas de aire</label>
                                                            </div>   
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Prueba de frenado</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                      
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Estado físico unidad
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2">Golpes en la carrocería</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Logotipos</label>
                                                            </div>   
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                                <label for="inlineCheckbox2"> Unidad limpia</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                      
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Sistema eléctrico
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Luces (Trasera-Delantera)</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Alarma de reversa</label>
                                                            </div>   
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2"> Luces direccionales</label>
                                                            </div> 
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2"> Torre ámbar</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Luces de emergencia</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Claxon</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Limipabrisas</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Equipamiento
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Extintor</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                                <label for="inlineCheckbox2">Cinturon(es) de seguridad</label>
                                                            </div>   
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2"> Guarda de seguridad</label>
                                                            </div> 
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Reflejante</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Cornetas/Radio</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                                <label for="inlineCheckbox2">Espejos laterales</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: #62B22F; color: white;">
                                                        Sistema hidráulico
                                                    </div>
                                                    <div class="card-body">
                                                        <form>
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                                <label for="inlineCheckbox2">Fugas sistemas. Hidraulico</label>
                                                            </div>  
                                                            <div class="checkbox checkbox-success">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                                <label for="inlineCheckbox2">Ciclo de funcionamiento</label>
                                                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                                                        </form>
                                                    </div>
                                                </div>
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
                                    <div class="card-header" style="background-color: #62B22F; color: white;">Revisiones</div>
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <form class="form-inline">
                                                    <div class="form-group mb-2">
                                                        <label for="inputPassword2" class="sr-only">Buscar</label>
                                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <!--<button type="button" class="btn btn-success waves-effect waves-light mb-2 mr-1"><i class="mdi mdi-cog"></i></button>-->
                                                    <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-toggle="modal" data-target="#full-width-modal">Nueva Revisión</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Unidad</th>
                                                        <th>Modelo</th>
                                                        <th>estatus</th>
                                                        <th>PDF</th>
                                                        <th style="width: 82px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('images/vehicles/camion4.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">AJD293</a>
                                                        </td>
                                                        <td>
                                                            2020
                                                        </td>                                                        
                                                        <td class="text-center"><span class="badge badge-success text-white">Correcto</span></td>  
                                                        <td><a   href="" data-toggle="modal" data-target="#bs-example-modal-lg2"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                                                                              
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
                                                        <td>
                                                            2021
                                                        </td>                                                        
                                                        <td class="text-center"><span class="badge badge-success text-white">Correcto</span></td>
                                                        <td><a   href="" data-toggle="modal" data-target="#bs-example-modal-lg2"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                                                                               
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
                                                        <td><a href="UnitReviewPDF.html"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                                                                              
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
                                                        <td><a href="UnitReviewPDF.html"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>                                      
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
                                    <div class="card-header" style="background-color: #62B22F; color: white;">Informe de la revisión</div>
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
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase">Nivel de fluidos:</h4>
                                                <p class="mb-3">
                                                    <div class="checkbox checkbox-success">
                                                        <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                                        <label for="inlineCheckbox2"> AC. de motor</label>
                                                    </div>  
                                                    <div class="checkbox checkbox-success">
                                                        <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                        <label for="inlineCheckbox2"> AC. de transmisión</label>
                                                    </div>   
                                                    <div class="checkbox checkbox-success">
                                                        <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                        <label for="inlineCheckbox2"> AC. hidráulico</label>
                                                    </div>  
                                                    <div class="checkbox checkbox-success">
                                                        <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                        <label for="inlineCheckbox2"> AC. de dirección</label>
                                                    </div> 
                                                    <div class="checkbox checkbox-success">
                                                        <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                        <label for="inlineCheckbox2"> Anticongelante</label>
                                                    </div> 
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Llantas:</h4>
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                    <label for="inlineCheckbox2"> Tuercas, Birlos, Palomas</label>
                                                </div>  
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                    <label for="inlineCheckbox2"> Presión de llantas</label>
                                                </div>   
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option1"checked >
                                                    <label for="inlineCheckbox2"> Válvulas</label>
                                                </div>  
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                                    <label for="inlineCheckbox2">Estado de llantas</label>
                                                </div>                                                  
                                            </div>
                                            <div class="col-12">
                                                <h4 class="font-13 text-muted text-uppercase mb-1">Documentación :</h4>
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                    <label for="inlineCheckbox2"> Tarj, circulación /seguro</label>
                                                </div>  
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                    <label for="inlineCheckbox2"> Licencia vigente</label>
                                                </div>   
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                    <label for="inlineCheckbox2"> Placas (ámbar)</label>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>    




                                </div> <!-- end card-box-->
                            </div>
                        </div>  

@endsection