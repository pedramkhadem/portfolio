<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>{{__('Khademan Admin')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
    <link href="{{ asset('admin/css/styles.css')}}" rel="stylesheet"/>
    <!-- Sweet Alert -->






    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


</head>
<body class="sb-nav-fixed">
{{--Navbar section--}}
@include('admin.layouts.navbar')
<div id="layoutSidenav">
    {{--side bar section--}}
    @include('admin.layouts.sidebar')
    {{--Content section--}}
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="{{ asset('admin/js/scripts.js')}}"></script>

<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="{{asset('admin/js/jquery.uploadPreview.min.js')}}"></script>
<script type="text/javascript">
    $.uploadPreview({
        input_field: "#image-upload",   // Default: .image-upload
        preview_box: "#image-preview",  // Default: .image-preview
        label_field: "#image-label",    // Default: .image-label
        label_default: "Choose File",   // Default: Choose File
        label_selected: "Change File",  // Default: Change File
        no_label: false,                // Default: false
        success_callback: null          // Default: null
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
<script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>

@stack('scripts')
@include('sweetalert::alert')

</body>
</html>


