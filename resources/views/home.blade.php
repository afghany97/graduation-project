@extends('layouts.app')

@section('content')

    <section class="subjects">

        <div class="container">

            <h2 class="text-center">Subjects</h2>

            <div class="row">

                @foreach($subjects as $subject)

                    <div class="col-lg-8 col-md-8 col-sm-8 mx-auto">

                        <div class="card {{$subject->isQuestionnaired() ? 'dis': ''}}">

                            <a href="{{route('questionnaires.create',$subject)}}" class="poll-icon">

                                <i class="fas fa-poll"></i>

                            </a>

                            <div class="mask"></div>

                            <div class="card-body">

                                <h5 class="card-title text-center">{{$subject->name}}</h5>

                            </div>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </section>

@endsection
