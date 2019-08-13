<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dean Login</title>

    {!! Html::style("website/css/normalize.css") !!}

    {!! Html::style("website/css/all.min.css") !!}

    {!! Html::style("website/css/login-style.css") !!}

    {!! Html::style("website/css/bootstrap.css") !!}

    {!! Html::style("css/mine.css") !!}

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700i" rel="stylesheet">

    <!--[if lt IE 9]>


    {!! Html::script("website/js/html5shiv.js") !!}

    <![endif]-->

    {!! Html::script("website/js/respond.min.js") !!}
</head>

<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">

    <div class="container">
        <!--site logo -->
        <a class="navbar-brand" href="#">
            <img class="" src="{{asset('website/imgs/logo.png')}}" width="50" height="50" alt="HTI logo">

            <a class="navbar-brand" href="#">HTI Management System</a>
        </a>


        <!--navbar button in mobile screen -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hti-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!--navbar items-->

        <div class="collapse navbar-collapse" id="hti-nav">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Student Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('manager.auth.login.department_manager')}}">Department Manager Login</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('manager.auth.login.dean')}}">Dean Login</a>
                </li>



            </ul>

        </div>

    </div>

</nav>

<div class="layout">

    <div class="content">

        <div class="container">

            <div class="row">

                <div class="offset-lg-4"></div>

                <div class="col-lg-4  mobile-flip-card">

                    <div class="login-form">

                        <h2 class="text-center">Dean Login</h2>

                        <form method="POST" action="{{ route('manager.auth.loginDean') }}">

                            @csrf

                            <div class="form-group">

                                <div class="row">

                                    <div class="col-3">

                                        <p style="margin-top: 10px;font: bold 13px Verdana, Arial;
    color: #555454;">Username</p>

                                    </div>

                                    <div class="col-9">

                                        <input style="border-radius: 0 !important;" class="form-control" type="text"
                                               id="username" name="c_id" value="{{ old('c_id') }}" required autofocus
                                               maxlength="20"/>

                                    </div>

                                </div>

                                @if ($errors->has('c_id'))

                                    <span class="error-feedback" role="alert">

                                        <strong>{{ $errors->first('c_id') }}</strong>

                                    </span>

                                @endif

                            </div>
                            <div class="row">

                                <div class="col-3">

                                    <p style="margin-top: 10px;font: bold 13px Verdana, Arial;
    color: #555454;">Password</p>

                                </div>

                                <div class="col-9">

                                    <input style="border-radius: 0 !important;" type="password" id="password" name="password"

                                           class="form-control"

                                           maxlength="15" required/>

                                </div>

                            </div>
                            <button class="btn btn-primary" style="margin-top: 10px">Login </button>
                            <div style="clear: both"></div>


                        </form>


                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

{!! Html::script("website/js/jquery-3.3.1.min.js") !!}

{!! Html::script("website/js/bootstrap.js") !!}

{!! Html::script("website/js/all.min.js") !!}

{!! Html::script("website/js/login-page.js") !!}

</body>

</html>
