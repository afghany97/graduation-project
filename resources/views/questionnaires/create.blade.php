@extends('layouts.app')

@section('header')

    {!! Html::style('website/css/poll-page-style.css') !!}

@endsection

@section('content')

    <section class="poll">

        <div class="container">

            <h2 class="text-center">نموذج تقويم المقرر الدراسي</h2>

            <hr>

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

                                    <p>رقم المجموعه :<span class="num">3</span></p>

                                </li>

                                <li class="col-md-12">

                                    <p>اسم المحاضر :

                                        <span class="num">

                                            <select class="custom-select" id="inputGroupSelect01">

                                                <option selected disabled>اختر دكتور الماده</option>

                                                @foreach($doctors as $doctor)

                                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>

                                                @endforeach

                                            </select>

                                        </span>

                                    </p>

                                </li>

                                <li class="col-md-12">

                                    <p>اسم المعيد :

                                        <span class="num">

                                            <select class="custom-select" id="inputGroupSelect01">

                                                <option selected>اختر معيد الماده</option>

                                                @foreach($assistants as $assistant)

                                                    <option value="{{$assistant->id}}">{{$assistant->name}}</option>

                                                @endforeach

                                            </select>

                                        </span>

                                    </p>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <form class="poll-form">

                @foreach(config('questionnaires') as $key => $array)

                    <div>

                        <p class="h6"><u>{{config('questionnaires_translation')[$key]}}</u></p>

                        <br/>

                        <ul>

                            @foreach($array as $item)

                                <li>

                                    <div class='row'>

                                        <div class="col-lg-8 col-sm-6">

                                            <p>{{config('questionnaires_translation')[$item]}}</p>

                                        </div>

                                        <div class="col-lg-4 col-sm-6">

                                            <div class="btn-group btn-group-toggle" data-toggle="buttons" requried>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="1"

                                                           autocomplete="off" required> 1

                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="2"

                                                           autocomplete="off"> 2

                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="3"

                                                           autocomplete="off"> 3
                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="4"

                                                           autocomplete="off"> 4
                                                </label>

                                                <label class="btn btn-secondary">

                                                    <input type="radio" name="{{$item}}" value="5"

                                                           autocomplete="off"> 5

                                                </label>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                            @endforeach

                        </ul>

                    </div>

                    <hr>

                @endforeach


                <button type="submit" id="sub-button" class="btn btn-primary submit-button">Submit</button>

            </form>

            <button id="up-button">Up</button>

        </div>

    </section>

@endsection

@section('footer')

    {!! Html::script('website/js/poll-page.js') !!}

@endsection
