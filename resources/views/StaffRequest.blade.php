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
                    <li class="breadcrumb-item active">Solicitud de personal</li>
                </ol>
            </div>
            <h4 class="page-title">Solicitud de personal</h4>
        </div>
    </div>
</div>    
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Solicitud de personal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <embed src="{{ asset('files/Solicitud de personal.pdf') }}" width="100%" height="1000px">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->  
<!-- end page title --> 
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                Datos Generales del puesto
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Empresa</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Nombre del cargo vacante</label>
                        <input type="text" class="form-control">
                    </div>  
                    <div class="form-group mb-3">
                        <label for="simpleinput">Area del cargo vacante</label>
                        <input type="text" class="form-control">
                    </div>       
                    <div class="form-group mb-3">
                        <label for="simpleinput">Posición a la reporta</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Posiciones a las que supervisa</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Puesto nuevo o reemplazo</label>
                        <input type="text" class="form-control">
                    </div>  
                    <div class="form-group mb-3">
                        <label for="simpleinput">Justificación de la solicitud</label>
                        <input type="text" class="form-control">
                    </div>                                                                                                                                                                                                                                                                  
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                Perfil del puesto (Edad, experiencia, sexo) y funciones
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Edad (rango de preferencia: no será difundido)</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Género (de preferencia: no será difundido)</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Objetivo del puesto</label>
                        <textarea class="form-control"  rows="5"></textarea>
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Funciones</label>
                        <textarea class="form-control"  rows="5"></textarea>
                    </div>                                                                                        
                </form>
            </div>
        </div>                                

    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                Requerimiento del puesto
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Formación</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Instrucción Formal</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Idioma extranjero</label>
                        <input type="text" class="form-control">
                    </div>  
                    <div class="form-group mb-3">
                        <label for="simpleinput">Experiencia</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Movilidad</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Disponibilidad</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Conocimientos especificos</label>
                        <input type="text" class="form-control">
                    </div>  
                    <div class="form-group mb-3">
                        <label for="simpleinput">Especialización</label>
                        <input type="text" class="form-control">
                    </div>    
                    <div class="form-group mb-3">
                        <label for="simpleinput">Maestría en</label>
                        <input type="text" class="form-control">
                    </div> 
                    <div class="form-group mb-3">
                        <label for="simpleinput">Idioma</label>
                        <input type="text" class="form-control">
                    </div>  
                    <div class="form-group mb-3">
                        <h4 class="header-title">MS Word</h4>                                                                                                                                           
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
                            <label for="inlineCheckbox2"> Básica</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                            <label for="inlineCheckbox2"> Intermedio</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
                            <label for="inlineCheckbox2"> Avanzado </label>
                        </div>                                                 
                    </div>
                    <div class="form-group mb-3">
                        <h4 class="header-title">MS Excel</h4>                                                                                        
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                            <label for="inlineCheckbox2"> Básica</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1">
                            <label for="inlineCheckbox2"> Intermedio</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
                            <label for="inlineCheckbox2"> Avanzado </label>
                        </div>                                                 
                    </div>
                    <div class="form-group mb-3">

                        <h4 class="header-title">MS Power Point</h4>                                                                                           
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
                            <label for="inlineCheckbox2"> Básica</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1">
                            <label for="inlineCheckbox2"> Intermedio</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                            <label for="inlineCheckbox2"> Avanzado </label>
                        </div>                                                  
                    </div>
                    <div class="form-group mb-3">
                        <h4 class="header-title">Correo Electrónico</h4>                                             
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
                            <label for="inlineCheckbox2"> Básica</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1">
                            <label for="inlineCheckbox2"> Intermedio</label>
                        </div>
                        <div class="checkbox checkbox-success form-check-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked>
                            <label for="inlineCheckbox2"> Avanzado </label>
                        </div>                                                 
                    </div>

                    
                                                                        

                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-12">
                            <button type="button" data-toggle="modal" data-target="#bs-example-modal-lg2" class="btn btn-success waves-effect waves-light">Guardar</button>
                        </div>
                    </div>  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">
                Condiciones propuestas (Obligatorias llenar)
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Plazo del contrato</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Periodo de prueba</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Local del centro de trabajo</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Dias y horas de trabajo</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Remuneración Básica</label>
                        <input type="text" class="form-control">
                    </div>  
                    <div class="form-group mb-3">
                        <label for="simpleinput">Remuneraciones Complementarias</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">Asignación de movilidad</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="simpleinput">EPS</label>
                        <input type="text" class="form-control">
                    </div>  
                    <div class="form-group mb-3">
                        <label for="simpleinput">Otros Beneficios</label>
                        <input type="text" class="form-control">
                    </div>  

                </form>
            </div>
        </div>                                

    </div>   
                        
</div>
@endsection   
