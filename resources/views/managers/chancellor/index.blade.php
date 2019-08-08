@extends('managers.layouts.app')

@section('title')

    Departments

@endsection

@section('content')

    <section class="content-header">

        <h1>

             Departments

        </h1>

    </section>

    <section class="content">

        @foreach($departments as $department)

            <div class="box">

                <div class="box-header with-border">

                    <a href="{{route('manager.doctors.index',$department)}}">

                        <h3 class="box-title">{{$department->name}}</h3>

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

                    Managed by Dr {{$department->manager->name}}

                </div>

            </div>

        @endforeach

    </section>


@endsection
