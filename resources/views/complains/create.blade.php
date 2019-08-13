@extends('layouts.app')

@push('title')

    Create Complain

@endpush

@push('css')

    {!! Html::style('website/css/hover.css') !!}

    {!! Html::style('website/css/animate.css') !!}

    {!! Html::style('website/css/complain-page-style.css') !!}


@endpush

@section('content')

    <section class="complain">

        <div class="layout">

            <div class="container text-center">

                <div class="text" style="margin-top: 100px">

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

                                                        <option
                                                            value="{{$department->id}}">{{$department->name}}</option>

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

                                        <div class="col-md-6">

                                            <div class="form-group shadow-textarea">

                                            <textarea class="form-control z-depth-1" id="description" rows="3"
                                                      placeholder="Write description here..." name="description"
                                                      required></textarea>

                                            </div>

                                            <button type="submit" formmethod="post"
                                                    formaction="{{route('complains.store')}}" class="btn btn-primary">
                                                Submit
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
@endsection

@push('js')

    {!! Html::script('website/js/wow.min.js') !!}

    {!! Html::script('website/js/complain-page.js') !!}

@endpush





