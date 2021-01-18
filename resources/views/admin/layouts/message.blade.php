@if(Session::has('message'))
    <script>
        swal({
            title: "{{ Session::get('message') }}" ,
            timer: 1000,
            showConfirmButton: false
        });
    </script>

@endif