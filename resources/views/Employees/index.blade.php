@extends('layouts.app')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
        <!-- Plugins css -->
        <link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/dropify/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- start page title -->
@section('department') Recursos humanos @endsection
@section('module') Empleados @endsection   
<!-- end page title --> 


<!--  Modal content for the Large example -->
<div class="modal fade" id="modal_new" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">NUEVO EMPLEADO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('Employees.store') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                <div class="row">
                    <div class="col-sm-3">
                        <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active show mb-1" id="personal-tab" data-toggle="pill" href="#personal" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">
                                <i class="mdi mdi-account-circle"></i> INF. PERSONAL</a>
                            <a class="nav-link mb-1" id="work-tab" data-toggle="pill" href="#work" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                                <i class="mdi mdi-account-tie"></i> INF. LABORAL</a>                                 
                            <a class="nav-link mb-1" id="school-tab" data-toggle="pill" href="#school" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">
                                <i class="mdi mdi-school"></i> INF. ESCOLAR</a>
                            <a class="nav-link mb-1" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                                <i class="mdi mdi-tshirt-v"></i> INF. UNIFORME</a>
                            <!--<a class="nav-link mb-1" id="documents-tab" data-toggle="pill" href="#documents" role="tab" aria-controls="v-pills-settings"
                                aria-selected="false">
                                <i class="mdi mdi-file-account"></i> DOCUMENTOS</a>-->  
                            <a class="nav-link mb-1" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">
                                <i class="mdi mdi-earth"></i> INF. SOCIAL</a>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-sm-9">
                        <div class="tab-content pt-0">
                            <div class="tab-pane fade active show" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                    <div class="row">
                                        <div class="col-lg-4 text-center">
                                            <div class="mt-3">
                                                <input type="file" data-plugins="dropify" data-default-file="{{ asset('images/users/sin-foto.png') }}" name="photo" accept="image/*"  />
                                                <p class="text-muted text-center mt-2 mb-0">Foto de perfil</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="firstname">Nombres</label>
                                                        <input type="text" class="form-control" placeholder="" name="name" required autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lastname">Apellidos</label>
                                                        <input type="text" class="form-control" id="lastname" name="surnames" required autocomplete="off">
                                                    </div>
                                                </div> <!-- end col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="userpassword">RFC</label>
                                                        <input type="text" class="form-control" placeholder="" name="rfc"  required autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="userpassword">CURP</label>
                                                        <input type="text" class="form-control" placeholder="" name="curp"  required autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="userpassword">SEGURO SOCIAL</label>
                                                        <input type="text" class="form-control" placeholder="" name="socialsecurity"  required autocomplete="off">
                                                    </div>
                                                </div>                                                                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="useremail">Correo electónico</label>
                                                        <input type="email" class="form-control" placeholder="" name="email" required autocomplete="off">                                            
                                                    </div>
                                                </div>                                 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="userpassword">Celular</label>
                                                        <input type="text" class="form-control" placeholder="" name="cellphone"  required autocomplete="off">
                                                    </div>
                                                </div> <!-- end col -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="userpassword">Teléfono de casa</label>
                                                        <input type="text" class="form-control" placeholder="" name="phone"  autocomplete="off">                                            
                                                    </div>
                                                </div> <!-- end col --> 
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="userpassword">Fecha de nacimiento</label>
                                                        <input type="text" class="form-control" placeholder="" name="dateofbirth"  autocomplete="off">                                            
                                                    </div>
                                                </div>                                
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="userpassword">Codigo Postal</label>
                                                        <input type="text" class="form-control" placeholder="" name="postalcode"  autocomplete="off">                                            
                                                    </div>
                                                </div>                                                                   
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="userpassword">Ciudad</label>
                                                        <input type="text" class="form-control" placeholder="" name="city"  required autocomplete="off">
                                                    </div>
                                                </div> <!-- end col -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="userpassword">Estado</label>
                                                        <input type="text" class="form-control" placeholder="" name="state"  autocomplete="off">                                            
                                                    </div>
                                                </div> <!-- end col -->                                    
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="userpassword">Colonia</label>
                                                        <input type="text" class="form-control" placeholder="" name="colony"  required autocomplete="off">
                                                    </div>
                                                </div> <!-- end col --><!-- end col -->                                    
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="userbio">Domicilio</label>
                                                        <input type="text" class="form-control"  placeholder="" name="address" autocomplete="off">
                                                    </div>
                                                </div> <!-- end col -->                                    
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Departamento</label>
                                            <select class="form-control" data-toggle="select2" name="department">
                                                <option value="0">Selecciona un departamento</option>
                                            @foreach($Departments as $column)
                                                <option value="{{ $column->id }}">{{ $column->name }}</option>
                                            @endforeach
                                            </select>                                            
                                        </div> 
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userpassword">Puesto/Cargo</label>                                            
                                            <select class="form-control" data-toggle="select2" name="employment">
                                                <option value="0">Selecciona un Puesto/Cargo</option>
                                            @foreach($Categories as $column)
                                                <option value="{{ $column->id }}">{{ $column->name }}</option>
                                            @endforeach
                                            </select>       
                                        </div>
                                    </div>                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="userpassword">Fecha de ingreso</label>
                                            <input type="text" class="form-control" placeholder="" name="dateadmission"  required autocomplete="off">
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="userpassword">Cuenta de banco</label>
                                            <input type="text" class="form-control" placeholder="" name="bank"  required autocomplete="off">
                                        </div>
                                    </div>                                     
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="userpassword">Cuenta de banco</label>
                                            <input type="text" class="form-control" placeholder="" name="bankaccount"  required autocomplete="off">
                                        </div>
                                    </div> 
 
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-fb">Facebook</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-fb" placeholder="Url" name="facebook"  autocomplete="off">
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
                                                <input type="text" class="form-control" id="social-tw" placeholder="Username" name="twitter" autocomplete="off">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-insta">Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-insta" placeholder="Url" name="instagram" autocomplete="off">
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
                                                <input type="text" class="form-control" id="social-lin" placeholder="Url" name="linkedin" autocomplete="off">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="social-sky">Skype</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="social-sky" placeholder="@username" name="skype" autocomplete="off">
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
                                                <input type="text" class="form-control" id="social-gh" placeholder="Username" name="github" autocomplete="off">
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="school" role="tabpanel" aria-labelledby="school-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Primaria</label>
                                            <input type="text" class="form-control" placeholder="" name="primary"  autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Secundaria</label>
                                            <input type="text" class="form-control" placeholder="" name="secondary"  autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Licenciatura</label>
                                            <input type="text" class="form-control" placeholder="" name="degree"  autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Maestria</label>
                                            <input type="text" class="form-control" placeholder="" name="mastery"  autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Doctorado</label>
                                            <input type="text" class="form-control" placeholder="" name="doctorate" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="row">
                                    <div class="col-md-4">                                    
                                        <div class="form-group">
                                            <label for="firstname">Talla de Playera</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="tshirt">
                                        </div>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">Talla de Pantalon</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="pans">
                                        </div> 
                                    </div> <!-- end col -->
                                    <div class="col-md-4">                                    
                                        <div class="form-group">
                                            <label for="firstname">Gorra</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="cap">
                                        </div>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">Talla de botas de agujeta</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="laceboot">
                                        </div> 
                                    </div> <!-- end col -->
                                    <div class="col-md-4">                                    
                                        <div class="form-group">
                                            <label for="firstname">Talla de botas petrolera</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="oilboot">
                                        </div>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">Talla de botas de hule</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="rubberboot">
                                        </div> 
                                    </div> <!-- end col -->
                                    <div class="col-md-4">                                    
                                        <div class="form-group">
                                            <label for="firstname">Talla de overol</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="overalls">
                                        </div>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">Talla de guantes</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="gloves">
                                        </div> 
                                    </div> <!-- end col -->
                                    <div class="col-md-4">                                    
                                        <div class="form-group">
                                            <label for="firstname">Lentes</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="lenses">
                                        </div>                                    
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">Talla de chaleco</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="jacket">
                                        </div> 
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">Talla de Impermeable</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="" name="waterproof">
                                        </div> 
                                    </div>                                    
                                </div> 
                            </div>
                            <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        
                                        <div class="mt-3">
                                            <input type="file" data-plugins="dropify" data-max-file-size="1M" name="brithcertificate" />
                                            <label>Acta de Nacimiento</label>                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                        <div class="mt-3">
                                            <input type="file" data-plugins="dropify" data-max-file-size="1M" name="officialidentification" />
                                            <label>Identificación Oficial</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                        <div class="mt-3">
                                            <input type="file" data-plugins="dropify" data-max-file-size="1M" name="proffofaddress" />
                                            <label>Comprobante de domicilio</label>                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        
                                        <div class="mt-3">
                                            <input type="file" data-plugins="dropify" data-max-file-size="1M" name="doc_curp" />
                                            <label>CURP</label>                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                        <div class="mt-3">
                                            <input type="file" data-plugins="dropify" data-max-file-size="1M" name="doc_rfc" />
                                            <label>RFC</label>                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                        <div class="mt-3">
                                            <input type="file" data-plugins="dropify" data-max-file-size="1M" name="doc_socialsecurity" />
                                            <label>SEGURO SOCIAL</label>                                            
                                        </div>
                                    </div>
                                </div>                                    


                            </div>                            
                        </div>
                        <!--<button id="btn_new" class="btn btn-primary waves-effect waves-light">Guardar</button>-->
                    </div> <!-- end col-->
                </div> <!-- end row-->                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="btn_new" class="btn btn-primary">Guardar</button>
                </div>
                </form>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--  Modal content for the Large example -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">EDITAR EMPLEADO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="body-edit">
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="modal_show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-full-width">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">INFORMACIÓN GENERAL DEL EMPLEADO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="body-show">
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark py-3 text-white" >
                <div class="card-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0 text-white">EMPLEADOS</h5>
            </div>
            <div id="cardCollpase1" class="collapse show">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal_new"><i class="mdi mdi-plus-circle mr-2"></i> Nuevo</a>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-right">
                                <!--<button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog"></i></button>-->
                                <button type="button" class="btn btn-success waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-file-excel"></i></span>.xlsx
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-file-pdf"></i></span>.pdf
                                </button>
                            </div>
                        </div><!-- end col-->
                    </div>    
                    <div class="table-responsive" style="overflow-x: scroll;">
                        <table  id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>    
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Celular</th> 
                                    <th>Correo Electrónico</th>                                           
                                    <th>Acciones</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $c = 1 ?>
                                @foreach($Employees as $column)
                                <tr>
                                    <td>{{ $c }}</td>
                                    <td class="table-user">
                                        <img src="{{ asset( $column->photo ) }}" alt="table-user" class="mr-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body font-weight-semibold">{{ $column->name }} {{ $column->surnames }}</a>
                                    </td> 
                                    <td>{{ $column->cellphone }}</td>
                                    <td>{{ $column->email }}</td>                                   
                                    <td>
                                        <a data-toggle="modal" data-target="#modal_show" onclick="btn_show({{$column->id}})" id="show{{$column->id}}" data-status="{{route('Employees.show',$column->id)}}" href="javascript:void(0);" class="action-icon btn-edit" title="Ver" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi  mdi-eye text-primary"></i></a>
                                        <a data-toggle="modal" data-target="#modal_edit" onclick="btn_edit({{$column->id}})" id="edit{{$column->id}}" data-status="{{route('Employees.edit',$column->id)}}" href="javascript:void(0);" class="action-icon btn-edit" title="Editar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-square-edit-outline text-warning"></i></a>
                                        <a data-status="20" onclick="btn_delete({{ $c }})" href="javascript:void(0);" class="action-icon btn-delete" title="Eliminar" data-plugin="tippy" data-tippy-placement="top"> <i class="mdi mdi-delete text-danger"></i></a>
    
                                        <form method="POST" id="form{{ $c }}" action="{{route('Employees.destroy',$column->id)}}">
                                            @csrf
                                            @method('delete')
                                            
                                        </form>                                            
                                    </td>                            
                                </tr>
                                <?php $c = $c + 1 ?>
                                @endforeach                                                                                                                                                                                                                
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
    <!--<div class="col-xs-12 col-lg-4">
        <div class="card">
            <div class="card-header bg-dark py-3 text-white">
                <div class="card-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                    <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                    <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                </div>
                <h5 class="card-title mb-0 text-white">MÁS INFORMACIÓN</h5>
            </div>
            <div id="cardCollpase2" class="collapse show">
                <div class="card-body">
                    <div id="body-show">

                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>
