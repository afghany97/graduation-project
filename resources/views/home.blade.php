@extends('layouts.app')

@push('title')

    Subjects

@endpush

@section('content')

    <section class="subjects">

        <div class="container">

            <h2 class="text-center">بطاقه التسجيل</h2>

            <div class="details">

                <div class="row">

                    <div class="col-6">

                        <p>
                            المعهد التكنولوجي العالي

                            <br/>

                            قسم علوم حاسب

                        </p>

                    </div>

                    <div class="col-6">

                        <p class="text-left">

                            التاريخ : <span>{{date('Y-m-d')}}</span>
                        </p>

                    </div>

                </div>

                <hr/>

                <div class="row">

                    <div class="col-md-6 col-sm-12">

                        <p>رقم الطالب : <span>{{$student->c_id}}</span></p>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <p>اسم الطالب : <span>{{$student->name}}</span></p>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <p>القسم : <span>{{$student->department->name}}</span></p>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <p>المعدل التراكمي : <span>{{$student->gpa}}</span></p>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <form method="get" id="form">

                        <table class="text-center mx-auto" border="1">

                            <thead>

                            <tr>
                                <td>م</td>

                                <td colspan="2">المقرر</td>

                                <td>المجموعه</td>

                                <td></td>

                            </tr>

                            </thead>

                            <tbody>

                            @php

                                $counter = 1;

                            @endphp

                            @foreach($subjects as $subject)

                                <tr class="{{ $subject->isQuestionnaired() ? "alert-success" : ""}}">

                                    <td>

                                        <p>{{$counter++}}</p>

                                    </td>

                                    <td>

                                        <p>{{$subject->code}}</p>

                                    </td>

                                    <td>

                                        <p>{{$subject->name}}</p>

                                    </td>

                                    <td>

                                        <p>{{$subject->group[0]->number}}</p>

                                    </td>

                                    <td>

                                        <input type="radio" name="subject"
                                               value="{{$subject->name}}" {{$subject->isQuestionnaired() ? "disabled" : ""}}>

                                    </td>

                                </tr>

                            @endforeach

                            </tbody>

                        </table>

                        <hr>
                        <div class="buttons text-center">
                            <div class="row">
                                <div class="col-md-3"></div>

                                <div class="col-md-2 col-sm-12">
                                    <button class="btn btn-primary" type="submit" id="submit_btn">Git Questionnaire</button>
                                </div>


                                <div class="col-md-2 col-sm-12">

                                    <a href="http://hti.edu.eg/en/student-results.aspx"
                                       class="btn btn-secondary  {{\App\Subject::isAllQuestionnaired($subjects) ? "" : "dis"}}">show
                                        result</a>

                                </div>

                                <div class="col-md-2 col-sm-12">
                                    <button class="btn btn-danger" id="cancel_btn">Cancel</button>
                                </div>
                                <div class="col-md-3"></div>

                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection

@push('js')

    {!! Html::script('website/js/subjects-form.js') !!}

@endpush
