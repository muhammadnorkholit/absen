<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicon.png">
    <title>Si absen</title>
    <!-- chartist CSS -->
    <link href="{{asset('assets')}}/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="{{asset('dist')}}/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{asset('dist')}}/css/pages/dashboard1.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('icon')}}/css/all.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Si Absen</p>
            </div>
        </div>

        @include('component.navUser')


        <div class="page-wrapper">
            @yield('content')
        </div>




         <footer class="center-align fixed-bottom">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.</footer>
    </div>


    <script src="{{asset('assets')}}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('icon')}}/js/all.min.js"></script>
    <script src="{{asset('dist')}}/js/materialize.min.js"></script>
    <script src="{{asset('assets')}}/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="{{asset('dist')}}/js/app.js"></script>
    <script src="{{asset('dist')}}/js/app.init.horizontal.js"></script>
    <script src="{{asset('dist')}}/js/app-style-switcher.horizontal.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="{{asset('dist')}}/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets')}}/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{asset('assets')}}/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{asset('assets')}}/extra-libs/sparkline/sparkline.js"></script>
    <script src="{{asset('dist')}}/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>