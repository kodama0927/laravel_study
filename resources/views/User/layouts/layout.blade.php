<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>adminLTE test</title>
    <!-- for responsive -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- bootstrap -->
    <link href="{{asset("vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- adminLTE style -->
    <link href="{{asset("vendor/adminlte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("vendor/adminlte/dist/css/skins/skin-custom-black.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("plugins/ion.rangeSlider-master/css/ion.rangeSlider.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("css/kodama.css")}}" rel="stylesheet" type="text/css" />

</head>

<body class="skin-custom-black">
    <div class="wrapper">

        @include('User.layouts.header')


        @include('User.layouts.sidebar')


        <div class="content-wrapper">

          @yield('content')

        </div><!-- end content -->


        @include('User.layouts.footer')


    </div><!-- end wrapper -->
    <!-- JS -->

    @if(Auth::check())
        <script>
            document.getElementById('logout').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            });
        </script>
    @endif

    <!-- jquery -->
    <script src="{{asset("vendor/adminlte/vendor/jquery/dist/jQuery.min.js")}}" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="{{asset("vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <!-- adminLTE -->
    <script src="{{asset("vendor/adminlte/dist/js/adminlte.min.js")}}" type="text/javascript"></script>

    <script src="{{asset("plugins/ion.rangeSlider-master/js/ion.rangeSlider.js")}}" type="text/javascript"></script>

    <script src="{{asset("plugins/Chart.js-2.8.0/dist/Chart.js")}}" type="text/javascript"></script>

    <script src="{{asset("js/kodama.js")}}" type="text/javascript"></script>
</body>
</html>
