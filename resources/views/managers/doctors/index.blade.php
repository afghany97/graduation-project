@extends('managers.layouts.app')

@push('title')

    {{ucwords($department->name)}} Department

@endpush

@section('content')

    <section class="subjects">

        <div class="container">

            <h2 class="text-center">دكاترة القسم </h2>

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

                        <p>الفصل الدراسي : <span>may/aug</span></p>

                    </div>


                    <div class="col-md-6 col-sm-12">

                        <p> رئيس القسم : <span>Dr {{ucwords($department->manager->name)}}</span></p>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <p>السنه الدراسيه : <span>2019/2020</span></p>

                    </div>

                </div>

            </div>

            <div class="filters">

                <form>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <input type="text" class="form-control" name="name" placeholder="search by doctor name">

                            </div>

                        </div>

                        <div class="col-md-4">

                            <button class="btn btn-primary" type="submit">Search</button>

                        </div>

                    </div>

                </form>

            </div>

            <div class="row">

                <div class="col-12">

                    <form method="get" id="form">

                        <table class="text-center mx-auto" border="1">

                            <thead>

                            <tr class="head-of-table">
                                <td>No</td>

                                <td>Doctor</td>

                                <td>Evaluation Average </td>

                            </tr>

                            </thead>

                            <tbody>
                            <?php $i=1 ?>
                            @foreach($doctors as $doctor)
                            <tr>

                                <td>

                                    <p>{{$i++}}</p>

                                </td>

                                <td>


                                    <p><a href="{{route('manager.subjects.index',[$department,$doctor])}}">

                                            Dr {{$doctor->name}}

                                        </a></p>

                                </td>

                                <td>

                                    <p><a href="#">{{$doctor->getAverageEvaluation()}} %</a></p>

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
                    <a class="link" href="{{route('manager.chancellor.dashboard')}}">
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
