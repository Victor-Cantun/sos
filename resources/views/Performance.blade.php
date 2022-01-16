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
                    <li class="breadcrumb-item active">Rendimiento</li>
                </ol>
            </div>
            <h4 class="page-title">Rendimiento</h4>
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
            Rendimiento
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="javascript:void(0);" class="btn btn-danger mb-2" data-toggle="modal" data-target="#bs-example-modal-lg"><i class="mdi mdi-plus-circle mr-2"></i> Nueva registo</a>
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
                    <table class="table mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            
                            <th>Horas</th>
                            <th>Fecha</th>
                            <th>Kilometraje Inicial</th>
                            <th>Carga de combustible</th>
                            <th>Delta horas</th>
                            <th>Delta kilometros</th>
                            <th>Rendimiento</th>
                            <th>Costo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>14,453</td>
                            <td>01/11/21</td>
                            <td></td>
                            <td>121506</td>
                            <td>19</td>
                            <td>259</td>
                            <td>640</td>
                            <td>273,267</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>14,453</td>
                            <td>01/11/21</td>
                            <td>180</td>
                            <td>121506</td>
                            <td>19</td>
                            <td>179</td>
                            <td>640</td>
                            <td>273,267</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>14,453</td>
                            <td>01/11/21</td>
                            <td></td>
                            <td>121506</td>
                            <td>19</td>
                            <td>133</td>
                            <td>640</td>
                            <td>273,267</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>14,453</td>
                            <td>01/11/21</td>
                            <td></td>
                            <td>121506</td>
                            <td>19</td>
                            <td>191</td>
                            <td>640</td>
                            <td>273,267</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>14,453</td>
                            <td>01/11/21</td>
                            <td></td>
                            <td>121506</td>
                            <td>19</td>
                            <td>295</td>
                            <td>640</td>
                            <td>273,267</td>
                        </tr>                                                
                        </tbody>
                    </table>
                </div>
            </br>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                        <tr>
                            <th>#</th>                            
                            <th>Cada Hrs/Km</th>
                            <th>Ultimo servicio</th>
                            <th>Hora actual</th>
                            <th>Horas restantes</th>
                            <th>Proximo servicio</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>500.00</td>
                            <td>14,360</td>
                            <td>14,429</td>
                            <td>431.00</td>
                            <td>14,860.00</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>500.00</td>
                            <td>14,360</td>
                            <td>14,429</td>
                            <td>431.00</td>
                            <td>14,860.00</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>500.00</td>
                            <td>14,360</td>
                            <td>14,429</td>
                            <td>431.00</td>
                            <td>14,860.00</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>500.00</td>
                            <td>14,360</td>
                            <td>14,429</td>
                            <td>431.00</td>
                            <td>14,860.00</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>500.00</td>
                            <td>14,360</td>
                            <td>14,429</td>
                            <td>431.00</td>
                            <td>14,860.00</td>
                        </tr>                                                
                        </tbody>
                    </table>
                </div>                
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
    <div class="col-4">
        <div class="card" >
            <div class="card-header" style="background-color: #62B22F; color: white;"> COSTOS</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <th scope="row" >Combustible Litros</th>
                                <td scope="row">2518.05 L</td>
                            </tr>
                            <tr>
                                <th scope="row">Rendimiento Operativo</th>
                                <td>0.06 Hrs/L</td>
                            </tr>
                            <tr>
                                <th scope="row">Costo Operativo</th>
                                <td>1.45 Hrs/$</td>
                            </tr>
                            <tr>
                                <th scope="row">Costo por turno</th>
                                <td>0.72 Hrs/$</td>
                            </tr>
                            <tr>
                                <th scope="row">Costo por unidad</th>
                                <td>0.09 Hrs/$</td>
                            </tr>  
                            <tr>
                                <th scope="row">Costo Diesel * Personal</th>
                                <td scope="row">$543,948.84</td>
                            </tr> 
                            <tr>
                                <th scope="row">Costo Operativo * Personal global</th>
                                <td>13.93 Hrs/$</td>
                            </tr> 
                            <tr>
                                <th scope="row">Costo Operativo * Personal turno</th>
                                <td>6.97 Hrs/$</td>
                            </tr> 
                            <tr>
                                <th scope="row">Costo Operativo * Personal unidad</th>
                                <td>0.87 Hrs/$</td>
                            </tr> 
                            <tr>
                                <th scope="row">Horas</th>
                                <td scope="row">39,045.00</td>
                            </tr>  
                            <tr>
                                <th scope="row">Nomina diurno</th>
                                <td>$243,672.00</td>
                            </tr> 
                            <tr>
                                <th scope="row">Nomina vespertina</th>
                                <td>$243,672.00</td>
                            </tr>  
                            <tr>
                                <th scope="row">Total</th>
                                <td>$487,344.00</td>
                            </tr>                                                                                                                                                                                                                                                                                    
                        </tbody>
                    </table>
                </div>                                       
            </div>
        </div>
    </div>
</div>
@endsection