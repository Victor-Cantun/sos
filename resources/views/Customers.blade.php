@extends('layouts.app')

@section('content')
<!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Operativa</a></li>
                        <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>-->
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div>
                <h4 class="page-title">Clientes</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header" style="background-color: #62B22F; color: white;">Clientes</div>
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
                                <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-toggle="modal" data-target="#custom-modal">Nuevo Cliente</button>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <!--<th>Company</th>-->
                                    <!--<th>Created Date</th>-->
                                    <th style="width: 82px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/ais.png') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">ALL IN SERVICE S.A. DE C.V</a>
                                    </td>
                                    <td>
                                        937-330-1634
                                    </td>
                                    <td>
                                        pauljfrnd@jourrapide.com
                                    </td>
                                    <!--<td>
                                        Vine Corporation
                                    </td>
                                    <td>
                                        07/07/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/bakerhughes.png') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">BAKER HUGHES OPERATIONS MEXICO S.A. DE C.V.</a>
                                    </td>
                                    <td>
                                        215-302-3376
                                    </td>
                                    <td>
                                        bryuellen@dayrep.com
                                    </td>
                                    <!--<td>
                                        Blue Motors
                                    </td>
                                    <td>
                                        09/12/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/clubpetrolero.png') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">CLUB PETROLERO CAMPECHANO A.C.</a>
                                    </td>
                                    <td>
                                        828-216-2190
                                    </td>
                                    <td>
                                        collier@jourrapide.com
                                    </td>
                                    <!--<td>
                                        Arcanetworks
                                    </td>
                                    <td>
                                        06/30/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/comive.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">COMIVE OPERADORA DE SERVICIOS SA DE CV</a>
                                    </td>
                                    <td>
                                        (216) 75 612 706
                                    </td>
                                    <td>
                                        thykauper@rhyta.com
                                    </td>
                                    <!--<td>
                                        Boar Records
                                    </td>
                                    <td>
                                        09/08/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/haciendareal.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">HOTEL HACIENDA REAL</a>
                                    </td>
                                    <td>
                                        (02) 75 150 655
                                    </td>
                                    <td>
                                        austin@dayrep.com
                                    </td>
                                    <!--<td>
                                        Bearings
                                    </td>
                                    <td>
                                        07/15/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/provemex.png') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">PROVEEDORA MEXICANA DE MATERIALES SA DE CV</a>
                                    </td>
                                    <td>
                                        (+15) 73 483 758
                                    </td>
                                    <td>
                                        annette@email.net
                                    </td>
                                    <!--<td>
                                        Shadowshine
                                    </td>
                                    <td>
                                        09/05/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/reca.png') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">BEBIDAS RECA</a>
                                    </td>
                                    <td>
                                        078 7173 9261
                                    </td>
                                    <td>
                                        jennygero@teleworm.us
                                    </td>
                                    <!--<td>
                                        Crowares
                                    </td>
                                    <td>
                                        08/02/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/iguanas.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">RESTAURANTE IGUANA BEACH</a>
                                    </td>
                                    <td>
                                        078 6013 3854
                                    </td>
                                    <td>
                                        edwardR@armyspy.com
                                    </td>
                                    <!--<td>
                                        Orangations
                                    </td>
                                    <td>
                                        08/23/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/alf.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">ALF MENSAJERÍA Y SERVICIOS SA DE CV</a>
                                    </td>
                                    <td>
                                        (216) 76 298 896
                                    </td>
                                    <td>
                                        annac@hotmai.us
                                    </td>
                                    <!--<td>
                                        Surprise Brews
                                    </td>
                                    <td>
                                        05/06/2018
                                    </td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-user">
                                        <img src="{{ asset('images/customers/viamedica.jpeg') }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">VIAMEDICA CENTRO DE ESPECIALIDADESMEDICO-QUIRURGICAS S.A. DE C V.
                                        </a>
                                    </td>
                                    <td>
                                        077 6157 4248
                                    </td>
                                    <td>
                                        deanes@dayrep.com
                                    </td>
                                    <!--<td>
                                        Apexlife
                                    </td>
                                    <td>
                                        04/09/2018
                                    </td>-->
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
                <div class="card-header" style="background-color: #62B22F; color: white;">Información general del cliente</div>
                <div class="card-body">
                    <div class="media mb-3">
                        <img class="d-flex mr-3 rounded-circle avatar-lg" src="{{ asset('images/customers/ais.png') }}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0 mb-1">ALL IN SERVICE S.A. DE C.V</h4>
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
                            <h4 class="font-13 text-muted text-uppercase">Acerca de :</h4>
                            <p class="mb-3">
                                En AIS ofrecemos soluciones integrales en servicios de logística (Grúas y Transportes), construcción, buceo e inspección, concreto y agencia consignataria, siempre buscando la excelencia y la completa satisfacción de nuestros clientes ofreciéndoles innovación, calidad y seguridad en cada uno de nuestros servicios.
                            </p>
                        </div>
                       <!-- <div class="col-12">
                            <h4 class="font-13 text-muted text-uppercase mb-1">Date of Birth :</h4>
                            <p class="mb-3"> March 23, 1984 (34 Years)</p>                                                
                        </div>-->
                        <div class="col-12">
                            <h4 class="font-13 text-muted text-uppercase mb-1">Cliente :</h4>
                            <p class="mb-3">ALL IN SERVICE S.A. DE C.V</p>                                                
                        </div>
                        <div class="col-12">
                            <h4 class="font-13 text-muted text-uppercase mb-1">Fecha de registro:</h4>
                            <p class="mb-3"> April 22, 2020</p>                                                
                        </div>
                        <div class="col-12">
                            <h4 class="font-13 text-muted text-uppercase mb-1">Actualización :</h4>
                            <p class="mb-0"> Dec 5, 2021</p>                                                
                        </div>










                    </div>
                </div>    




            </div> <!-- end card-box-->
        </div>
    </div>                        
    
@endsection