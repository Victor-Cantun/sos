        <!-- Plugins css -->
        <link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<form method="post" action="{{ route('Customers.update',$Customer->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    @method('put')
    <div class="row">
        <div class="col-4">
            <div class="card-box ">
                <div class="text-center">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="mt-3">
                                <input type="file" data-plugins="dropify" data-default-file="{{ asset( $Customer->photo ) }}" name="photo" accept="image/*"  />
                                <p class="text-muted text-center mt-2 mb-0">Foto de perfil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div>
        <div class="col-8">
            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Información del cliente</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">RFC</label>
                        <input type="text" class="form-control" id="lastname" name="rfc" required autocomplete="off" value="{{ $Customer->rfc }}">
                    </div>
                </div> <!-- end col -->                                    
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Nombres</label>
                        <input type="text" class="form-control" placeholder="" name="name" required autocomplete="off" value="{{ $Customer->name }}">
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Celular</label>
                        <input type="text" class="form-control" placeholder="" name="cellphone"  required autocomplete="off" value="{{ $Customer->cellphone }}">
                    </div>
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Teléfono</label>
                        <input type="text" class="form-control" placeholder="" name="phone"  autocomplete="off" value="{{ $Customer->phone }}">                                            
                    </div>
                </div> <!-- end col -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="useremail">Correo electónico</label>
                        <input type="email" class="form-control" placeholder="" name="email" required autocomplete="off" value="{{ $Customer->email }}">                                            
                    </div>
                </div>                                    
            </div> <!-- end row -->       
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Ciudad</label>
                        <input type="text" class="form-control" placeholder="" name="city"  required autocomplete="off" value="{{ $Customer->city }}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Estado</label>
                        <input type="text" class="form-control" placeholder="" name="state"  autocomplete="off" value="{{ $Customer->state }}"  >                                            
                    </div>
                </div> <!-- end col -->                                    
            </div>  
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="userpassword">Colonia</label>
                        <input type="text" class="form-control" placeholder="" name="colony"  required autocomplete="off" value="{{ $Customer->colony }}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userpassword">Codigo Postal</label>
                        <input type="text" class="form-control" placeholder="" name="postalcode"  autocomplete="off" value="{{ $Customer->postalcode }}" >                                            
                    </div>
                </div> <!-- end col -->                                    
            </div>                                     
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="userbio">Domicilio</label>
                        <textarea class="form-control"  rows="4" placeholder="" name="address" autocomplete="off">{{ $Customer->address }}</textarea>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
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
