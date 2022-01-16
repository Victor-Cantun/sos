<form method="post" action="{{ route('Departments.update', $Department->id ) }}"   class="needs-validation" novalidate>
    <input type="hidden" name="id" value="{{ $Department->id}}" >
    @csrf
    @method('put')
    <div class="form-group mb-3">
        <label for="simpleinput">Edita el Nombre del Departamento</label>
        <input type="text" id="simpleinput" class="form-control" name="name" value="{{ $Department->name }}" required>
    </div>
    <div class="form-group mb-3">
        <label for="simpleinput">Teléfono</label>
        <input type="text" class="form-control" name="phone" value="{{ $Department->phone }}"   autocomplete="off" data-toggle="input-mask" data-mask-format="0000000000">
    </div>
    <div class="form-group mb-3">
        <label for="simpleinput">Celular</label>
        <input type="text" class="form-control" name="cellphone" value="{{ $Department->cellphone }}"  autocomplete="off" data-toggle="input-mask" data-mask-format="0000000000">
    </div>
    <div class="form-group mb-3">
        <label for="simpleinput">Correo electrónico</label>
        <input type="email" class="form-control" name="email" value="{{ $Department->email }}"  required autocomplete="off">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="btn_update" class="btn btn-primary">Guardar</button>
    </div>
   <!-- <button id="btn-update" class="btn btn-primary waves-effect waves-light">Guardar</button>-->
</form>
<!-- Vendor js -->

<script src="{{ asset('libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
<script src="{{ asset('libs/autonumeric/autoNumeric-min.js') }}"></script>
<script src="{{ asset('js/pages/form-masks.init.js') }}"></script>