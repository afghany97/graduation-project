@extends('layouts.app')

@section('content')

    <div class="pop-background text-center lead">

        <div class="confirmation-box">

            <h3 >Confirmation</h3>

            <hr/>

            <p>Are You <span>Ahmed Sameh</span> !?</p>

            <p>Is Your ID is <span>42016071</span> !?</p>

            <button class="ok-button btn btn-success" href="#">OK</button>

            <button class="cancel-button btn btn-danger">Cancel</button>

            <form id="logout-form" action="{{ route('manager.auth.logout') }}" method="POST" style="display: none;">

                {{ csrf_field() }}

            </form>

        </div>

    </div>

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

@section('js')

    <script src="{{asset('website/js/confirmation-message.js')}}"></script>

@endsection