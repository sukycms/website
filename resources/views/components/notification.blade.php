@if (session()->has('notification'))
    <script>
        Swal.fire({
            text: '{{ session('notification.text') }}',
            icon: '{{ session('notification.icon') }}',
            timer: '{{ session('notification.timer') }}',
        });
    </script>
@endif
