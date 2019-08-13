@extends('managers.layouts.app')

@push('title')

    Complains

@endpush

@push('css')

    <link rel="stylesheet" href="{{asset('website/css/complain-style.css')}}">

@endpush

@section('content')


    <section class="complains">

        <div class="container">


            <div class="details">

                <div class="row">

                    <div class="col-6">

                        <p>
                            المعهد التكنولوجي العالي


                        </p>

                    </div>

                    <div class="col-6">

                        <p class="text-left">

                            التاريخ : <span>{{date('Y-m-d')}}</span>
                        </p>

                    </div>

                </div>


            </div>

            <hr/>

            <div class="content">

                <div class="row">

                    <div class="department  col-sm-12">
                        <span class="label">Department : </span> <span class="value">{{$complain->department->name}}</span>
                    </div>

                    <hr>

                    <div class="type  col-sm-12">
                        <span class="label">type of complain : </span> <span class="value">{{$complain->type}}</span>
                    </div>

                    <hr>

                    <div class="topic  col-sm-12">
                        <span class="label">topic of complain : </span> <span class="value">{{$complain->topic}}</span>
                    </div>

                    <hr>

                    <div class="description col-sm-12">
                        <span class="label">complian description : </span>
                        <p class="value">{{$complain->description}}</p>
                    </div>

                    <hr>

                </div>
            </div>

        </div>


    </section>


@endsection