@if (session()->has('notification'))
    <script>
        swal({
            text: '{{ session('notification.text') }}',
            icon: '{{ session('notification.icon') }}',
            timer: '{{ session('notification.timer') }}',
        });
    </script>
@endif
