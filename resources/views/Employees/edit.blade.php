        <!-- Plugins css -->
        <link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<form method="post" action="{{ route('Employees.update',$Employee->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate >
    @csrf
    @method('put')
    <div class="row">
        <div class="col-4">
            <div class="card-box ">
                <div class="text-center">
                    <!--<img src="{{ asset('images/users/sin-foto.png') }}" class="rounded-circle avatar-xl img-thumbnail rounded-circle"
                    alt="profile-image">    
                    <h4 class="mb-0">Foto de Perfil</h4>
                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Nueva</button>
                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Eliminar</button>-->
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="mt-3">
                                <input type="file" data-plugins="dropify" data-default-file="{{ asset( $Employee->photo ) }}" name="photo" accept="image/*"  />
                                <p class="text-muted text-center mt-2 mb-0">Foto de perfil</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Información personal</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Nombres</label>
                            <input type="text" class="form-control" placeholder="" name="name" required autocomplete="off" value="{{ $Employee->name }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Apellidos</label>
                            <input type="text" class="form-control" id="lastname" name="surnames" required autocomplete="off" value="{{ $Employee->surnames }}">
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="useremail">Correo electónico</label>
                            <input type="email" class="form-control" placeholder="" name="email" required autocomplete="off" value="{{ $Employee->email }}">                                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="userpassword">Celular</label>
                            <input type="text" class="form-control" placeholder="" name="cellphone"  required autocomplete="off" value="{{ $Employee->cellphone }}">
                        </div>
                    </div> <!-- end col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="userpassword">Teléfono</label>
                            <input type="text" class="form-control" placeholder="" name="phone"  autocomplete="off" value="{{ $Employee->phone }}">                                            
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->       
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="userpassword">Ciudad</label>
                            <input type="text" class="form-control" placeholder="" name="city"  required autocomplete="off" value="{{ $Employee->city }}">
                        </div>
                    </div> <!-- end col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="userpassword">Estado</label>
                            <input type="text" class="form-control" placeholder="" name="state"  autocomplete="off" value="{{ $Employee->state }}">                                            
                        </div>
                    </div> <!-- end col -->                                    
                </div>  
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="userpassword">Colonia</label>
                            <input type="text" class="form-control" placeholder="" name="colony"  required autocomplete="off" value="{{ $Employee->colony }}">
                        </div>
                    </div> <!-- end col -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="userpassword">Codigo Postal</label>
                            <input type="text" class="form-control" placeholder="" name="postalcode"  autocomplete="off" value="{{ $Employee->postalcode }}">                                            
                        </div>
                    </div> <!-- end col -->                                    
                </div>                                     
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="userbio">Domicilio</label>
                            <textarea class="form-control"  rows="4" placeholder="" name="address" autocomplete="off" >{{ $Employee->address }}</textarea>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Departamento</label>
                            <select class="form-control" data-toggle="select2" name="department">
                                <option>Selecciona un departamento</option>
                            @foreach($Departments as $column)
                                <option value="{{ $column->id }}">{{ $column->name }}</option>
                            @endforeach
                            </select>                                            
                        </div> 
                    </div>
                </div>
            </div> <!-- end card-box -->
        </div>
        <div class="col-8">
            
                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="social-fb">Facebook</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                </div>
                                <input type="text" class="form-control" id="social-fb" placeholder="Url" name="facebook"  autocomplete="off" value="{{ $Employee->facebook }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="social-tw">Twitter</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                </div>
                                <input type="text" class="form-control" id="social-tw" placeholder="Username" name="twitter" autocomplete="off" value="{{ $Employee->twitter }}" >
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="social-insta">Instagram</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                </div>
                                <input type="text" class="form-control" id="social-insta" placeholder="Url" name="instagram" autocomplete="off" value="{{ $Employee->instagram }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="social-lin">Linkedin</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                </div>
                                <input type="text" class="form-control" id="social-lin" placeholder="Url" name="linkedin" autocomplete="off" value="{{ $Employee->linkedin }}">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="social-sky">Skype</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                </div>
                                <input type="text" class="form-control" id="social-sky" placeholder="@username" name="skype" autocomplete="off" value="{{ $Employee->skype }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="social-gh">Github</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-github"></i></span>
                                </div>
                                <input type="text" class="form-control" id="social-gh" placeholder="Username" name="github" autocomplete="off" value="{{ $Employee->github }}">
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-tshirt-v"></i> UNIFORME</h5>
                <div class="row">
                    <div class="col-md-6">                                    
                        <div class="form-group">
                            <label for="firstname">Talla de Playera</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="tshirt" value="{{ $Employee->tshirt }}">
                        </div>                                    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Talla de Pantalon</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="pans" value="{{ $Employee->pans }}">
                        </div> 
                    </div> <!-- end col -->
                </div> <!-- end row -->            
                <div class="row">
                    <div class="col-md-6">                                    
                        <div class="form-group">
                            <label for="firstname">Gorra</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="cap" value="{{ $Employee->cap }}">
                        </div>                                    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Talla de botas de agujeta</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="laceboot" value="{{ $Employee->laceboot }}">
                        </div> 
                    </div> <!-- end col -->
                </div> <!-- end row -->            
                <div class="row">
                    <div class="col-md-6">                                    
                        <div class="form-group">
                            <label for="firstname">Talla de botas petrolera</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="oilboot" value="{{ $Employee->oilboot }}">
                        </div>                                    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Talla de botas de hule</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="rubberboot" value="{{ $Employee->rubberboot }}">
                        </div> 
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-md-6">                                    
                        <div class="form-group">
                            <label for="firstname">Talla de overol</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="overalls" value="{{ $Employee->overalls }}">
                        </div>                                    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Talla de guantes</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="gloves" value="{{ $Employee->gloves }}">
                        </div> 
                    </div> <!-- end col -->
                </div> <!-- end row -->            
                <div class="row">
                    <div class="col-md-6">                                    
                        <div class="form-group">
                            <label for="firstname">Lentes</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="lenses" value="{{ $Employee->lenses }}">
                        </div>                                    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Talla de chaleco</label>
                            <input type="number" class="form-control" id="firstname" placeholder="" name="jacket" value="{{ $Employee->jacket }}">
                        </div> 
                    </div> <!-- end col -->
                </div> <!-- end row -->                                   
                <!--<div class="text-right">
                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                </div>-->
            
        </div>
        <div class="col-8">
        </div>                    
    </div>
    <button type="submit" id="btn-update" class="btn btn-primary waves-effect waves-light">Guardar</button>
</form>

<script src="{{ asset('libs/dropzone/min/dropzone.min.js') }}"></script>
<script src="{{ asset('libs/dropify/js/dropify.min.js') }}"></>


<script src="{{ asset('js/pages/form-fileuploads.init.js') }}"></script>
<script src="{{ asset('libs/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('js/pages/form-advanced.init.js') }}"></script>

