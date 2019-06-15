@extends('layouts.app')

@section('content')
    <section class="subjects">
        <div class="container">
            <h2 class="text-center">Subjects</h2>


            <div class="row">

                @foreach($subjects as $subject)
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card">

                            <img src="website/imgs/test.png" class=" card-img-top img-fluid img-fluid" alt="...">

                            <a href="{{Request::root()}}/questionnaire/create" class="poll-icon">
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
