@extends('managers.layouts.app')

@push('title')

    Complains

@endpush

@push('css')

    <link rel="stylesheet" href="{{asset('website/css/filters.css')}}">

@endpush

@section('content')

    <section class="subjects">

        <div class="container">

            <h2 class="text-center">شكاوى الاقسام</h2>

            <div class="details">

                <div class="row">

                    <div class="col-6">

                        <p>
                            المعهد التكنولوجي العالي


                        </p>

                    </div>

                    <div class="col-6">

                        <p class="text-left">

                            التاريخ : <span>{{date('Y-d-m')}}</span>
                        </p>

                    </div>

                </div>

            </div>

            <div class="filters">

                <form action="{{route('manager.complains.index')}}">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">

                                <select name="type" class="custom-select custom-select-md">

                                    <option selected disabled>Select type</option>

                                    @foreach(config('complain.types') as $type)

                                        <option value="{{$type}}">{{$type}}</option>

                                    @endforeach

                                </select>

                            </div>

                        </div>

                        @if(user()->role == config('auth.roles.chancellor'))

                            <div class="col-md-4">

                                <div class="form-group">

                                    <select name="department" class="custom-select custom-select-md">

                                        <option selected disabled>Select Department</option>

                                        @foreach(\App\Department::all() as $department)

                                            <option value="{{$department->id}}">{{$department->name}}</option>

                                        @endforeach

                                    </select>

                                </div>

                            </div>

                        @else

                            <div class="offset-4"></div>

                        @endif


                        <div class="col-md-4">

                            <button class="btn btn-primary" type="submit">Submit</button>


                        </div>

                    </div>

                </form>

            </div>

            <hr>

            <div class="row">

                <div class="col-12">

                    <table class="text-center mx-auto" border="1">

                        <thead>

                        <tr class="head-of-table">

                            <td>No</td>

                            <td>Type</td>

                            <td>Topic</td>

                            <td>Description</td>

                        </tr>

                        </thead>

                        <tbody>

                        <?php $i = 1 ?>

                        @foreach($complains as $complain)

                            <tr>

                                <td>

                                    <p>{{$i++}}</p>

                                </td>

                                <td>

                                    <a href="{{route('manager.complains.show',$complain)}}">{{$complain->type}}</a>

                                </td>

                                <td>

                                    <a href="{{route('manager.complains.show',$complain)}}">{{str_limit($complain->topic,20)}}</a>

                                </td>

                                <td>

                                    <a href="{{route('manager.complains.show',$complain)}}">{{str_limit($complain->description,100)}}</a>

                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>


            </div>

            <div class="row">

                <div class="offset-5"></div>

                <div class="col-sm-4">

                    <button class="btn btn-primary" type="submit" id="print-button"
                            style="margin-top: 20px;margin-bottom: 20px;margin-left: 10px;">Print
                    </button>
                    <a class="link" href="{{route('manager.chancellor.dashboard')}}">
                        <button class="btn btn-primary" type="button" id="previous-button"
                                style="margin-top: 20px;margin-bottom: 20px;margin-right: 10px;">Back
                        </button>
                    </a>

                </div>

                <div class="offset-3"></div>

            </div>

        </div>

    </section>

    <p class="Signature"></p>

@endsection
