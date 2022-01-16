        <!-- Plugins css -->
        <link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
<form method="post" action="{{ route('Vendors.update',$Vendor->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    @method('put')
    <div class="row">
        <div class="col-4">
            <div class="card-box ">
                <div class="text-center">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="mt-3">
                                <input type="file" data-plugins="dropify" data-default-file="{{ asset( $Vendor->photo ) }}" name="photo" accept="image/*"  />
                                <p class="text-muted text-center mt-2 mb-0">Foto de perfil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div>
        <div class="col-8">
            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fe-truck mr-1"></i> Información del proveedor</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">RFC</label>
                        <input type="text" class="form-control" id="lastname" name="rfc" required autocomplete="off" value="{{ $Vendor->rfc }}">
                    </div>
                </div> <!-- end col -->                                    
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Nombres</label>
                        <input type="text" class="form-control" placeholder="" name="name" required autocomplete="off" value="{{ $Vendor->name }}">
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Celular</label>
                        <input type="text" class="form-control" placeholder="" name="cellphone"  required autocomplete="off" value="{{ $Vendor->cellphone }}">
                    </div>
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Teléfono</label>
                        <input type="text" class="form-control" placeholder="" name="phone"  autocomplete="off" value="{{ $Vendor->phone }}">                                            
                    </div>
                </div> <!-- end col -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="useremail">Correo electónico</label>
                        <input type="email" class="form-control" placeholder="" name="email" required autocomplete="off" value="{{ $Vendor->email }}">                                            
                    </div>
                </div>                                    
            </div> <!-- end row -->       
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Ciudad</label>
                        <input type="text" class="form-control" placeholder="" name="city"  required autocomplete="off" value="{{ $Vendor->city }}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userpassword">Estado</label>
                        <input type="text" class="form-control" placeholder="" name="state"  autocomplete="off" value="{{ $Vendor->state }}"  >                                            
                    </div>
                </div> <!-- end col -->                                    
            </div>  
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="userpassword">Colonia</label>
                        <input type="text" class="form-control" placeholder="" name="colony"  required autocomplete="off" value="{{ $Vendor->colony }}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userpassword">Codigo Postal</label>
                        <input type="text" class="form-control" placeholder="" name="postalcode"  autocomplete="off" value="{{ $Vendor->postalcode }}" >                                            
                    </div>
                </div> <!-- end col -->                                    
            </div>  
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userpassword">Banco</label>
                        <input type="text" class="form-control" placeholder="" name="bank"  required autocomplete="off" value="{{ $Vendor->bank }}" >
                    </div>
                </div> <!-- end col -->                                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userpassword">Cuenta Bancaria</label>
                        <input type="text" class="form-control" placeholder="" name="bankaccount"  required autocomplete="off" value="{{ $Vendor->bankaccount }}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="userpassword">Clave Interbancaria</label>
                        <input type="text" class="form-control" placeholder="" name="interbankaccount"  autocomplete="off" value="{{ $Vendor->interbankaccount }}" >                                            
                    </div>
                </div> <!-- end col -->                                    
            </div>                                                   
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="userbio">Domicilio</label>
                        <textarea class="form-control"  rows="4" placeholder="" name="address" autocomplete="off">{{ $Vendor->address }}</textarea>
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
