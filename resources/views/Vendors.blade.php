@extends('layouts.app')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Compras</a></li>
                    <!--<li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>-->
                    <li class="breadcrumb-item active">Proveedores</li>
                </ol>
            </div>
            <h4 class="page-title">Proveedores</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
<div class="row">
    <div class="col-xl-8 order-xl-1 order-2">
        <div class="card mb-2">
            <div class="card-header" style="background-color: #62B22F; color: white;">Proveedores</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="inputPassword2" class="sr-only">Buscar</label>
                                <input type="search" class="form-control" id="inputPassword2" placeholder="Buscar...">
                            </div>
                            <div class="form-group mx-sm-3">
                                <!--<label for="status-select" class="mr-2">Sort By</label>
                                <select class="custom-select" id="status-select">
                                    <option selected="">All</option>
                                    <option value="1">Hot</option>
                                    <option value="2">Cold</option>
                                    <option value="3">In Progress</option>
                                    <option value="4">Lost</option>
                                    <option value="5">Won</option>
                                </select>-->
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-right mt-3 mt-lg-0">
                            <!--<button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-cog"></i></button>-->
                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#custom-modal"><i class="mdi mdi-plus-circle mr-1"></i>Nuevo Proveedor</button>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-body-->
        </div> <!-- end card-->

        <div class="card-box mb-2">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="media">
                        <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ asset('images/vendors/oficedepot.png') }}" alt="Generic placeholder image" height="64">
                        <div class="media-body">
                            <h4 class="mt-0 mb-2 font-16">Office Depot</h4>
                            <p class="mb-1"><b>Location:</b> Cd. del Carmen, Campeche</p>
                            <p class="mb-0"><b>Category:</b> Comercio</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i>officedepot@contacto.com</p>
                    <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> 828-216-2190</p>
                </div>
                <div class="col-sm-2">
                    <div class="text-center mt-3 mt-sm-0">
                        <!--<div class="badge font-14 bg-soft-info text-info p-1">Hot</div>-->
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="text-sm-right">
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box-->

        <div class="card-box mb-2">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="media">
                        <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ asset('images/vendors/thehomedepot.png') }}" alt="Generic placeholder image" height="64">
                        <div class="media-body">
                            <h4 class="mt-0 mb-2 font-16">Home Depot</h4>
                            <p class="mb-1"><b>Location:</b> Cd. del Carmen, Campeche</p>
                            <p class="mb-0"><b>Category:</b> Comercio</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i>homedepot@contacto.com</p>
                    <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> 077 6157 4248</p>
                </div>
                <div class="col-sm-2">
                    <div class="text-center mt-3 mt-sm-0">
                        <!--<div class="badge font-14 bg-soft-primary text-primary p-1">Cold</div>-->
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="text-sm-right">
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box-->

        <div class="card-box mb-2">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="media">
                        <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ asset('images/vendors/radioshack.png') }}" alt="Generic placeholder image" height="64">
                        <div class="media-body">
                            <h4 class="mt-0 mb-2 font-16">RadioShack</h4>
                            <p class="mb-1"><b>Location:</b> Cd. del Carmen, Campeche</p>
                            <p class="mb-0"><b>Category:</b> Comercio</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i>radioshack@contacto.com</p>
                    <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> (216) 76 298 896	</p>
                </div>
                <div class="col-sm-2">
                    <div class="text-center mt-3 mt-sm-0">
                        <!-- <div class="badge font-14 bg-soft-warning text-warning p-1">In-progress</div>-->
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="text-sm-right">
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box-->

        <div class="card-box mb-2">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="media">
                        <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ asset('images/vendors/autozone.jpeg') }}" alt="Generic placeholder image" height="64">
                        <div class="media-body">
                            <h4 class="mt-0 mb-2 font-16">Autozone</h4>
                            <p class="mb-1"><b>Location:</b> Cd. del Carmen, Campeche</p>
                            <p class="mb-0"><b>Category:</b> Comercio</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i>autozone@contacto.com</p>
                    <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> (02) 75 150 655</p>
                </div>
                <div class="col-sm-2">
                    <div class="text-center mt-3 mt-sm-0">
                        <!--<div class="badge font-14 bg-soft-danger text-danger p-1">Lost</div>-->
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="text-sm-right">
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box-->

        <div class="card-box mb-2">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <div class="media">
                        <img class="d-flex align-self-center mr-3 rounded-circle" src="{{ asset('images/vendors/tony.png') }}" alt="Generic placeholder image" height="64">
                        <div class="media-body">
                            <h4 class="mt-0 mb-2 font-16">Papelerias Tony</h4>
                            <p class="mb-1"><b>Location:</b> Cd. del Carmen, Campeche</p>
                            <p class="mb-0"><b>Category:</b> Comercio</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i>tony@contacto.com</p>
                    <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> (+15) 73 483 758</p>
                </div>
                <div class="col-sm-2">
                    <div class="text-center mt-3 mt-sm-0">
                        <!--<div class="badge font-14 bg-soft-success text-success p-1">Won</div>-->
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="text-sm-right">
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </div>
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box-->

        <div class="text-center my-4">
            <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
        </div>

    </div> <!-- end col -->

    <div class="col-xl-4 order-xl-2 order-1">
        <div class="card-box" dir="ltr">
            <h4 class="header-title mb-3">Servicios</h4>

            <div class="text-center">
                <div id="status-chart"></div>

                <p class="text-muted font-15 font-family-secondary mb-0 mt-3">
                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> </span>
                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> </span>
                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> </span>
                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> </span>
                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-danger"></i> </span>
                </p>
            </div>

        </div> <!-- end card-box-->
    </div> <!-- end col -->
</div>
@endsection
