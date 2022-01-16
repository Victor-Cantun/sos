<div class="row">
    <div class="col-4">
        <div class="text-center">
            <img src="{{ asset( $Vehicle->photo ) }}" alt="image" class="img-fluid rounded-circle img-thumbnail" width="120">
        </div>
      
    </div>
    <div class="col-8">
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> INFORMACIÓN DEL VEHÍCULO </h5>
        <div class="">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Clave vehícular:</h4>
                    <p class="mb-3">{{ $Vehicle->vehiclekey }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Modelo:</h4>
                    <p class="mb-3">{{ $Vehicle->model }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Número de placas:</h4>
                    <p class="mb-3"> {{ $Vehicle->plates }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Marca:</h4>
                    <p class="mb-3"> {{ $Vehicle->mark }}</p>            
                </div>
            </div>   
            <h4 class="font-13 text-muted text-uppercase mb-1">Número de motor:</h4>
            <p class="mb-3"> {{ $Vehicle->motor }}</p>
        </div>  
        <div class="">
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Número de chasis:</h4>
                    <p class="mb-3"> {{ $Vehicle->chassis }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Color:</h4>
                    <p class="mb-3"> {{ $Vehicle->color }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Número de factura:</h4>
                    <p class="mb-3"> {{ $Vehicle->invoicenumber }}</p>
                </div>
                <div class="col-6">
                    <h4 class="font-13 text-muted text-uppercase mb-1">Tarjeta de circulación:</h4>
                    <p class="mb-3"> {{ $Vehicle->trafficcard }}</p>
                </div>
            </div>      
        </div>        
    </div>


</div>




