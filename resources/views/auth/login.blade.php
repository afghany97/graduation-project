<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!--page reset library-->
    {!! Html::style("website/css/normalize.css") !!}
    {!! Html::style("website/css/all.min.css") !!}
    {!! Html::style("website/css/login-style.css") !!}
    {!! Html::style("website/css/bootstrap.css") !!}

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700i" rel="stylesheet">

    <!--page will be compatible with all browsers -->
    <!--[if lt IE 9]>

    {!! Html::script("website/js/html5shiv.js") !!}
    <![endif]-->
    {!! Html::script("website/js/respond.min.js") !!}
</head>

<body>


<div class="layout">

    <div class="content">
        <div class="container">

            <div class="row">

                <div class="offset-lg-2"></div>
                <div class="col-lg-4 mobile-flip-card">
                    <div class="services-description">

                        <h1>HTI Services</h1>

                        <p class="lead">This site provide some services to HTI,s students</p>

                        <p class="lead">
                            Students can complain about anything they want
                            and also can do the questionnaire to can access their results
                        </p>
                        <a href="#">Read More</a>
                    </div>
                </div>


                <div class="col-lg-4  mobile-flip-card">

                    <div class="login-form">

                        <h2>Sign <span>In</span></h2>


                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control{{ $errors->has('c_id') ? ' is-invalid' : '' }}" type="text"
                                       id="c_id" name="c_id" value="{{ old('c_id') }}" required autofocus
                                       placeholder="ID"
                                       maxlength="8"/>
                                @if ($errors->has('c_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('c_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" id="password" name="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       placeholder="Password" maxlength="15" required/>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <input type="submit" name="submit" value="Sign In">
                        </form>

                        <a href="#">Forget Password!?</a>

                    </div>
                </div>

                <div class="offset-lg-2"></div>
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