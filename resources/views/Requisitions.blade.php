@extends('layouts.app')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endsection
@section('content')
<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Compras</a></li>
                        <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Departamentos</a></li>-->
                        <li class="breadcrumb-item active">Requisiciones</li>
                    </ol>
                </div>
                <h4 class="page-title">Requisiciones</h4>
            </div>
        </div>
    </div>     
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Nueva Requisición</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <form>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 col-form-label">Folio</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="username" placeholder="Folio" value="CDO/293">
                                    </div>
                                </div>                                                
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 col-form-label">Departamento</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="username" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 col-form-label">Fecha para requerir material</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="username" placeholder="Fecha">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 col-form-label">Asunto</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="username" placeholder="Asunto">
                                    </div>
                                </div>   
                               
                                <table  class="table table-centered table-striped dt-responsive nowrap w-100" >
                                    <thead>
                                        <tr>
                                            <th>Partida</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Concepto</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>Overoles</td>
                                            <td><a href="#" class="ml-2"><i class="icon-pencil"></i></a> <a href="#" class="ml-2"><i class="icon-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>Botas</td>
                                            <td><a href="#" class="ml-2"><i class="icon-pencil"></i></a> <a href="#" class="ml-2"><i class="icon-trash"></i></a></td>
                                        </tr>                                                        
                                    </tbody>
                                </table>


                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Guardar</button>   <button type="submit" class="btn btn-outline-warning">Limpiar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--  Modal content for the Large example -->
    <div class="modal fade" id="bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Requisición</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">                                           
                        <div class="col-12">
                            <embed src="{{ asset('files/Requisicion.pdf') }}" width="100%" height="1000px">
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->    
    <!-- end page title --> 
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: #62B22F; color: white;">
                Requisiciones
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-danger mb-2" data-toggle="modal" data-target="#bs-example-modal-lg"><i class="mdi mdi-plus-circle mr-2"></i>Nueva Requisición</a>
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
                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="basic-datatable">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Departamento</th>
                                    <th>Fecha generada</th>
                                    <th>Fecha para requerir</th>
                                    <th>Asunto</th>
                                    <th>Folio</th>
                                    <th>Estatus</th>
                                    <th>Requisión</th>
                                    <th>Cotizaciones</th>
                                    <th style="width: 75px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>1</td>
                                    <td>GERENTE DE RELLENO SANITARIO</td>
                                    <td>2021/12/15</td>
                                    <td>2021/12/25</td>
                                    <td>Overoles</td>
                                    <td>GRS/001</td>
                                    <td class="text-center"><span class="badge badge-danger text-white">Canceleda</span></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>COORDINADOR DE GRANDES USUARIOS</td>
                                    <td>2021/12/20</td>
                                    <td>2021/12/26</td>
                                    <td>Refacciones</td>
                                    <td>CGU/0028</td>
                                    <td class="text-center"><span class="badge badge-warning text-white">Pendiente</span></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg2"><i class="pe-is-w-cloud-up" style="font-size:30px"></i></a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SUPERVISOR COMERCIAL</td>
                                    <td>2021/12/22</td>
                                    <td>2021/12/23</td>
                                    <td>Escritrio</td>
                                    <td>SC/0005</td>
                                    <td class="text-center"><span class="badge badge-success text-white">Aprovada</span></td>
                                    <td class="text-center"><a href="" data-toggle="modal" data-target="#bs-example-modal-lg2"><i class="mdi h5 mr-2 mdi-file-document-outline text-center" style="font-size:30px"></i></a></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target=".bd-example2-modal-lg"><i class="pe-is-w-cloud-up" style="font-size:30px"></i></a>
                                        <router-link to="/QuotationPDF_compras"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></router-link>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>COORDINADOR DE RECURSOS HUMANOS</td>
                                    <td>2021/12/05</td>
                                    <td>2021/12/07</td>
                                    <td>Hojas Blancas</td>
                                    <td>CRH/0056</td>
                                    <td class="text-center"><span class="badge badge-success text-white">Aprovada</span></td>
                                    <td class="text-center"><a href="" data-toggle="modal" data-target="#bs-example-modal-lg2"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></a></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target=".bd-example2-modal-lg"><i class="pe-is-w-cloud-up" style="font-size:30px"></i></a>
                                        <router-link to="/QuotationPDF_compras"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></router-link>
                                        <router-link to="/QuotationPDF_compras"><i class="mdi h5 mr-2 mdi-file-document-outline" style="font-size:30px"></i></router-link>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SUPERVISOR DE SERVICIOS GENERALES</td>
                                    <td>2021/11/17</td>
                                    <td>2021/11/20</td>
                                    <td>Playeras</td>
                                    <td>SSG/0004</td>
                                    <td class="text-center">
                                        <span class="badge badge-danger text-white">Canceleda</span>
                                    </td>
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
    </div>
</div> <!-- container -->
@endsection
@section('js')
<script src="{{ asset('libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('ibs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
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

@endsection  