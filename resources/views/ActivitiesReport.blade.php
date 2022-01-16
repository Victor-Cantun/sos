@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Relleno Sanitario</a></li>
                    <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Departamentos</a></li>-->
                    <li class="breadcrumb-item active">Reporte de Actividades de Maquinaria</li>
                </ol>
            </div>
            <h4 class="page-title">Reporte de Actividades de Maquinaria</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Reporte de Actividades</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <embed src="{{ asset('files/FORMATO DE MAQUINARIA.pdf') }}" width="100%" height="1000px">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->   
<!--  Modal content for the Large example -->
<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Nueva Actividad</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-1" type="checkbox" checked>
                                <label for="checkbox-1">
                                    Carga y acarreo de piedra para pozos
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-2" type="checkbox" checked>
                                <label for="checkbox-2">
                                    Acarreo de bolsas de basura
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-3" type="checkbox" checked>
                                <label for="checkbox-3">
                                    Limpieza de caminos
                                </label>
                            </div>  
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-4" type="checkbox" checked>
                                <label for="checkbox-4">
                                    Mantenimiento de caminos  y rampas
                                </label>
                            </div> 
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-5" type="checkbox" checked>
                                <label for="checkbox-5">
                                    Carga de material a volquete
                                </label>
                            </div>  
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-6" type="checkbox" checked>
                                <label for="checkbox-6">
                                    Carga y acarreo de combustible
                                </label>
                            </div> 
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-7" type="checkbox" checked>
                                <label for="checkbox-7">
                                    Otras actividades
                                </label>
                            </div>                                                                                                                                                                                                                                                                                    
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Inicial</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Final</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="simpleinput">Totales</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>  
                            <div class="form-group mb-3">
                                <label for="simpleinput">Cantidad m3</label>
                                <input type="text" id="simpleinput" class="form-control">
                            </div>                                                                                     
                        </div>                                             
                    </div>   
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>                                                                                                                                                                                                                                                           
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
            Actividades de Maquinaria
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="javascript:void(0);" class="btn btn-danger mb-2" data-toggle="modal" data-target="#bs-example-modal-lg"><i class="mdi mdi-plus-circle mr-2"></i> Nueva Actividad</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-right">
                            <!--<button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog"></i></button>-->
                            <button type="button" class="btn btn-light mb-2 mr-1">Importar</button>
                            <button type="button" class="btn btn-light mb-2" data-toggle="modal" data-target="#modal-file">Exportar</button>
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-nowrap table-centered m-0" >
                        <thead>
                            <tr>
                                <td colspan="8">Actividad</td>
                                <td colspan="5">Horometro</td>
                            </tr>                           
                            <tr>                                                        
                                <th>No</th>
                                <th style="width: 10px;">Carga y acarreo de piedra para pozos</th>
                                <th style="width: 10px;">Acarreo de bolsas de basura</th>
                                <th style="width: 10px;">Limpieza de caminos</th>
                                <th style="width: 10px;">Mantenimiento de caminos  y rampas</th>
                                <th style="width: 10px;">Carga de material a volquete</th>
                                <th style="width: 10px;">Carga y acarreo de combustible</th>
                                <th style="width: 10px;">Otras actividades</th>
                                <th style="width: 5%;">Inicial</th>
                                <th style="width: 5%;">Final</th>
                                <th style="width: 5%;">Totales</th>
                                <th style="width: 5%;">Cantidad en m3</th>
                                <th style="width: 75px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>                                
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>                 
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>                                
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>                 
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>                                
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>                 
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>                                                                                                                                                                                                                                                                       
                            <tr>
                                <td>4</td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>                                
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>                 
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>                                                                                                                                                                                      

                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
    <div class="col-4">
        <div class="card" >
            <div class="card-header" style="background-color: #62B22F; color: white;"> Consumo por turnos</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                        </thead>
                        <tbody>
                        <tr>
                            <th>Aceite del motor</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Aceite hidraúlico</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Aceite de transmisión</th>
                            <td></td>
                        </tr> 
                        <tr>
                            <th>Refrigerante</th>
                            <td></td>
                        </tr> 
                        <tr>
                            <th>Diesel</th>
                            <td></td>
                        </tr>                                                                                                                                                
                        </tbody>
                    </table>
                </div>                                       
            </div>
        </div>
    </div>
</div>
@endsection