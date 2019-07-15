@extends('layouts.app')

@section('header')

    {!! Html::style('website/css/poll-page-style.css') !!}

@endsection

@section('content')

    <section class="poll">

        <div class="container">

            <h2 class="text-center">نموذج تقويم المقرر الدراسي</h2>

            <hr>

            <form method="post" action="{{route('questionnaires.store',$subject)}}">

                @csrf

            <div class="row">

                <div class="col-md-6">

                    <div class="instruction">

                        <p class="h5">تعليمات الاستبيان :</p>

                        <br/>

                        <br/>

                        <div class="row">

                            <ul class="list-unstyled">

                                <li class="col-md-12">

                                    <p><span class="num">1</span> موافق تماما</p>

                                </li>

                                <li class="col-md-12">

                                    <p><span class="num">2</span> موافق</p>

                                </li>

                                <li class="col-md-12">

                                    <p><span class="num">3</span> الي حد ما</p>

                                </li>

                                <li class="col-md-12">

                                    <p><span class="num">4</span> غير موافق</p>

                                </li>

                                <li class="col-md-12">

                                    <p><span class="num">5</span> غير موافق تماما</p>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="subject-data">

                        <p class="h5">بينات المقرر :</p>

                        <br/>

                        <br/>

                        <div class="row">

                            <ul class="list-unstyled">

                                <li class="col-md-12">

                                    <p>مسمى المقرر :<span class="num"><strong>{{$subject->name}}</strong></span></p>

                                </li>

                                <li class="col-md-12">

                                    <p>كود المقرر :<span class="num"><strong>{{$subject->code}}</strong></span></p>

                                </li>

                                <li class="col-md-12">

                                    <p>رقم المجموعه :<span class="num">{{$group->number}}</span></p>

                                </li>

                                <li class="col-md-12">

                                    <p>اسم المحاضر :

                                        <span class="num">

                                            <p>{{$doctor->name}}</p>

                                            <input type="hidden" value="{{$doctor->id}}" name="doctor_id">

                                        </span>

                                    </p>

                                </li>

                                <li class="col-md-12">

                                    <p>اسم المعيد :

                                        <span class="num">

                                            <p>{{$assistant->name}}</p>

                                            <input type="hidden" value="{{$assistant->id}}" name="assistant_id">

                                        </span>

                                    </p>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

                <div class="poll-form">

                @foreach(config('questionnaires') as $key => $array)

                    <div>

                        <p class="h6"><u>{{config('questionnaires_translation')[$key]}}</u></p>

                        <br/>

                        <ul>

                            @foreach($array as $item)

                                <li>

                                    @if($key == "others")

                                        <div class='row'>

                                            <div class="col-md-8">

                                                <p>{{config('questionnaires_translation')[$item]}}</p>

                                            </div>

                                            <div class="col-md-4">

                                                <input type="text" name="{{$item}}" class="form-control">

                                            </div>

                                        </div>

                                    @else

                                        <div class='row'>

                                        <div class="col-lg-8 col-sm-6">

                                            <p>{{config('questionnaires_translation')[$item]}}</p>

                                        </div>

                                        <div class="col-lg-4 col-sm-6">

                                            <div>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="1" required/> 1

                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="2" /> 2

                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="3" /> 3
                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="4" /> 4
                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="5" /> 5

                                                </label>

                                            </div>

                                        </div>

                                    </div>

                                    @endif

                                </li>

                            @endforeach

                        </ul>

                    </div>

                    <hr>

                @endforeach

                    <input type="hidden" name="subject_id" value="{{$subject->id}}">

                <button type="submit" id="sub-button" class="btn btn-primary submit-button">Submit</button>

                </div>

            </form>

            <button id="up-button">Up</button>

        </div>

    </section>

@endsection

@section('footer')

    {!! Html::script('website/js/poll-page.js') !!}

@endsection
