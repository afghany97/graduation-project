@extends('managers.layouts.app')

@section('title')

    {{ucwords($subject->name)}}

@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">

            <div class="box">

                <div class="box-header">

                    <h3 class="box-title">{{ucwords($subject->name)}} full evaluation</h3>

                </div>

                <div class="box-body no-padding">

                    <table class="table table-striped">

                        <tr>

                            @foreach(array_keys(config('questionnaires')) as $attribute)

                                @if($attribute != "others")

                                    <th>{{config('questionnaires_translation')[$attribute]}}</th>

                                @endif

                            @endforeach

                        </tr>

                        <tr>

                            @foreach(array_keys(config('questionnaires')) as $attribute)

                                @if($attribute != "others")

                                    <td>{{$categoriesRules[$attribute]}} %</td>

                                @endif

                            @endforeach

                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection