@extends('managers.layouts.app')

@section('title')

    Departments

@endsection

@section('content')
    <div class="container">
        <!--start of subjects section -->


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

                            <p>الفرع : <span>العاشر من رمضان</span></p>

                        </div>

                        <div class="col-md-6 col-sm-12">

                            <p>السنه الدراسيه : <span>2019/2020</span></p>

                        </div>

                    </div>


                </div>

                <div class="row">

                    <div class="col-12">

                        <form method="get" id="form">

                            <table class="text-center mx-auto" border="1">

                                <thead>

                                <tr class="head-of-table">
                                    <td>num</td>

                                    <td>Department</td>

                                    <td>complian topic</td>


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


                                            <p>
                                                <a href="{{route('manager.complain.index',$complain->id)}}">{{$complain->department->name}}</a>
                                            </p>


                                        </td>

                                        <td>

                                            <p>
                                                <a href="{{route('manager.complain.index',$complain->id)}}">{{$complain->topic}}</a>
                                            </p>

                                        </td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
