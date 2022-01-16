@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lógistica</a></li>
                    <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Departamentos</a></li>-->
                    <li class="breadcrumb-item active">Rutas</li>
                </ol>
            </div>
            <h4 class="page-title">Rutas</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
<!--  Modal content for the Large example -->
<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Nueva Ruta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="form-group mb-3">
                        <label for="simpleinput">Unidad</label>
                        <input type="text" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Ruta</label>
                        <input type="text" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Horario</label>
                        <input type="text" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Fecha</label>
                        <input type="date" id="simpleinput" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Personal</label>
                        <input type="text" id="simpleinput" class="form-control">
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
            Rutas
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="javascript:void(0);" class="btn btn-danger mb-2" data-toggle="modal" data-target="#bs-example-modal-lg"><i class="mdi mdi-plus-circle mr-2"></i> Nueva ruta</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-right">
                            <!--<button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog"></i></button>-->
                            <button type="button" class="btn btn-light mb-2 mr-1">Importar</button>
                            <button type="button" class="btn btn-light mb-2">Exportar</button>
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-nowrap table-centered m-0" >
                        <thead>
                            <tr>                                                        
                                <th>Horario</th>
                                <th>Unidad</th>
                                <th>Ruta</th>
                                <!--<th style="width: 10%;">Colonia</th>-->
                                <th style="width: 2%;">L</th>
                                <th style="width: 2%;">L</th>
                                <th style="width: 2%;">MA</th>
                                <th style="width: 2%;">MA</th>
                                <th style="width: 2%;">MI</th>
                                <th style="width: 2%;">MI</th>
                                <th style="width: 2%;">J</th>
                                <th style="width: 2%;">J</th>
                                <th style="width: 2%;">V</th>
                                <th style="width: 2%;">V</th>
                                <th style="width: 2%;">S</th>
                                <th style="width: 2%;">S</th>
                                <th style="width: 2%;">D</th>
                                <th style="width: 2%;">D</th>
                                <th style="width: 75px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>7:00 - 15:00</td>
                                <td>5</td>
                                <td>R1</td>
                                <!--<td style="width: 10%;">Justo Sierra y Morelos</td>-->
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>                    
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7:00 - 15:00</td>
                                <td>6</td>
                                <td>R2</td>
                                <!-- <td style="width: 10%;">Santa Margarita, Perez Martinez, Caleta, Electricistas</td>-->
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-success"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>                    
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7:00 - 15:00</td>
                                <td>12</td>
                                <td>R2</td>
                                <!--<td style="width: 10%;">Playa Norte, Miami, Caballito de Mar, Flamboyanes, Revolución, Burocratas, playon y ave castellot</td>-->
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>                    
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>  
                            <tr>
                                <td>7:00 - 15:00</td>
                                <td>12</td>
                                <td>R2</td>
                                <!--<td style="width: 10%;">Playa Norte, Miami, Caballito de Mar, Flamboyanes, Revolución, Burocratas, playon y ave castellot</td>-->
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-danger"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>                    
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>                             
                            <tr>
                                <td>15:00 - 23:00</td>
                                <td>5</td>
                                <td>R1</td>
                                <!--<td style="width: 10%;">Playa Norte, Miami, Caballito de Mar, Flamboyanes, Revolución, Burocratas, playon y ave castellot</td>-->
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-primary"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-primary"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-primary"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>                    
                                <td>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr> 
                            <tr>
                                <td>15:00 - 23:00</td>
                                <td>12</td>
                                <td>R2</td>
                                <!--<td style="width: 10%;">Playa Norte, Miami, Caballito de Mar, Flamboyanes, Revolución, Burocratas, playon y ave castellot</td>-->
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-primary"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-primary"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"><i class="mdi mdi-checkbox-blank-circle text-primary"></i></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>
                                <td style="width: 5%;"></td>                    
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
            <div class="card-header" style="background-color: #62B22F; color: white;"> Equipos Utilizados</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th colspan="2">Personal de recolección nocturna 1º turno</th>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad</th>
                            <th scope="row">Puesto</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>2</th>
                            <td>Supervidores</td>
                        </tr>
                        <tr>
                            <th>20</th>
                            <td>Auxiliares de recolección</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Operadores</td>
                        </tr>                                                                                                
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th colspan="2">Personal de recolección 2º turno</th>
                        </tr>
                        <tr>
                            <th scope="row">Cantidad</th>
                            <th scope="row">Puesto</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>2</th>
                            <td>Supervidores</td>
                        </tr>
                        <tr>
                            <th>20</th>
                            <td>Auxiliares de recolección</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Operadores</td>
                        </tr>                                                                                                
                        </tbody>
                    </table>
                </div>                                        
            </div>
        </div>
    </div>
</div>
@endsection