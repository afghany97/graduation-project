@extends('managers.layouts.app')

@section('title')

    Departments

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->

    <section class="subjects">
        <section class="content container">

            <h2 class="text-center">أقسام المعهد</h2>

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

                            <tr style="	background:#DDD;height: 60px;">
                                <td>No</td>

                                <td>Department</td>

                                <td>Department Manager</td>


                            </tr>

                            </thead>

                            <tbody>
                            <?php $i=1 ?>
                            @foreach($departments as $department)

                            <tr>

                                <td>

                                    <p>{{$i++}}</p>

                                </td>

                                <td>


                                    <p><a href="{{route('manager.doctors.index',$department)}}">{{$department->name}}</a></p>


                                </td>

                                <td>

                                    <p><a href="#">Dr {{$department->manager->name}}</a></p>

                                </td>



                            </tr>

                            @endforeach




                            </tbody>

                        </table>



                    </form>


                </div>

            </div>



        </section>
        <p class="Signature"></p>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
