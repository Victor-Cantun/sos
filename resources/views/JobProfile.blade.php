@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Recursos Humanos</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Formatos</a></li>
                    <li class="breadcrumb-item active">Perfil de puesto</li>
                </ol>
            </div>
            <h4 class="page-title">Perfil de puesto</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Pefil del puesto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <embed src="{{ asset('files/Perfildepuesto.pdf') }}" width="100%" height="1000px">
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
                GENERALIDADES
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">NOMBRE DEL PUESTO</label>
                            <input type="text" class="form-control">
                        </div>                                                
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">DIRECCIÓN</label>
                            <input type="text" class="form-control">
                        </div>                                                  
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">ÁREA</label>
                            <input type="text" class="form-control">
                        </div>                                                 
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">PUESTO AL QUE REPORTA</label>
                            <input type="text" class="form-control">
                        </div>                                                 
                    </div>
                    <div class="col-4">
                        <div class="form-group mb-3">
                            <label for="simpleinput">PUESTO QUE LE REPORTAN</label>
                            <input type="text" class="form-control">
                        </div>                                                 
                    </div>
                    <div class="col-4"></div>
                </div>
                <form>




                                                                                                                                                                                                                                        
                </form>
            </div>
        </div>                                
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                OBJETIVO DEL PUESTO
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <!--<label for="simpleinput">NOMBRE DEL PUESTO</label>-->
                        <textarea type="text" rows="5" class="form-control"></textarea>
                    </div>                                                                                                                                                                                                                                                               
                </form>
            </div>
        </div>                                  
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                FUNCIONES Y RESPONABILIDADES
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <!--<label for="simpleinput">NOMBRE DEL PUESTO</label>-->
                        <textarea type="text" rows="5" class="form-control"></textarea>
                    </div>                                                                                                                                                                                                                                                               
                </form>
            </div>
        </div>                                 
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                COMUNICACIÓN DIRECTA
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">PUESTO</label>
                                <input type="text" class="form-control">
                            </div> 
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">ASUNTOS</label>
                                <input type="text" class="form-control">
                            </div> 
                        </div>
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                 
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                COMUNICACIÓN EXTERNA
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">ENTIDAD O DEPENDENCIA</label>
                                <input type="text" class="form-control">
                            </div> 
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="simpleinput">ASUNTO</label>
                                <input type="text" class="form-control">
                            </div> 
                        </div>
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                  
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                COMUNICACIÓN EXTERNA
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">EDAD</label>
                                <input type="text" class="form-control">
                            </div> 
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">ESTADO</label>
                                <input type="text" class="form-control">
                            </div> 
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">SEXO</label>
                                <input type="text" class="form-control">
                            </div> 
                        </div>                                                
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                 
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                EDUCACIÓN Y EXPERIENCIA LABORAL
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-4">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Primaria</label>
                            </div> 
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Secundaria</label>
                            </div> 
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Preparatoria o equivalente</label>
                            </div> 
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Escuela Técnica</label>
                            </div> 
                        </div>
                        <div class="col-4">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Pasante Universitario y/o carrera trunca</label>
                            </div> 
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Título Universitario Equivalente</label>
                            </div> 
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Especialidad</label>
                            </div> 
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Postgrado</label>
                            </div> 
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Experiencia mínima requerida en el puesto o área</label>
                                <textarea type="text" rows="5" class="form-control"></textarea>
                            </div> 
                        </div>                                                
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                CONOCIMIENTOS
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Conocimientos de Nivel Medio Superior</label>
                            </div> 
                        </div>
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Relaciones públicas y humanas</label>
                            </div> 
                        </div>
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Computación</label>
                            </div> 
                        </div> 
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Menejo de vehiculos</label>
                            </div> 
                        </div>                                                                                                 
                    </div>                                                                                                                                                                                                                                                              
                </form>
            </div>
        </div>                                  
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                HABILIDADES
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Expresión oral y escrita</label>
                            </div> 
                        </div>
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Comunicación y Negociación</label>
                            </div> 
                        </div>
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Liderazgo</label>
                            </div> 
                        </div> 
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Trabajo bajo presión</label>
                            </div> 
                        </div>   
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Manejo de conflicto</label>
                            </div> 
                        </div> 
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Análisis y Toma de decisiones</label>
                            </div> 
                        </div> 
                        <div class="col-3">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked >
                                <label for="inlineCheckbox2">Condición Física</label>
                            </div> 
                        </div>                                                                                                                                                                                               
                    </div>  
                                                                                                                                                                                                                                
                </form>
            </div>
        </div>                                 
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                ACTITUDES Y APTITUDES
            </div>
            <div class="card-body">
                <H4>Indica las habilidades de acuerdo a la siguiente escala: indispensable(1), importantes(2), Benéfica pero no indispensable (3) ó No requerido para este puesto(4). </H4>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <h4 class="header-title">Juicio</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Planeación</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Organización</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Control</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>  
                            <div class="form-group mb-3">
                                <h4 class="header-title">Desarrollo Colaboradores</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>  
                            <div class="form-group mb-3">
                                <h4 class="header-title">Comunicación-oral</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Comuniación-escrita</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Habilidad para delegar</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>    
                            <div class="form-group mb-3">
                                <h4 class="header-title">Seguimiento de instrucciones</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>  
                            <div class="form-group mb-3">
                                <h4 class="header-title">Honestidad</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Adecuado control de impulsos</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Tolerancia</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <h4 class="header-title">Trabajo bajo presión</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Motivación intrinseca</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>  
                            <div class="form-group mb-3">
                                <h4 class="header-title">Iniciativa</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>
                            <div class="form-group mb-3">
                                <h4 class="header-title">Flexibidad</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Creatividad</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Cooperación</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Exactitud</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>  
                            <div class="form-group mb-3">
                                <h4 class="header-title">Valor o coraje para actuar</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Seguridad</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>  
                            <div class="form-group mb-3">
                                <h4 class="header-title">Trabajo en equipo</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Estabilidad Emocionale</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div> 
                            <div class="form-group mb-3">
                                <h4 class="header-title">Integridad</h4>                                                                                                                                           
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 1</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                                    <label for="inlineCheckbox2"> 2</label>
                                </div>
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 3 </label>
                                </div> 
                                <div class="checkbox checkbox-success form-check-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                    <label for="inlineCheckbox2"> 4 </label>
                                </div>                                                                                                 
                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
                        </div>
                    </div>

                    <br>  
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-12">
                            <button type="button" data-toggle="modal" data-target="#bs-example-modal-lg2" class="btn btn-success waves-effect waves-light">Guardar</button>
                        </div>
                    </div>                                                                                                                                                                                                                                                          
                </form>
            </div>
        </div>                                 
    </div>
</div> 
 
@endsection
