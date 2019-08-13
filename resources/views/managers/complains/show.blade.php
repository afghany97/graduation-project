@extends('managers.layouts.app')

@push('title')

    Complains

@endpush

@push('css')

    <link rel="stylesheet" href="{{asset('website/css/complain-style.css')}}">

@endpush

@section('content')

    <div class="container">

        <!--start of subjects section -->

        <section class="complains">

            <div class="container">

                <h2 class="text-center">تفاصيل الشكوي</h2>

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
                            <span class="label">Department : </span> <span
                                class="value">{{$complain->department->name}}</span>
                        </div>

                        <div class="type  col-sm-12">
                            <span class="label">type of complain : </span> <span
                                class="value">{{$complain->type}}</span>
                        </div>

                        <div class="topic  col-sm-12">
                            <span class="label">topic of complain : </span> <span
                                class="value">{{$complain->topic}}</span>
                        </div>

                        <div class="description col-sm-12">
                            <span class="label">complian description : </span>
                            <p class="value">{{$complain->description}}</p>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="offset-5"></div>
                    <div class="col-sm-4">
                        <button class="btn btn-primary" type="submit" id="previous-button"
                                style="margin-top: 20px;margin-bottom: 20px;margin-right: 10px;">Back
                        </button>
                        <button class="btn btn-primary" type="submit" id="print-button"
                                style="margin-top: 20px;margin-bottom: 20px;margin-left: 10px;">Print
                        </button>
                    </div>


                    <div class="offset-3"></div>

                </div>

            </div>

            <p class="Signature"></p>

        </section>
    </div>
@endsection