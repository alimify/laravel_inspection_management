<script src="{{asset('backend/'.'assets/libs/toastr/build/toastr.min.js')}}"></script>
<script>
    $(function() {
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        toastr.error(`{{$error}}`, 'Error!');
        @endforeach
        @endif
        @if (session('status'))
        toastr.success(`{{ session('status') }}`, 'Success');
        @endif
    })
</script>
