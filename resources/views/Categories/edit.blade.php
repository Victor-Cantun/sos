<form method="post" action="{{ route('Categories.update', $Category->id ) }}"   class="needs-validation" novalidate>
    <input type="hidden" name="id" value="{{ $Category->id}}" >
    @csrf
    @method('put')
    <div class="form-group mb-3">
        <label for="simpleinput">Categoria</label>
        <input type="text" class="form-control" name="name" value="{{ $Category->name }}" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button id="btn_update" class="btn btn-primary">Guardar</button>
    </div>
    <!--<button id="btn-update" class="btn btn-primary waves-effect waves-light">Guardar</button>-->
</form>
<!-- Vendor js -->
<script src="{{ asset('js/vendor.min.js') }}"></script>

<script src="{{ asset('js/app.min.js') }}"></script>
        