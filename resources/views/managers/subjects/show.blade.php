@extends('managers.layouts.app')

@push('title')

    {{ucwords($subject->name)}}

@endpush

@section('content')

<section class="subjects">

    <div class="container">

        <h2 class="text-center">تقييم المادة</h2>

        <div class="details">

            <div class="row">

                <div class="col-6">

                    <p>
                        المعهد التكنولوجي العالي


                    </p>

                </div>

                <div class="col-6">

                    <p>

                        التاريخ : <span>2019-08-07</span>
                    </p>

                </div>

            </div>

            <hr/>

            <div class="row">

                <div class="col-md-6 col-sm-12">

                    <p>اسم العميد : <span>د/ عثمان</span></p>

                </div>

                <div class="col-md-6 col-sm-12">

                    <p>الفصل الدراسي : <span>may/aug</span></p>

                </div>


                <div class="col-md-6 col-sm-12">

                    <p> اسم الدكتور : <span>Dr:{{$doctor->name}}</span></p>

                </div>

                <div class="col-md-6 col-sm-12">

                    <p>السنه الدراسيه : <span>2019/2020</span></p>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-12">

                <form method="get" id="form">

                    <table class="text-center mx-auto" border="1">
                        <thead>
                        <tr class="head-of-table">
                            @foreach(array_keys(config('questionnaires')) as $attribute)

                                @if($attribute != "others")

                                    <th>{{config('questionnaires_translation')[$attribute]}}</th>

                                @endif

                            @endforeach

                        </tr>
                        </thead>
                        <tbody>


                        <tr>

                            @foreach(array_keys(config('questionnaires')) as $attribute)

                                @if($attribute != "others")

                                    <td>{{$categoriesRules[$attribute]}} %</td>

                                @endif

                            @endforeach
                        </tr>



                        </tbody>


                    </table>



                </form>


            </div>


        </div>
        <div class="row">
            <div class="offset-5"></div>
            <div class="col-sm-4">
                <button class="btn btn-primary" type="submit" id="print-button" style="margin-top: 20px;margin-bottom: 20px;margin-left: 10px;">print</button>
                <button class="btn btn-primary" type="submit" id="previous-button" style="margin-top: 20px;margin-bottom: 20px;margin-right: 10px;">back</button>
            </div>

            <div class="offset-3"></div>

        </div>

    </div>

</section>
<p class="Signature"></p>

@endsection
