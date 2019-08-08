@extends('managers.layouts.app')

@section('title')

    {{ucwords($department->name)}} Department

@endsection

@section('content')

    <section class="content-header">

        <h1>

            {{ucwords($department->name)}} Doctors

        </h1>

    </section>

    <section class="content">

        @foreach($doctors as $doctor)

            <div class="box">

                <div class="box-header with-border">

                    <a href="{{route('manager.subjects.index',$doctor)}}">

                        <h3 class="box-title">Dr {{$doctor->name}}</h3>

                    </a>

                    <div class="box-tools pull-right">

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"

                                title="Collapse">

                            <i class="fa fa-minus"></i></button>

                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">

                            <i class="fa fa-times"></i></button>

                    </div>

                </div>

                <div class="box-body">

                    The average evaluation of Dr {{$doctor->name}} is {{$doctor->getAverageEvaluation()}} %

                </div>

            </div>

        @endforeach

    </section>

@endsection
