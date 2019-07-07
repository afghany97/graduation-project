@extends('layouts.app')
@section('header')
    {!! Html::style('website/css/hover.css') !!}
    {!! Html::style('website/css/animate.css') !!}
    {!! Html::style('website/css/complain-page-style.css') !!}
@endsection
@section('content')
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
                                <form method="post" action="{{Request::root()}}/complain/create">
                                    {{csrf_field()}}
                                    <div class="col-md-6 wow bounceInRight" data-wow-duration="1.5s">

                                        <div class="form-group">

                                            <select name="department" id="department"
                                                    class="custom-select custom-select-md" required>
                                                <option value="" selected disabled>Department</option>
                                                <option  required value="Computer Science">Computer Science</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Management Arabic"> Management Arabic</option>
                                                <option value="Management English"> Management English</option>

                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <select name="complain_type" id="complain_type"
                                                    class="custom-select custom-select-md" required>
                                                <option  value="" selected disabled>Types of Complain</option>
                                                <option  required value="Individual">Individual complain</option>
                                                <option value="Collective">Collective complaint</option>
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
                                                  required></textarea>
                                        </div>

                                        <button type="submit" formmethod="post"
                                                formaction="{{Request::root()}}/complain/create"
                                                class="btn btn-primary">Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div></section>
@endsection
@section('footer')
    {!! Html::script('website/js/wow.min.js') !!}
    {!! Html::script('website/js/complain-page.js') !!}

@endsection
