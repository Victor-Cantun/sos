@extends('layouts.app')
@section('css')
    <!-- third party css -->
    <link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    @livewireStyles
@endsection
@section('content')
    
<div>
    @livewire('departments')
</div>
@endsection   
 
@section('js')
@livewireScripts
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
<!-- Tooltips-->
<script src="{{ asset('libs/tippy.js/tippy.all.min.js') }}"></script>
<!-- Form-Mask -->
<script src="{{ asset('libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
<script src="{{ asset('libs/autonumeric/autoNumeric-min.js') }}"></script>
<script src="{{ asset('js/pages/form-masks.init.js') }}"></script>



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
