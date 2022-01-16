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
                    <li class="breadcrumb-item active">Cotización</li>
                </ol>
            </div>
            <h4 class="page-title">Cotización</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 
<!--  Modal content for the Large example -->
<div class="modal fade" id="bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Cotización</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">                                           
                    <div class="col-12">
                        <embed src="{{ asset('files/cotizacion.pdf') }}" width="100%" height="1000px">
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
<div class="row">
    <div class="col-lg-4">
        <div class="card">
        <div class="card-header" style="background-color: #62B22F; color: white;">Cliente</div>    
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
                <!--<h4 class="header-title mb-3">Track Order</h4>-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <h5 class="mt-0">Folio Cita:</h5>
                            <p>#VL2537</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <h5 class="mt-0">Folio visita:</h5>
                            <p>894152012012</p>
                        </div>
                    </div>
                </div>

                <div class="track-order-list">
                    <ul class="list-unstyled">
                        <li class="completed">
                            <h5 class="mt-0 mb-1">Cita</h5>
                            <p class="text-muted">Abril 21 2021 <small class="text-muted">07:22 AM</small> </p>
                        </li>
                        <li class="completed">
                            <span class="active-dot dot"></span>
                            <h5 class="mt-0 mb-1">Cotización</h5>
                            <p class="text-muted">Diciembre 22 2019 <small class="text-muted">12:16 AM</small></p>
                        </li>
                        <li>                                                    
                            <h5 class="mt-0 mb-1">Envio</h5>
                            <p class="text-muted">April 22 2019 <small class="text-muted">05:16 PM</small></p>
                        </li>
                        <li>
                            <h5 class="mt-0 mb-1">Pago</h5>
                            <p class="text-muted">Estimated delivery within 3 days</p>
                        </li>
                    </ul>


                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header" style="background-color: #62B22F; color: white;">Cotización</div>
            <div class="card-body">
                <!--<h4 class="header-title mb-3">Items from Order #VL2537</h4>-->

                <div class="table-responsive">
                    <table class="table table-bordered table-centered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Concepto</th>
                                
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Visita</th>
                                
                                <td>1</td>
                                <td>$130</td>
                                <td>$130</td>
                            </tr>
                            <tr>
                                <th scope="row">Peso x tonelada</th>
                               
                                <td>2</td>
                                <td>$398</td>
                                <td>$796</td>
                            </tr>

                            <tr>
                                <th scope="row" colspan="3" class="text-right">Sub Total :</th>
                                <td><div class="font-weight-bold">$926</div></td>
                            </tr>

                            <tr>
                                <th scope="row" colspan="3" class="text-right">IVA :</th>
                                <td>$148.16</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="3" class="text-right">Total :</th>
                                <td><div class="font-weight-bold">$1074.16</div></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="text-center mt-4">
                        <a href="" data-toggle="modal" data-target="#bs-example-modal-lg2" class="btn btn-primary">Guardar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                        
@endsection