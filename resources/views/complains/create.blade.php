<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Create Complain</title>

    {!! Html::style('website/css/normalize.css') !!}
    {!! Html::style('website/css/bootstrap.css') !!}
    {!! Html::style('website/css/all.min.css') !!}
    {!! Html::style('website/css/subject-page-style.css') !!}
    {!! Html::style('css/mine.css') !!}
    {!! Html::style('website/css/hover.css') !!}

    {!! Html::style('website/css/animate.css') !!}

    {!! Html::style('website/css/complain-page-style.css') !!}

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700i" rel="stylesheet">

    {!! Html::script('website/js/respond.min.js') !!}

    <style>
        .dis {
            pointer-events: none;
        }
    </style>

</head>

<body>

    <section class="complain">

        <div class="layout">

            <div class="container text-center">

                <div class="text">

                    <i class="fa fa-headphones fa-2x"></i>

                    <h1 class="text-center">Contact <span>Us</span></h1>

                    <p class="text-center lead">Feel Free To Contact Us At Any Time</p>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="complain-form">

                            <form>

                                <div class="row">

                                    <form method="post" action="{{route('complains.store')}}">

                                        @csrf

                                        <div class="col-md-6 wow bounceInRight" data-wow-duration="1.5s">

                                            <div class="form-group">

                                                <select name="department_id" id="department"
                                                        class="custom-select custom-select-md" required>

                                                    <option value="" selected disabled>Select Department</option>

                                                    @foreach($departments as $department)

                                                        <option value="{{$department->id}}">{{$department->name}}</option>

                                                    @endforeach

                                                </select>

                                            </div>

                                            <div class="form-group">

                                                <select name="type" id="complain_type"
                                                        class="custom-select custom-select-md" required>

                                                    <option value="" selected disabled>Select type of Complain</option>

                                                    <option value="individual">Individual complain</option>

                                                    <option value="collective">Collective complaint</option>

                                                </select>

                                            </div>

                                            <div class="form-group">

                                                <input type="text" class="form-control" id="topic"

                                                       name="topic" aria-describedby="problemTopic"

                                                       placeholder="Problem Topic" required>
                                            </div>

                                        </div>

                                        <div class="col-md-6 wow bounceInLeft" data-wow-duration="1.5s">

                                            <div class="form-group">

                                                <textarea class="form-control" id="description" rows="3"

                                                          name="description" placeholder="Problem Description"

                                                          required>

                                                </textarea>

                                            </div>

                                            <button type="submit" formmethod="post"  formaction="{{route('complains.store')}}" class="btn btn-primary">Submit
                                            </button>

                                        </div>

                                    </form>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <flash-message message="{{session('flash')}}" class-name="{{session('class')}}"></flash-message>

    @include('layouts._errors')


{!! Html::script('js/app.js') !!}

<!--[if lt IE 9]>
{!! Html::script('website/js/html5shiv.js') !!}

<![endif]-->

    {!! Html::script('website/js/all.min.js') !!}

    {!! Html::script('website/js/subject-page.js') !!}

    {!! Html::script('website/js/wow.min.js') !!}

    {!! Html::script('website/js/complain-page.js') !!}

</body>

</html>
