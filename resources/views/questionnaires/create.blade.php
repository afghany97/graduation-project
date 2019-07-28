@extends('layouts.app')

@section('header')

    {!! Html::style('website/css/poll-page-style.css') !!}
    <style>
        label {
            display: inline-block;
            padding: 5px;
            position: relative;
            padding-left: 20px;
        }

        label input[type="radio"] {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        label .sradio {
            border: 2px solid #E21212;
            width: 22px;
            height: 22px;
            position: absolute;
            overflow: hidden;
            line-height: 1;
            text-align: center;
            border-radius: 100%;
            font-size: 13pt;
            left: 0;
            top: 50%;
            margin-top: -7.5px;
        }

        input:checked + .sradio {
            background: #E21212;
            border-color: #E21212;
            color: #ffffff;
        }
    </style>


    <script>

        window.data = <?= json_encode(['attributes' => $attributes]); ?>;

        window.data_ar = <?= json_encode(['attributes' => $attributes_ar]); ?>;

        window.subject = <?= json_encode(['subject' => $subject]); ?>;

    </script>
@endsection

@section('content')

    <section class="poll">

        <div class="container " style="border: 5px double #E21212; margin-top:100px ;margin-bottom:50px">

            <h2 class="text-center">نموذج تقويم المقرر الدراسي</h2>

            <hr>

            <form method="post" action="{{route('questionnaires.store',$subject)}}" id="questionnaire-form">

                @csrf

                <div class="row">

                    <div class="col-md-6">

                        <div class="instruction">

                            <p class="h5">تعليمات الاستبيان :</p>

                            <br/>

                            <br/>
                            <div class="row">
                                <p style="margin-right:50px"><strong> *علي الطلاب اختيار الدائرة التي تعبر عن رأيه بموضوعيه حسب الجدول التالي.  </strong></p>
                            </div>
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

                                                    <p>*{{config('questionnaires_translation')[$item]}}</p>

                                                </div>

                                                <div class="col-lg-4 col-sm-6">

                                                    <div>


                                                        <label>
                                                            <input type="radio" name="{{$item}}" value="1"/>
                                                            <span class="sradio">1</span>
                                                        </label>

                                                        <label>

                                                            <input type="radio" name="{{$item}}" value="2"/>
                                                            <span class="sradio">2</span>

                                                        </label>

                                                        <label>

                                                            <input type="radio" name="{{$item}}" value="3"/>
                                                            <span class="sradio">3</span>
                                                        </label>

                                                        <label>

                                                            <input type="radio" name="{{$item}}" value="4"/>
                                                            <span class="sradio">4</span>
                                                        </label>

                                                        <label>

                                                            <input type="radio" name="{{$item}}" value="5"/>
                                                            <span class="sradio">5</span>

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

                    <button type="submit" id="sub-button" class="btn btn-primary">Submit</button>

                </div>

            </form>

            <button id="up-button">Up</button>

        </div>

    </section>

@endsection

@section('footer')

    {!! Html::script('website/js/poll-page.js') !!}

    {!! Html::script('website/js/questionnaires-confirmation.js') !!}

@endsection
