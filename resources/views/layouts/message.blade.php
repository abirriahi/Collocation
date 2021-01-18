@if(Session::has('message'))
    <script>
        swal({
            title: "{{ Session::get('message') }}" ,
            timer: 1500,
            showConfirmButton: false
        });
    </script>

@endif