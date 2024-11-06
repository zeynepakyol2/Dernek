{{--Toastr özelliğine özel olarak eklenen bildirimleri ekrana aktarma--}}

@if(session()->has('message'))

<script>// Display an info toast with no title
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "bottom-0 end-0 p-10",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    toastr.{{ is_null(session('message_type')) ? 'success' : session('message_type') }}(null, "{!! session('message') !!}");
</script>

@endif

{{-- Validation fonksinu ile gelen sonuçları ekrana aktarma--}}
@if(count($errors)>0)
    @foreach($errors->all() as $error)


        <script>// Display an info toast with no title
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.error(null, "{!! $error !!}");
        </script>


    @endforeach

@endif