@endsection   
 
@section('js')
<script src="{{ asset('libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
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
<!-- Sweet Alerts js -->

<!-- Plugins js -->
<script src="{{ asset('libs/dropzone/min/dropzone.min.js') }}"></script>
<script src="{{ asset('libs/dropify/js/dropify.min.js') }}"></script>

<!-- Init js-->
<script src="{{ asset('js/pages/form-fileuploads.init.js') }}"></script>
<script src="{{ asset('libs/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('js/pages/form-advanced.init.js') }}"></script>

<script src="{{ asset('libs/tippy.js/tippy.all.min.js') }}"></script>

@if(Session::has('success'))
<script>
    Swal.fire(
        {   type: "success",
            icon: 'success',
            title: '{{ Session::get('success') }}',
            showConfirmButton: false,
            timer: 2000        
        }
    )    
</script>  
@endif

<script>
    function btn_show(id){
        //alert(id);
    
        var valor = $('#show'+id).attr('data-status');
            //alert(valor);
            $("#body-show").load(valor);
    }
    
    function btn_edit(id){
       
        var valor = $('#edit'+id).attr('data-status');
        //alert(valor);
            //alert(valor);
            $("#body-edit").load(valor);
    }
    
    function btn_delete(id){
    //alert('hola'+id);
    Swal.fire({
            title: 'Seguro?',
            text: "Deseas eliminar el registro no. "+id+"?",
            type: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
            }).then(function (t) {
            //alert('eliminaste');
            t.value && $("#form"+id).submit();
            // Swal.fire("Deleted!", "Your file has been deleted.", "success");
        });
    }
    
    
    </script>  
@endsection                
