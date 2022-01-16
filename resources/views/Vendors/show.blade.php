<div class="row">
    <div class="col-12">
        <div class="text-center">
            <img src="{{ asset( $Vendor->photo ) }}" alt="image" class="img-fluid rounded-circle img-thumbnail" width="120">
        </div>
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="fe-truck mr-1"></i> INFORMACIÓN DEL CLIENTE </h5>
        <div class="">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">RFC:</h4>
                    <p class="mb-3">{{ $Vendor->rfc }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Nombre:</h4>
                    <p class="mb-3">{{ $Vendor->name }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Teléfono:</h4>
                    <p class="mb-3"> {{ $Vendor->phone }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Celular :</h4>
                    <p class="mb-3"> {{ $Vendor->cellphone }}</p>            
                </div>
            </div> 
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Email:</h4>
                    <p class="mb-3"> {{ $Vendor->email }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Ciudad :</h4>
                    <p class="mb-3"> {{ $Vendor->city }}</p>            
                </div>
            </div> 
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Codigo Postal:</h4>
                    <p class="mb-3"> {{ $Vendor->postalcode }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Dirección:</h4>
                    <p class="mb-3"> {{ $Vendor->address }}</p>            
                </div>
            </div> 
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Banco:</h4>
                    <p class="mb-3"> {{ $Vendor->bank }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Cuenta:</h4>
                    <p class="mb-3"> {{ $Vendor->bankaccount }}</p>            
                </div>
            </div> 
            <div class="row">
                <div class="col-12">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Clave interbancaria:</h4>
                    <p class="mb-3"> {{ $Vendor->interbankaccount }}</p>
                </div>
            </div>                                           
        </div>        
    </div>
</div>




