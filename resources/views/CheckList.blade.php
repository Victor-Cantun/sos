@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Relleno Sanitario</a></li>
                    <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Formatos</a></li>-->
                    <li class="breadcrumb-item active">Lista de Verificación de Maquinaria</li>
                </ol>
            </div>
            <h4 class="page-title">Lista de Verificación de Manquinaria</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Check List de Maquinaria</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <embed src="{{ asset('files/check list maquinas.pdf') }}" width="100%" height="1000px">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->    
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">FECHA:</label>
                            <input type="date" class="form-control">
                        </div>                                                
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">HOROMETRO:</label>
                            <input type="text" class="form-control">
                        </div>                                                  
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">OPERADOR:</label>
                            <input type="text" class="form-control">
                        </div>                                                  
                    </div>                    
                </div>
            </div>
        </div>                                
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                SEGURIDAD
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-10" type="checkbox" checked>
                                <label for="checkbox-10">
                                    Estacione la maquina en un lugar seguro y accione el freno de estacionamiento
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-11" type="checkbox" checked>
                                <label for="checkbox-11">
                                    Revise las luces en general
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Funcionamiento  de la alarma de reversa
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-13" type="checkbox" checked>
                                <label for="checkbox-13">
                                    Claxon y Torreta
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-14" type="checkbox" checked>
                                <label for="checkbox-14">
                                    Sistema de Freno
                                </label>
                            </div>   
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Encienda el equipo y espere 5 min. Para calentamiento
                                </label>
                            </div>                                                                                                                                                                        
                        </div>                                             
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                SEGURIDAD
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-10" type="checkbox" checked>
                                <label for="checkbox-10">
                                    Indicador de niveles de Diesel
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-11" type="checkbox" checked>
                                <label for="checkbox-11">
                                    Indicador de Presión del motor
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    indicador de presión hidraúlica
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-13" type="checkbox" checked>
                                <label for="checkbox-13">
                                    indicador de presión del hidraúlico
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-14" type="checkbox" checked>
                                <label for="checkbox-14">
                                    Indicador de Temperatura del motor
                                </label>
                            </div>   
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Indicador de temperatura de la transmisión
                                </label>
                            </div> 
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Indicador de Carga de Batería
                                </label>
                            </div>  
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Indicador de Frenos
                                </label>
                            </div>  
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Purgar Filtro recuperador de agua del motor
                                </label>
                            </div>  
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Purgar tanque de combustible
                                </label>
                            </div> 
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Limpieza de Módulos de enfriamiento
                                </label>
                            </div>                                                                                                                                                                                                                                                                                                                    
                        </div>                                             
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                NIVELES
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-10" type="checkbox" checked>
                                <label for="checkbox-10">
                                    Aceite de motor
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-11" type="checkbox" checked>
                                <label for="checkbox-11">
                                    Aceite de transmisión
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Aceite Hidraúlico
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-13" type="checkbox" checked>
                                <label for="checkbox-13">
                                    Refrigerante
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-14" type="checkbox" checked>
                                <label for="checkbox-14">
                                    Líquido de Frenos
                                </label>
                            </div>   
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-15" type="checkbox" checked>
                                <label for="checkbox-15">
                                    Deposito de Diesel
                                </label>
                            </div>                                                                                                                                                                        
                        </div>                                             
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                
    </div>    
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                CARRILERIA
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-10" type="checkbox" checked>
                                <label for="checkbox-10">
                                    Limpieza de mandos finales
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-11" type="checkbox" checked>
                                <label for="checkbox-11">
                                    Limpieza de cadenas
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Limpieza de Ruedas Guia y Rodillos
                                </label>
                            </div>                                                                                                                                                                      
                        </div>                                             
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                
    </div> 
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
               ORDEN Y LIMIPEZA
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-10" type="checkbox" checked>
                                <label for="checkbox-10">
                                    Cabina de operación
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-11" type="checkbox" checked>
                                <label for="checkbox-11">
                                    Controles de mando
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Tablero de operación
                                </label>
                            </div>                                                                                                                                                                      
                        </div>                                             
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                
    </div>    
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
               CONSUMO POR TURNOS
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-10" type="checkbox" checked>
                                <label for="checkbox-10">
                                    Aceite de motor
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-11" type="checkbox" checked>
                                <label for="checkbox-11">
                                    Aceite Hidraúlico
                                </label>
                            </div>
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Aceite de transmisión
                                </label>
                            </div>  
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Refrigerante
                                </label>
                            </div> 
                            <div class="checkbox checkbox-success checkbox-circle mb-2">
                                <input id="checkbox-12" type="checkbox" checked>
                                <label for="checkbox-12">
                                    Diesel
                                </label>
                            </div>                                                                                                                                                                                                                             
                        </div>                                             
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                
    </div> 
    <div class="col-12">
        <button type="submit" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-file">Guardar</button>       
    </div>
    
</div> 
@endsection
