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
                    <li class="breadcrumb-item active">Inventario</li>
                </ol>
            </div>
            <h4 class="page-title">Inventario</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
<div class="row">
    <div class="col-12">
        <div class="card-header" style="background-color: #62B22F; color: white;" >Inventario</div>
        <div class="card-box">
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword2" class="sr-only">Buscar</label>
                            <input type="search" class="form-control" id="inputPassword2" placeholder="Buscar...">
                        </div>
                        <!--<div class="form-group mx-sm-3">
                            <label for="status-select" class="mr-2">Sort By</label>
                            <select class="custom-select" id="status-select">
                                <option selected="">All</option>
                                <option value="1">Popular</option>
                                <option value="2">Price Low</option>
                                <option value="3">Price High</option>
                                <option value="4">Sold Out</option>
                            </select>
                        </div>-->
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right mt-3 mt-lg-0">
                        <!--<button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-cog"></i></button>-->
                        <a href="ecommerce-product-edit.html" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i>Nuevo Artículo</a>
                    </div>
                </div><!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="align-items-center">
                <img src="{{ asset('images/inventory/botas.jpg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Botas</a> </h5>
                        <!--<div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 22 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $39
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">
            
            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="{{ asset('images/inventory/chaleco.jpeg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Chaleco</a> </h5>
                        <!-- <div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 15 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $98
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">
            
            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="{{ asset('images/inventory/llanta.jpeg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Llanta</a> </h5>
                        <!--<div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 12 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $49
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">
            
            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light" >
                <img src="{{ asset('images/inventory/overol.jpeg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Overol</a> </h5>
                        <!--<div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 10 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $29
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
<!-- end row-->


<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">

            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="{{ asset('images/inventory/aceite.jpg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Aceite</a> </h5>
                        <!--<div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 25 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $49
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">
            
            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="{{ asset('images/inventory/escritorio.jpg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Escritorio</a> </h5>
                        <!--<div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 2 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $19
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">
            
            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="{{ asset('images/inventory/hojas.jpg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Hoja blancas</a> </h5>
                        <!--<div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 10 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $99
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card-box product-box">
            
            <div class="product-action">
                <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
            </div>

            <div class="bg-light">
                <img src="{{ asset('images/inventory/silla.jpg') }}" alt="product-pic" class="img-fluid" />
            </div>

            <div class="product-info">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Sillas</a> </h5>
                        <!--<div class="text-warning mb-2 font-13">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>-->
                        <h5 class="m-0"> <span class="text-muted"> Stocks : 3 pcs</span></h5>
                    </div>
                    <!--<div class="col-auto">
                        <div class="product-price-tag">
                            $29
                        </div>
                    </div>-->
                </div> <!-- end row -->
            </div> <!-- end product info-->
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-12">
        <ul class="pagination pagination-rounded justify-content-end mb-3">
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
    </div> <!-- end col-->
</div>
<!-- end row-->
@endsection