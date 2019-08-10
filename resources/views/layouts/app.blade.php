<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Subjects</title>

    @yield('header')

    {!! Html::style('website/css/normalize.css') !!}
    {!! Html::style('website/css/bootstrap.css') !!}
    {!! Html::style('website/css/all.min.css') !!}
    {!! Html::style('website/css/subject-page-style.css') !!}
    {!! Html::style('website/css/mine.css') !!}

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700i" rel="stylesheet">

    {!! Html::script('website/js/respond.min.js') !!}

    <style>
        .dis {
            pointer-events: none;
        }
    </style>

</head>

<body>

<!--start of navbar -->

<div id="app">

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top">

    <div class="container">
        <!--site logo -->
        <a class="navbar-brand" href="#">
            <img class="" src="{{asset('website/imgs/logo.png')}}" width="50" height="50" alt="HTI logo">

            <a class="navbar-brand brand-name" href="#">Questionnaire And Complain<br/> Managment System For HTI Students</a>
        </a>


        <!--navbar button in mobile screen -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hti-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!--navbar items-->

        <div class="collapse navbar-collapse" id="hti-nav">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('subjects.index')}}">Subjects <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('complains.create')}}">Complains</a>
                </li>


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{  Auth::user()->name}} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

        </div>

    </div>
</nav>


<!--end of navbar -->

<!--start of subjects section -->


@yield('content')

<flash-message message="{{session('flash')}}" class-name="{{session('class')}}"></flash-message>


@include('layouts._errors')

</div>

<!--end of subjects section -->

<!--page will be compatible with all browsers -->

{!! Html::script('js/app.js') !!}

<!--[if lt IE 9]>
{!! Html::script('website/js/html5shiv.js') !!}

<![endif]-->
{{--{!! Html::script('website/js/jquery-3.3.1.min.js') !!}--}}
{{--{!! Html::script('website/js/bootstrap.js') !!}--}}
{!! Html::script('website/js/all.min.js') !!}
{!! Html::script('website/js/subject-page.js') !!}
{!! Html::script('website/js/script.js') !!}


@yield('footer')
</body>
</html>
