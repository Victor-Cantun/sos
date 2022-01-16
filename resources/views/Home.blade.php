@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                       <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Starter</li>-->
                    </ol>
                </div>
                <h4 class="page-title">Home</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-pink border-pink border">
                            <i class="mdi mdi-graph font-22 avatar-title text-pink"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="mt-1 text-dark"><span data-plugin="counterup">26</span></h3>
                            <p class="text-muted mb-1 text-truncate">Departamentos</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-blue border-blue border">
                            <i class="fe-users font-22 avatar-title text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                            <p class="text-muted mb-1 text-truncate">Empleados</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                            <i class="mdi mdi-account-tie font-22 avatar-title text-success"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">250</span></h3>
                            <p class="text-muted mb-1 text-truncate">Clientes</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                            <i class="fe-truck font-22 avatar-title text-warning"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">18</span></h3>
                            <p class="text-muted mb-1 text-truncate">Vehículos</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    </div>  
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                <h4 class="mt-0 font-16">Combustible</h4>
                <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">2,838</span> L</h2>
                <!--<p class="text-muted mb-0">Total income: $22506 <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>10.25%</span></p>-->
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                <h4 class="mt-0 font-16">Rendimiento Operativo</h4>
                <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">11.24</span> Km/L</h2>
               <!-- <p class="text-muted mb-0">Total sales: 2398 <span class="float-right"><i class="fa fa-caret-down text-danger mr-1"></i>7.85%</span></p>-->
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                <h4 class="mt-0 font-16">Costo Operativo</h4>
                <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">2.49</span></h2>
                <!--<p class="text-muted mb-0">Total users: 121 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>3.64%</span></p>-->
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card-box">
                <i class="fa fa-info-circle text-muted float-right" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                <h4 class="mt-0 font-16">Costo por Turno</h4>
                <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">1.24</span></h2>
                <!--<p class="text-muted mb-0">Total revenue: $1.2 M <span class="float-right"><i class="fa fa-caret-up text-success mr-1"></i>17.48%</span></p>-->
            </div>
        </div>
    </div>    
    <div class="row">
        
            <div class="col-lg-12">
                <div class="card-box pb-2">
                    <div class="float-right d-none d-md-inline-block">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-xs btn-light">Today</button>
                            <button type="button" class="btn btn-xs btn-light">Weekly</button>
                            <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Análisis de recolección</h4>

                    <div dir="ltr">
                        <div id="sales-analytics" class="mt-4" data-colors="#43bfe5,#6c757d"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->            
         
    </div>  
@endsection          
@section('js')
<script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/pages/dashboard-1.init.js') }}"></script>
@endsection              
                    
                