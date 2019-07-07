@extends('layouts.app')
@section('header')
    {!! Html::style('website/css/poll-page-style.css') !!}
@endsection
@section('content')
    <section class="poll">

        <div class="container">
            <h2 class="text-center">نموذج تقويم المقرر الدراسي</h2>
<hr>
            <div class="row">

                <div class="col-md-6">

                    <div class="instruction">

                        <p class="h5">تعليمات الاستبيان :</p>
                        <br/>
                        <br/>


                        <div class="row">
                            <ul class="list-unstyled">

                                <li class="col-md-12">
                                    <p><span class="num">1</span> موافق تماما</p>
                                </li>

                                <li class="col-md-12">
                                    <p><span class="num">2</span> موافق</p>
                                </li>

                                <li class="col-md-12">
                                    <p><span class="num">3</span> الي حد ما</p>
                                </li>

                                <li class="col-md-12">
                                    <p><span class="num">4</span> غير موافق</p>
                                </li>

                                <li class="col-md-12">
                                    <p><span class="num">5</span> غير موافق تماما</p>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="subject-data">

                        <p class="h5">بينات المقرر :</p>
                        <br/>
                        <br/>


                        <div class="row">
                            <ul class="list-unstyled">

                                <li class="col-md-12">
                                    <p>مسمى المقرر :<span class="num"><strong>{{$subject->name}}</strong></span> </p>
                                </li>

                                <li class="col-md-12">
                                    <p>كود المقرر :<span class="num"><strong>{{$subject->code}}</strong></span> </p>
                                </li>

                                <li class="col-md-12">
                                    <p>رقم المجموعه :<span class="num">3</span> </p>
                                </li>

                                <li class="col-md-12">
                                    <p>اسم المحاضر :<span class="num">
                                              <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>اختر دكتور الماده</option>
                                    @foreach($doctors as $doctor)
                                                      <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                                  @endforeach
                                </select>
                                        </span> </p>
                                </li>

                                <li class="col-md-12">
                                    <p>اسم المعيد :<span class="num"> <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>اختر معيد الماده</option>
                                    @foreach($assistants as $assistant)
                                                    <option value="{{$assistant->id}}">{{$assistant->name}}</option>
                                                @endforeach

                                </select></span> </p>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>




            <form class="poll-form">

                <div class="group1">

                    <p class="h6"><u>1- أراء عامه حول المقرر الدراسي</u></p>
                    <br/>
                    <ul>
                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-1 المقرر مشوق</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons" requried>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-interesting" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-interesting" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-interesting" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-interesting" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-interesting" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-1 المقرر يرتبط بالتخصص</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-related-to-specialization" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-related-to-specialization" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-related-to-specialization" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-related-to-specialization" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-related-to-specialization" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-1 المقرر يتضمن معلومات حديثه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-contains-updated-information" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-contains-updated-information" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-contains-updated-information" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-contains-updated-information" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-contains-updated-information" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-1 المقرر يقابل توقعاتي</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-meets-my-expectations" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-meets-my-expectations" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-meets-my-expectations" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-meets-my-expectations" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-meets-my-expectations" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p> 5-1 المقرر مفيد في التطبيق العلمي</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-useful-in-scientific-application" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-useful-in-scientific-application" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-useful-in-scientific-application" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-useful-in-scientific-application" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-is-useful-in-scientific-application" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>6-1 المقرر مفهوم</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="course-concept" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="course-concept" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="course-concept" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="course-concept" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="course-concept" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">

                                    <p>7-1 المقرر عموما جيد</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-overall-course-is-good" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-overall-course-is-good" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-overall-course-is-good" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-overall-course-is-good" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-overall-course-is-good" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>

                </div>

                <hr/>


                <div class="group2">

                    <p class="h6"><u>2- مخرجات التعليم المستهدفه</u></p>
                    <br/>
                    <ul>

                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-2 المقرر له اهداف واضحه و معلنه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-goals-are-clear-and-public" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-goals-are-clear-and-public" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-goals-are-clear-and-public" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-goals-are-clear-and-public" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-goals-are-clear-and-public" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-2 المقرر يزودني بالمعرفه المفيده و الفهم المتعمق للموضوع</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-provides-me-with-useful-knowledge-and-in-depth-understanding-of-the-subject" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-provides-me-with-useful-knowledge-and-in-depth-understanding-of-the-subject" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-provides-me-with-useful-knowledge-and-in-depth-understanding-of-the-subject" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-provides-me-with-useful-knowledge-and-in-depth-understanding-of-the-subject" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-provides-me-with-useful-knowledge-and-in-depth-understanding-of-the-subject" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-2 المقرر يحفزني على التفكير</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-motivates-me-to-think" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-motivates-me-to-think" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-motivates-me-to-think" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-motivates-me-to-think" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-course-motivates-me-to-think" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-2 اكسبني المقرر المهارات المهنيه التي تفيد في الحياه العمليه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Earn-professional-decision-making-skills-that-will-benefit-your-business" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Earn-professional-decision-making-skills-that-will-benefit-your-business" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Earn-professional-decision-making-skills-that-will-benefit-your-business" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Earn-professional-decision-making-skills-that-will-benefit-your-business" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Earn-professional-decision-making-skills-that-will-benefit-your-business" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>



                    </ul>
                </div>

                <hr/>





                <div class="group3">

                    <p class="h6"><u>3- المحضرات</u></p>
                    <br/>
                    <ul>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-3 يتم تقديم المحاضرات وفقا لترتيب الجداول المعلنه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-offered-according-to-the-order-of-the-tables" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-offered-according-to-the-order-of-the-tables" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-offered-according-to-the-order-of-the-tables" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-offered-according-to-the-order-of-the-tables" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-offered-according-to-the-order-of-the-tables" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-3 تساهم المحاضرات تفهم موضوع المقرر</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-contribute-to-understanding-the-subject-of-the-course" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-contribute-to-understanding-the-subject-of-the-course" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-contribute-to-understanding-the-subject-of-the-course" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-contribute-to-understanding-the-subject-of-the-course" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-contribute-to-understanding-the-subject-of-the-course" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-3 تغطي المحاضرات كل الموضعات الموجوده بالمحتوى</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-cover-all-the-positions-in-the-content" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-cover-all-the-positions-in-the-content" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-cover-all-the-positions-in-the-content" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-cover-all-the-positions-in-the-content" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-cover-all-the-positions-in-the-content" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-3 يتم تقديم المحاضرات بأسلوب مشوق</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-presented-in-an-interesting-manner" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-presented-in-an-interesting-manner" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-presented-in-an-interesting-manner" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-presented-in-an-interesting-manner" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-are-presented-in-an-interesting-manner" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>5-3 تضمن المحاضرات المشاركه من جانب الطلاب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-included-participation-by-students" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-included-participation-by-students" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-included-participation-by-students" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-included-participation-by-students" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="lectures-included-participation-by-students" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>6-3 اشتملت المحاضرات على حالات عمليه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-included-practical-cases" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-included-practical-cases" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-included-practical-cases" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-included-practical-cases" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-lectures-included-practical-cases" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>7-3 مقدار المعلومات المقدمه في المحاضرات مناسب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-amount-of-information-presented-in-the-lectures-is-appropriate" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-amount-of-information-presented-in-the-lectures-is-appropriate" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-amount-of-information-presented-in-the-lectures-is-appropriate" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-amount-of-information-presented-in-the-lectures-is-appropriate" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-amount-of-information-presented-in-the-lectures-is-appropriate" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>8-3 كتاب المقرر او (المذكره) يعتبر مناسب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="book-or-course-is-considered-appropriate" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="book-or-course-is-considered-appropriate" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="book-or-course-is-considered-appropriate" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="book-or-course-is-considered-appropriate" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="book-or-course-is-considered-appropriate" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>



                <hr/>



                <div class="group4">

                    <p class="h6"><u>4- المحاضر</u></p>
                    <br/>

                    <ul>

                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-4 يلتزم دائما المحاضر بمحتوى المقرر</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-content-of-the-course" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-content-of-the-course" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-content-of-the-course" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-content-of-the-course" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-content-of-the-course" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-4 يلتزم دائما المحاضر بمواعيد بدء و أنتهاء المحاضره</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-4 اشعر بأن المحاضر دائما مستعد جيدا للمحاضره</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-4 يعالج المحاضر موضوعات المقرر بعمق</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-deals-with-the-subjects-of-the-course-in-depth" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-deals-with-the-subjects-of-the-course-in-depth" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-deals-with-the-subjects-of-the-course-in-depth" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-deals-with-the-subjects-of-the-course-in-depth" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-deals-with-the-subjects-of-the-course-in-depth" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>5-4 يشجع المحاضر الطلاب على الأسئله و التعبير عن وجهه نظرهم</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>6-4 يستثمر المحاضر وقت المحاضره في التدريس الفعلي</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-invests-the-lecture-time-in-actual-teaching" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-invests-the-lecture-time-in-actual-teaching" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-invests-the-lecture-time-in-actual-teaching" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-invests-the-lecture-time-in-actual-teaching" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-invests-the-lecture-time-in-actual-teaching" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>7-4 يبدو المحاضر ذو معرفه عاليه بموضوع المقرر</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>8-4 يحافظ المحاضر على جذب انتباهي</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-keeps-my-attention" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-keeps-my-attention" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-keeps-my-attention" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-keeps-my-attention" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-keeps-my-attention" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>9-4 يعامل المحاضر الطلاب بأحترام</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-treats-the-students-with-respect" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-treats-the-students-with-respect" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-treats-the-students-with-respect" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-treats-the-students-with-respect" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-treats-the-students-with-respect" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>10-4 يقدم المحاضر أمثله و حالات عمليه فعاليه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-presents-examples-and-practical-cases" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-presents-examples-and-practical-cases" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-presents-examples-and-practical-cases" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-presents-examples-and-practical-cases" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-instructor-presents-examples-and-practical-cases" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>



                    </ul>
                </div>


                <hr/>




                <div class="group5">

                    <p class="h6"><u>5- عضو الهيئة المعاونة</u></p>
                    <br/>

                    <ul>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-5 يعتبر دور عضو الهيئة المعاونة فعال</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-role-of-the-assistant-professor-is-effective" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-role-of-the-assistant-professor-is-effective" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-role-of-the-assistant-professor-is-effective" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-role-of-the-assistant-professor-is-effective" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-role-of-the-assistant-professor-is-effective" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-5 عضو الهيئة المعاونة دائما على استعداد للرد على اي الاستفسارات</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-is-always-willing-to-answer-any-queries" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-is-always-willing-to-answer-any-queries" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-is-always-willing-to-answer-any-queries" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-is-always-willing-to-answer-any-queries" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-is-always-willing-to-answer-any-queries" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-5 يبدو عضو الهيئة المعاونة ملما بموضوعات المقرر</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-5 يوفر عضو الهيئة المعاونة الهيئة المعاونة لنا التطبيقات الكافية</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-provides-us-with-enough-applications" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-provides-us-with-enough-applications" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-provides-us-with-enough-applications" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-provides-us-with-enough-applications" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="A-assistant-professor-provides-us-with-enough-applications" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>5-5 يقدم عضو الهيئة المعاونة المساعدة لكل طالب عند الحاجة لذلك</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-assistant-professor-provide-assistance-to-each-student-when-necessary" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-assistant-professor-provide-assistance-to-each-student-when-necessary" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-assistant-professor-provide-assistance-to-each-student-when-necessary" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-assistant-professor-provide-assistance-to-each-student-when-necessary" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-assistant-professor-provide-assistance-to-each-student-when-necessary" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>


                <hr/>




                <div class="group6">

                    <p class="h6"><u>6- نظام التقويم</u></p>
                    <br/>
                    <ul>

                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-6 يعتبر جدول الامتحانات مناسب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exam-schedule-is-appropriate" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exam-schedule-is-appropriate" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exam-schedule-is-appropriate" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exam-schedule-is-appropriate" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exam-schedule-is-appropriate" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-6 يتم الإعلان عن مواعيد الامتحانات مبكرا</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examination-dates-are-announced-early" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examination-dates-are-announced-early" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examination-dates-are-announced-early" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examination-dates-are-announced-early" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examination-dates-are-announced-early" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-6 يعتبر عدد امتحانات اعمال الفصل مناسب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-number-of-exams-in-the-classroom-is-appropriate" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-number-of-exams-in-the-classroom-is-appropriate" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-number-of-exams-in-the-classroom-is-appropriate" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-number-of-exams-in-the-classroom-is-appropriate" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-number-of-exams-in-the-classroom-is-appropriate" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-6 تتصف الامتحانات بالموضوعيه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-are-objective" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-are-objective" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-are-objective" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-are-objective" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-are-objective" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>5-6 الوقت المخصص لامتحانات مناسب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-time-allotted-for-appropriate-exams" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-time-allotted-for-appropriate-exams" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-time-allotted-for-appropriate-exams" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-time-allotted-for-appropriate-exams" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-time-allotted-for-appropriate-exams" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>6-6 تغطي الامتحانات محتوي المقرر</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exams-cover-the-content-of-the-course" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exams-cover-the-content-of-the-course" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exams-cover-the-content-of-the-course" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exams-cover-the-content-of-the-course" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-exams-cover-the-content-of-the-course" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>7-6 تركز الامتحانات على الجوانب النظرية والعملية في المقرر</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>8-6 تعتبر اللغة المستخدمة في الامتحانات واضحة ومفهومة</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-language-used-in-the-examinations-is-clear-and-understandable" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-language-used-in-the-examinations-is-clear-and-understandable" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-language-used-in-the-examinations-is-clear-and-understandable" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-language-used-in-the-examinations-is-clear-and-understandable" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-language-used-in-the-examinations-is-clear-and-understandable" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>9-6 لا تتضمن الامتحانات أخطاء مطبعية</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examinations-do-not-include-typographical-errors" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examinations-do-not-include-typographical-errors" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examinations-do-not-include-typographical-errors" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examinations-do-not-include-typographical-errors" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Examinations-do-not-include-typographical-errors" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>10-6 يتصف توزيع الدرجات المقرره بالعداله</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-distribution-of-grades-is-fair" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-distribution-of-grades-is-fair" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-distribution-of-grades-is-fair" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-distribution-of-grades-is-fair" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-distribution-of-grades-is-fair" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>



                    </ul>
                </div>



                <hr/>



                <div class="group7">

                    <p class="h6"><u>7- المعامل و الورش</u></p>
                    <br/>
                    <ul>

                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-7 يتوفر بالمعهد معامل كافية لتحقيق اهداف التحقیق كافية لتحقيق اهداف العملية التعليمية</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-7 يوجد بالمعامل الأجهزة والمعدات الحديثة</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Factories-have-modern-equipment-and-equipment" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Factories-have-modern-equipment-and-equipment" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Factories-have-modern-equipment-and-equipment" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Factories-have-modern-equipment-and-equipment" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Factories-have-modern-equipment-and-equipment" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-7 يتصف تصميم المعامل بالجاذبيه والملائمه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-design-of-the-plants-is-attractive-and-appropriate" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-design-of-the-plants-is-attractive-and-appropriate" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-design-of-the-plants-is-attractive-and-appropriate" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-design-of-the-plants-is-attractive-and-appropriate" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-design-of-the-plants-is-attractive-and-appropriate" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-7 يتصف الفنيون بالمعامل بالكفاءه العاليه</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-technicians-are-characterized-by-high-efficiency-laboratories" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-technicians-are-characterized-by-high-efficiency-laboratories" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-technicians-are-characterized-by-high-efficiency-laboratories" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-technicians-are-characterized-by-high-efficiency-laboratories" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-technicians-are-characterized-by-high-efficiency-laboratories" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>5-7 تعتبر المساحة المتاحة للمعامل مناسبة لعدد الطلاب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>6-7 تعتبر الورش المتاحة مجهزة بالمعدات الحديثة</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshops-available-are-equipped-with-modern-equipment" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshops-available-are-equipped-with-modern-equipment" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshops-available-are-equipped-with-modern-equipment" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshops-available-are-equipped-with-modern-equipment" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshops-available-are-equipped-with-modern-equipment" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>7-7 تتناسب مساحة الورش مع أعداد الطلاب</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-size-of-the-workshops-is-proportional-to-the-number-of-students" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-size-of-the-workshops-is-proportional-to-the-number-of-students" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-size-of-the-workshops-is-proportional-to-the-number-of-students" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-size-of-the-workshops-is-proportional-to-the-number-of-students" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-size-of-the-workshops-is-proportional-to-the-number-of-students" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>8-7 يتصف الفنيون العاملون بالورش بالكفاءة العالية</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshop-technicians-are-highly-efficient" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshop-technicians-are-highly-efficient" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshop-technicians-are-highly-efficient" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshop-technicians-are-highly-efficient" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="The-workshop-technicians-are-highly-efficient" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>



                    </ul>
                </div>



                <hr/>



                <div class="group8">

                    <p class="h6"><u>8- المدرجات و قاعات التدريس</u></p>
                    <br/>
                    <ul>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>1-8 الموقع</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Site" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Site" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Site" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Site" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Site" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>2-8 الحجم</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="size" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="size" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="size" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="size" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="size" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>3-8 عدد المقاعد / البنشات</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Number-of-Seats/Punches" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Number-of-Seats/Punches" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Number-of-Seats/Punches" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Number-of-Seats/Punches" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Number-of-Seats/Punches" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>4-8 تسهيلات التدريس سبورة - داتا شو- بروجيكتور</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Teaching-facilities" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Teaching-facilities" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Teaching-facilities" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Teaching-facilities" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Teaching-facilities" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>5-8 الهدوء</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Quiet" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Quiet" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Quiet" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Quiet" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Quiet" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>6-8 الاضاءة</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Lighting" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Lighting" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Lighting" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Lighting" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Lighting" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div class='row'>
                                <div class="col-lg-8 col-sm-6">
                                    <p>7-8 النظافة</p>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Cleanliness" value="1" autocomplete="off" required> 1
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Cleanliness" value="2" autocomplete="off"> 2
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Cleanliness" value="3" autocomplete="off"> 3
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Cleanliness" value="4" autocomplete="off"> 4
                                        </label>

                                        <label class="btn btn-secondary">
                                            <input type="radio" name="Cleanliness" value="5" autocomplete="off"> 5
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>




                <hr/>


                <div class="group9">

                    <p class="h6"><u>9- أخرى</u></p>
                    <br/>
                    <ul>


                        <li>
                            <p>1-9 حب في المقرر :</p>
                            <textarea required></textarea>
                        </li>


                        <li>
                            <p>2-9 لا أحب في المقرر :</p>
                            <textarea required></textarea>
                        </li>

                        <li>
                            <p>3-9 لا أحب في المقرر :</p>
                            <textarea required></textarea>
                        </li>

                    </ul>
                </div>







                <button type="submit" id="sub-button" class="btn btn-primary submit-button">Submit</button>

            </form>
            <button id="up-button">Up</button>

        </div>

    </section>
@endsection
@section('footer')
    {!! Html::script('website/js/poll-page.js') !!}
@endsection
