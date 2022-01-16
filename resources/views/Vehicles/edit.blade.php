        <!-- Plugins css -->
        <link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<form method="post" action="{{ route('Vehicles.update',$Vehicle->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    @method('put')
    <div class="row">
        <div class="col-4">
            <div class="card-box ">
                <div class="text-center">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="mt-3">
                                <input type="file" data-plugins="dropify" data-default-file="{{ asset( $Vehicle->photo ) }}" name="photo" accept="image/*"  />
                                <p class="text-muted text-center mt-2 mb-0">Foto del vehículo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div>
        <div class="col-8">
            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Información del Vehículo</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">Clave Vehículo</label>
                        <input type="text" class="form-control" id="lastname" name="vehiclekey" required autocomplete="off" value="{{ $Vehicle->vehiclekey }}">
                    </div>
                </div> <!-- end col -->                                    
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Modelo</label>
                        <input type="text" class="form-control" placeholder="" name="model" required autocomplete="off" value="{{ $Vehicle->model }}">
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Número de placas</label>
                        <input type="text" class="form-control" placeholder="" name="plates"  required autocomplete="off" value="{{ $Vehicle->plates }}">
                    </div>
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Marca</label>
                        <input type="text" class="form-control" placeholder="" name="mark"  autocomplete="off" value="{{ $Vehicle->mark }}" >                                            
                    </div>
                </div> <!-- end col -->                                  
            </div> <!-- end row -->       
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="useremail">Número de motor</label>
                        <input type="text" class="form-control" placeholder="" name="motor" required autocomplete="off" value="{{ $Vehicle->motor }}" >                                            
                    </div>
                </div>                                  
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userpassword">Chasis</label>
                        <input type="text" class="form-control" placeholder="" name="chassis"  required autocomplete="off" value="{{ $Vehicle->chassis }}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userpassword">Color</label>
                        <input type="text" class="form-control" placeholder="" name="color"  autocomplete="off" value="{{ $Vehicle->color }}" >                                            
                    </div>
                </div> <!-- end col -->                                    
            </div>  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Número de factura</label>
                        <input type="text" class="form-control" placeholder="" name="invoicenumber"  required autocomplete="off" value="{{ $Vehicle->invoicenumber }}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Tarjeta de circulación</label>
                        <input type="text" class="form-control" placeholder="" name="trafficcard"  autocomplete="off" value="{{ $Vehicle->trafficcard }}" >                                            
                    </div>
                </div> <!-- end col -->                                    
            </div>                                     
            <button id="btn_new" class="btn btn-primary waves-effect waves-light">Guardar</button>
        </div>
        <div class="col-8">
        </div>                    
    </div>
    
</form>

    <!-- Plugins js -->
    <script src="{{ asset('libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('libs/dropify/js/dropify.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('js/pages/form-fileuploads.init.js') }}"></script>
