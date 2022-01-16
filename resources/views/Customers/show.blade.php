<div class="row">
    <div class="col-12">
        <div class="text-center">
            <img src="{{ asset( $Customer->photo ) }}" alt="image" class="img-fluid rounded-circle img-thumbnail" width="120">
        </div>
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> INFORMACIÓN DEL CLIENTE </h5>
        <div class="">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">RFC:</h4>
                    <p class="mb-3">{{ $Customer->rfc }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Nombre:</h4>
                    <p class="mb-3">{{ $Customer->name }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Teléfono:</h4>
                    <p class="mb-3"> {{ $Customer->phone }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Celular :</h4>
                    <p class="mb-3"> {{ $Customer->cellphone }}</p>            
                </div>
            </div> 
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Email:</h4>
                    <p class="mb-3"> {{ $Customer->email }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Ciudad :</h4>
                    <p class="mb-3"> {{ $Customer->city }}</p>            
                </div>
            </div> 
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Codigo Postal:</h4>
                    <p class="mb-3"> {{ $Customer->postalcode }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Dirección:</h4>
                    <p class="mb-3"> {{ $Customer->address }}</p>            
                </div>
            </div>                
        </div>        
    </div>
</div>




