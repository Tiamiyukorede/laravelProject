<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <!--summernote css link-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

</head>
<body>
     
    @include('layouts.inc.admin-navbar')

<div id="layoutSidenav">

    @include('layouts.inc.admin-sidebar')

    <div id="layoutSidenav_content">
                <main>
                    
                  @yield('content')
</main>

@include('layouts.inc.admin-footer')

</div>

</div>
jquery-3.6.0.min.js
<script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}" ></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{ asset('assets/js/scripts.js')}}" ></script>


<!--summernote js link-->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        $("#mysummernote").summernote({height: 150,});
        $('.dropdown-toggle').dropdown();
    });
</script>
</body>
</html>