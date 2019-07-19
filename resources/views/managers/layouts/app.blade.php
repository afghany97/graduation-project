<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>@yield('title')</title>

        <!-- Tell the browser to be responsive to screen width -->

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Bootstrap 3.3.7 -->

        {!! Html::style('manager/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

        <!-- Font Awesome -->

        {!! Html::style('manager/bower_components/font-awesome/css/font-awesome.min.css') !!}

        <!-- Ionicons -->

        {!! Html::style('manager/bower_components/Ionicons/css/ionicons.min.css') !!}

        <!-- Theme style -->

        {!! Html::style('manager/dist/css/AdminLTE.min.css') !!}

        <!-- AdminLTE Skins. Choose a skin from the css/skins

                 folder instead of downloading all of them to reduce the load. -->

        {!! Html::style('manager/dist/css/skins/_all-skins.min.css') !!}

        <!-- Morris chart -->

        {!! Html::style('manager/bower_components/morris.js/morris.css') !!}

        <!-- jvectormap -->

        {!! Html::style('manager/bower_components/jvectormap/jquery-jvectormap.css') !!}

        <!-- Date Picker -->

        {!! Html::style('manager/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}

        <!-- Daterange picker -->

        {!! Html::style('manager/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}

        <!-- bootstrap wysihtml5 - text editor -->

        {!! Html::style('manager/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}

         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->

        <!-- Google Font -->

        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    </head>

    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">

            @include('managers.layouts._header')

            <!-- Left side column. contains the logo and sidebar -->

                @include('managers.layouts._sidebar')

            <div class="content-wrapper">

                @yield('content')

            </div>

            @include('managers.layouts._footer')

            <div class="control-sidebar-bg"></div>

        </div>


    <!-- jQuery 3 -->

    {!! Html::script('manager/bower_components/jquery/dist/jquery.min.js') !!}

    <script src=""></script>

    <!-- jQuery UI 1.11.4 -->

    {!! Html::script('manager/bower_components/jquery-ui/jquery-ui.min.js') !!}

    <script src=""></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>

        $.widget.bridge('uibutton', $.ui.button);

    </script>

    <!-- Bootstrap 3.3.7 -->

    {!! Html::script('manager/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

    <!-- Morris.js charts -->

    {!! Html::script('manager/bower_components/raphael/raphael.min.js') !!}

    {!! Html::script('manager/bower_components/morris.js/morris.min.js') !!}

    <!-- Sparkline -->

    {!! Html::script('manager/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}

    <!-- jvectormap -->

    {!! Html::script('manager/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}

    {!! Html::script('manager/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}

    <!-- jQuery Knob Chart -->

    {!! Html::script('manager/bower_components/jquery-knob/dist/jquery.knob.min.js') !!}

    <!-- daterangepicker -->

    {!! Html::script('manager/bower_components/moment/min/moment.min.js') !!}

    {!! Html::script('manager/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}

    <!-- datepicker -->

    {!! Html::script('manager/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}

    <!-- Bootstrap WYSIHTML5 -->

    {!! Html::script('manager/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}

    <!-- Slimscroll -->

    {!! Html::script('manager/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}

    <!-- FastClick -->

    {!! Html::script('manager/bower_components/fastclick/lib/fastclick.js') !!}

    <!-- AdminLTE App -->

    {!! Html::script('manager/dist/js/adminlte.min.js') !!}

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    {!! Html::script('manager/dist/js/pages/dashboard.js') !!}

    <!-- AdminLTE for demo purposes -->

    {!! Html::script('manager/dist/js/demo.js') !!}

    </body>

</html>

