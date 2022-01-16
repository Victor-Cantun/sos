<div class="row">
    <div class="col-4">
        <div class="text-center">
            <img src="{{ asset( $Employee->photo ) }}" alt="image" class="img-fluid rounded-circle img-thumbnail" width="120">
        </div>
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> INFORMACIÓN PERSONAL </h5>
        <div class="">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Nombre:</h4>
                    <p class="mb-3">{{ $Employee->name }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Apellido:</h4>
                    <p class="mb-3">{{ $Employee->surnames }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">RFC:</h4>
                    <p class="mb-3">{{ $Employee->rfc }}</p>
                </div>
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">CURP:</h4>
                    <p class="mb-3">{{ $Employee->curp }}</p>
                </div>
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Seguro Social:</h4>
                    <p class="mb-3">{{ $Employee->socialsecurity }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">teléfono:</h4>
                    <p class="mb-3"> {{ $Employee->phone }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">celular :</h4>
                    <p class="mb-3"> {{ $Employee->cellphone }}</p>            
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Fecha de nacimiento:</h4>
                    <p class="mb-3"> {{ $Employee->dateofbirth }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Correo Electrónico :</h4>
                    <p class="mb-3"> {{ $Employee->email }}</p>            
                </div>
            </div>   
            <div class="row">
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Codigo Postal:</h4>
                    <p class="mb-3"> {{ $Employee->postalcode }}</p>
                </div>
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Ciudad:</h4>
                    <p class="mb-3"> {{ $Employee->city }}</p>            
                </div>
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Estado:</h4>
                    <p class="mb-3"> {{ $Employee->state }}</p>            
                </div>                                  
            </div>  
            <div class="row">
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Colonia:</h4>
                    <p class="mb-3"> {{ $Employee->colony }}</p>            
                </div> 
                <div class="col-4">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Dirección:</h4>
                    <p class="mb-3"> {{ $Employee->address }}</p>            
                </div>                
            </div>                       
        </div>        
    </div>
    <div class="col-4">
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-tie mr-1"></i> DATOS LABORALES</h5>
        <div class="row">
            <div class="col-6">
                <h4 class="font-13 text-muted text-uppercase mb-1">Departamento:</h4>
                <p class="mb-3"> {{ $Employee->department }}</p>
            </div>
            <div class="col-6">
                <h4 class="font-13 text-muted text-uppercase mb-1">Puesto:</h4>
                <p class="mb-3"> {{ $Employee->employment }}</p>
            </div>
            <div class="col-6">
                <h4 class="font-13 text-muted text-uppercase mb-1">Fecha de ingreso:</h4>
                <p class="mb-3"> {{ $Employee->dateadmission }}</p>
            </div>
            <div class="col-6">
                <h4 class="font-13 text-muted text-uppercase mb-1">Cuenta de banco:</h4>
                <p class="mb-3"> {{ $Employee->bankaccount }}</p>
            </div>
        </div>
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> REDES SOCIALES </h5>
        <div class="">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Facebook:</h4>
                    <p class="mb-3"> {{ $Employee->facebook }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Twitter:</h4>
                    <p class="mb-3"> {{ $Employee->twitter }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Instagram:</h4>
                    <p class="mb-3"> {{ $Employee->instagram }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Linkedin:</h4>
                    <p class="mb-3"> {{ $Employee->linkedin }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Skype:</h4>
                    <p class="mb-3"> {{ $Employee->skype }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Github:</h4>
                    <p class="mb-3"> {{ $Employee->github }}</p> 
                </div>
            </div>       
        </div>  
    </div>
    <div class="col-4">
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-tshirt-v mr-1"></i> UNIFORME </h5>
        <div class="">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de playera:</h4>
                    <p class="mb-3"> {{ $Employee->tshirt }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de Pantalon:</h4>
                    <p class="mb-3"> {{ $Employee->pans }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de Gorra:</h4>
                    <p class="mb-3"> {{ $Employee->cap }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de botas de agujeta: </h4>
                    <p class="mb-3"> {{ $Employee->laceboot }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de botas petrolera:</h4>
                    <p class="mb-3"> {{ $Employee->oilboot }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de botas de hule:</h4>
                    <p class="mb-3"> {{ $Employee->rubberboot }}</p> 
                </div>
            </div>  
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de overol:</h4>
                    <p class="mb-3"> {{ $Employee->overalls }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de guantes:</h4>
                    <p class="mb-3"> {{ $Employee->gloves }}</p> 
                </div>
            </div>  
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de Lentes:</h4>
                    <p class="mb-3"> {{ $Employee->lenses }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Talla de Chaleco:</h4>
                    <p class="mb-3"> {{ $Employee->jacket }}</p> 
                </div>
            </div>               
        </div>        
    </div>

</div>




