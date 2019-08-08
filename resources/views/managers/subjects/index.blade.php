@extends('managers.layouts.app')

@section('title')

    {{ucwords($doctor->name)}} Subjects

@endsection

@section('content')

    <section class="content-header">

        <h1>

            {{ucwords($doctor->name)}} Subjects

        </h1>

    </section>

    <section class="content">

        @foreach($subjects as $subject)

            <div class="box">

                <div class="box-header with-border">

                    <h3 class="box-title">{{$subject->name}}</h3>

                    <div class="box-tools pull-right">

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"

                                title="Collapse">

                            <i class="fa fa-minus"></i></button>

                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">

                            <i class="fa fa-times"></i></button>

                    </div>

                </div>

                <div class="box-body">

                    The average evaluation of {{$subject->name}} is {{$subject->getAverageEvaluation($doctor->id)}} %

                    <a href="{{route('manager.doctors.show',[$doctor,$subject])}}">show details</a>

                </div>

            </div>

        @endforeach

    </section>


@endsection
