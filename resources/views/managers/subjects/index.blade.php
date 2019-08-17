@extends('managers.layouts.app')

@push('title')

    {{ucwords($doctor->name)}} Subjects

@endpush

@section('content')

    <section class="subjects">

        <div class="container">

            <h2 class="text-center"> تقييم المواد</h2>

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

                        <p>العميد : <span>د/ عثمان</span></p>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <p> رئيس القسم : <span>د/ عيد</span></p>

                    </div>


                    <div class="col-md-6 col-sm-12">

                        <p> اسم الدكتور : <span>Dr {{ucwords($doctor->name)}}</span></p>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <p>الفصل الدراسي : <span>may/aug</span></p>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <form method="get" id="form">

                        <table class="text-center mx-auto" border="1">

                            <thead>

                            <tr class="head-of-table">
                                <td>No</td>

                                <td colspan="2">Subject</td>

                                <td>Evaluation Average </td>

                                <td class="show-details"></td>


                            </tr>

                            </thead>

                            <tbody>
                            <?php $i=1 ?>
                            @foreach($subjects as $subject)

                            <tr>

                                <td>

                                    <p>{{$i++}}</p>

                                </td>

                                <td>

                                    <p>{{$subject->name}}</p>

                                </td>

                                <td>

                                    <p>{{$subject->code}}</p>

                                </td>

                                <td>

                                    <p>{{$subject->getAverageEvaluation($doctor->id)}}%</p>

                                </td>

                                <td class="show-details">

                                    <p><a href="{{route('manager.doctors.show',[$doctor,$subject])}}" style="text-decoration: underline; color: blue">show details</a></p>

                                </td>



                            </tr>

                            @endforeach




                            </tbody>

                        </table>



                    </form>


                </div>


            </div>
            <div class="row">
                <div class="offset-5"></div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" type="submit" id="print-button"
                            style="margin-top: 20px;margin-bottom: 20px;margin-left: 10px;">Print
                    </button>
                    <a class="link"
                       href="{{ Auth::guard("managers")->user()->role == config('auth.roles.chancellor') ? route('manager.doctors.index',$department) : route('manager.department_manager.dashboard')}}">
                        <button class="btn btn-primary" type="submit" id="previous-button"
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
