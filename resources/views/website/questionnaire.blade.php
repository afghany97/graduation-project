@extends('layouts.app')
@section('header')
    {!! Html::style('website/css/poll-page-style.css') !!}
@endsection
@section('content')
    <section class="poll">

        <div class="container">
            <div class="description">

                <p class="h5">please fill this form is required
                    :</p>

                <div class="row">
                    <ul class="list-unstyled">

                        <li class="col-md-12">
                            <p>-<strong>Subject name:</strong> {{$subject->name}}</p>
                        </li>

                        <li class="col-md-12">
                            <p>-<strong>Subject code:</strong> {{$subject->code}}</p>
                        </li>
                        <li class="col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <p>-<strong>Select group number:</strong></p>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1" required>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>
                            </div>
                        </li>
                        <li class="col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <p>-<strong>Select Doctor:</strong> Dr..</p>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                    @endforeach


                                </select>
                            </div>

                        </li>

                        <li class="col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <p>-<strong>Select Doctor assistant:</strong> eng.</p>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1" required>mohamed abdelhady</option>
                                    <option value="2">mahmoud ahmed</option>
                                    <option value="3">ahmed ali</option>
                                    <option value="4">ahmed sameh</option>

                                </select>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>
            <hr>
            <div class="description">

                <p class="h5">Students should choose the grade of assessment according to the following instructions
                    :</p>

                <div class="row">
                    <ul class="list-unstyled">

                        <li class="col-md-12">
                            <p><span class="num">1</span> Completely agree</p>
                        </li>

                        <li class="col-md-12">
                            <p><span class="num">2</span> Agree</p>
                        </li>

                        <li class="col-md-12">
                            <p><span class="num">3</span> Not Good Enough</p>
                        </li>

                        <li class="col-md-12">
                            <p><span class="num">4</span> Disagree</p>
                        </li>

                        <li class="col-md-12">
                            <p><span class="num">5</span> Completely disagree</p>
                        </li>

                    </ul>
                </div>

            </div>

            <form method="post" action="/questionnaire/create">
                <div class="poll-form">

                    <div class="group1">

                        <p class="h6"><u>General opinions about the course</u></p>

                        <ul>
                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The course is interesting</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-interesting" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-interesting" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-interesting" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-interesting" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-interesting" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The course is related to specialization</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-related-to-specialization"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-related-to-specialization"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-related-to-specialization"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-related-to-specialization"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-is-related-to-specialization"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The course contains updated information</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-contains-updated-information"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-contains-updated-information"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-contains-updated-information"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-contains-updated-information"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-contains-updated-information"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The course meets my expectations</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-meets-my-expectations" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-meets-my-expectations" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-meets-my-expectations" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-meets-my-expectations" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-meets-my-expectations" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The course is useful in scientific application</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-course-is-useful-in-scientific-application" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-course-is-useful-in-scientific-application" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-course-is-useful-in-scientific-application" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-course-is-useful-in-scientific-application" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-course-is-useful-in-scientific-application" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Course concept</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="course-concept" value="1" autocomplete="off"
                                                       required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="course-concept" value="2" autocomplete="off">
                                                2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="course-concept" value="3" autocomplete="off">
                                                3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="course-concept" value="4" autocomplete="off">
                                                4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="course-concept" value="5" autocomplete="off">
                                                5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The overall course is good</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-overall-course-is-good" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-overall-course-is-good" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-overall-course-is-good" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-overall-course-is-good" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-overall-course-is-good" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>


                    <div class="group2">

                        <p class="h6"><u>Targeted learning outcomes</u></p>

                        <ul>

                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The goals are clear and public</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-goals-are-clear-and-public" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-goals-are-clear-and-public" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-goals-are-clear-and-public" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-goals-are-clear-and-public" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-goals-are-clear-and-public" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The course provides me with useful knowledge and in-depth understanding of
                                            the subject</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="understanding-subject" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="understanding-subject" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="understanding-subject" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="understanding-subject" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="understanding-subject" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The course motivates me to think</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-motivates-me-to-think" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-motivates-me-to-think" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-motivates-me-to-think" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-motivates-me-to-think" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-course-motivates-me-to-think" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Earn professional decision-making skills that will benefit your business</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Earn-professional-decision-making-skills-that-will-benefit-your-business"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Earn-professional-decision-making-skills-that-will-benefit-your-business"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Earn-professional-decision-making-skills-that-will-benefit-your-business"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Earn-professional-decision-making-skills-that-will-benefit-your-business"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Earn-professional-decision-making-skills-that-will-benefit-your-business"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>


                    <div class="group3">

                        <p class="h6"><u>Lectures</u></p>

                        <ul>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Lectures are offered according to the order of the tables</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-offered-according-to-the-order-of-the-tables"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-offered-according-to-the-order-of-the-tables"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-offered-according-to-the-order-of-the-tables"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-offered-according-to-the-order-of-the-tables"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-offered-according-to-the-order-of-the-tables"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The lectures contribute to understanding the subject of the course</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-contribute-to-understanding-the-subject-of-the-course"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-contribute-to-understanding-the-subject-of-the-course"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-contribute-to-understanding-the-subject-of-the-course"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-contribute-to-understanding-the-subject-of-the-course"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-contribute-to-understanding-the-subject-of-the-course"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The lectures cover all the positions in the content</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-cover-all-the-positions-in-the-content"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-cover-all-the-positions-in-the-content"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-cover-all-the-positions-in-the-content"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-cover-all-the-positions-in-the-content"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-lectures-cover-all-the-positions-in-the-content"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Lectures are presented in an interesting manner</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-presented-in-an-interesting-manner" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-presented-in-an-interesting-manner" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-presented-in-an-interesting-manner" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-presented-in-an-interesting-manner" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="lectures-are-presented-in-an-interesting-manner" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Lectures included participation by students</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="lectures-included-participation-by-students"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="lectures-included-participation-by-students"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="lectures-included-participation-by-students"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="lectures-included-participation-by-students"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="lectures-included-participation-by-students"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The lectures included practical cases</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-lectures-included-practical-cases"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-lectures-included-practical-cases"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-lectures-included-practical-cases"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-lectures-included-practical-cases"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="the-lectures-included-practical-cases"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The amount of information presented in the lectures is appropriate</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-amount-of-information-presented-in-the-lectures-is-appropriate"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-amount-of-information-presented-in-the-lectures-is-appropriate"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-amount-of-information-presented-in-the-lectures-is-appropriate"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-amount-of-information-presented-in-the-lectures-is-appropriate"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-amount-of-information-presented-in-the-lectures-is-appropriate"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>A book or course (note) is considered appropriate</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="book-or-course-is-considered-appropriate"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="book-or-course-is-considered-appropriate"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="book-or-course-is-considered-appropriate"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="book-or-course-is-considered-appropriate"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="book-or-course-is-considered-appropriate"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>


                    <div class="group4">

                        <p class="h6"><u>The Instructor</u></p>

                        <ul>

                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor is always committed to the content of the course</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-content-of-the-course"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-content-of-the-course"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-content-of-the-course"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-content-of-the-course"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-content-of-the-course"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor is always committed to the start and end of the lecture</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="the-instructor-is-always-committed-to-the-start and-end-of-the-lecture"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>I feel that the instructor is always well prepared for the lecture</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="I-feel-that-the-instructor-is-always-well-prepared-for-the-lecture"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor deals with the subjects of the course in depth</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-deals-with-the-subjects-of-the-course-in-depth"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-deals-with-the-subjects-of-the-course-in-depth"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-deals-with-the-subjects-of-the-course-in-depth"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-deals-with-the-subjects-of-the-course-in-depth"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-deals-with-the-subjects-of-the-course-in-depth"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor encourages students to ask questions and express their point
                                            of view</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-encourages-students-to-ask-questions-and-express-their-point-of-view"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor invests the lecture time in actual teaching</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-invests-the-lecture-time-in-actual-teaching"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-invests-the-lecture-time-in-actual-teaching"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-invests-the-lecture-time-in-actual-teaching"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-invests-the-lecture-time-in-actual-teaching"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-invests-the-lecture-time-in-actual-teaching"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor seems to have a high knowledge of the subject of the
                                            course</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-seems-to-have-a-high-knowledge-of-the-subject-of-the-course"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor keeps my attention</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-instructor-keeps-my-attention" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-instructor-keeps-my-attention" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-instructor-keeps-my-attention" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-instructor-keeps-my-attention" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-instructor-keeps-my-attention" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor treats the students with respect</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-treats-the-students-with-respect" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-treats-the-students-with-respect" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-treats-the-students-with-respect" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-treats-the-students-with-respect" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-treats-the-students-with-respect" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The instructor presents examples and practical cases</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-presents-examples-and-practical-cases"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-presents-examples-and-practical-cases"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-presents-examples-and-practical-cases"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-presents-examples-and-practical-cases"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-instructor-presents-examples-and-practical-cases"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>


                    <div class="group5">

                        <p class="h6"><u>Assistant Professor</u></p>

                        <ul>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The role of the assistant professor is effective</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-role-of-the-assistant-professor-is-effective" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-role-of-the-assistant-professor-is-effective" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-role-of-the-assistant-professor-is-effective" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-role-of-the-assistant-professor-is-effective" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-role-of-the-assistant-professor-is-effective" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>A assistant professor is always willing to answer any queries</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-is-always-willing-to-answer-any-queries"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-is-always-willing-to-answer-any-queries"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-is-always-willing-to-answer-any-queries"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-is-always-willing-to-answer-any-queries"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-is-always-willing-to-answer-any-queries"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>A assistant professor appears to be familiar with the subjects of the
                                            course</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-appears-to-be-familiar-with-the-subjects-of-the-course"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>A assistant professor provides us with enough applications</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-provides-us-with-enough-applications"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-provides-us-with-enough-applications"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-provides-us-with-enough-applications"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-provides-us-with-enough-applications"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="A-assistant-professor-provides-us-with-enough-applications"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The assistant professor provide assistance to each student when necessary</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-assistant-professor-provide-assistance-to-each-student-when-necessary"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-assistant-professor-provide-assistance-to-each-student-when-necessary"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-assistant-professor-provide-assistance-to-each-student-when-necessary"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-assistant-professor-provide-assistance-to-each-student-when-necessary"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-assistant-professor-provide-assistance-to-each-student-when-necessary"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>


                    <div class="group6">

                        <p class="h6"><u>Exams Systems</u></p>

                        <ul>

                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The exam schedule is appropriate</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exam-schedule-is-appropriate" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exam-schedule-is-appropriate" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exam-schedule-is-appropriate" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exam-schedule-is-appropriate" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exam-schedule-is-appropriate" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Examination dates are announced early</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Examination-dates-are-announced-early"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Examination-dates-are-announced-early"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Examination-dates-are-announced-early"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Examination-dates-are-announced-early"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Examination-dates-are-announced-early"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The number of exams in the classroom is appropriate</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-number-of-exams-in-the-classroom-is-appropriate"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-number-of-exams-in-the-classroom-is-appropriate"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-number-of-exams-in-the-classroom-is-appropriate"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-number-of-exams-in-the-classroom-is-appropriate"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-number-of-exams-in-the-classroom-is-appropriate"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The examinations are objective</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-examinations-are-objective" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-examinations-are-objective" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-examinations-are-objective" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-examinations-are-objective" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-examinations-are-objective" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The time allotted for appropriate exams</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-time-allotted-for-appropriate-exams"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-time-allotted-for-appropriate-exams"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-time-allotted-for-appropriate-exams"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-time-allotted-for-appropriate-exams"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-time-allotted-for-appropriate-exams"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The exams cover the content of the course</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exams-cover-the-content-of-the-course"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exams-cover-the-content-of-the-course"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exams-cover-the-content-of-the-course"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exams-cover-the-content-of-the-course"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-exams-cover-the-content-of-the-course"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The examinations focus on the theoretical and practical aspects of the
                                            course</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-examinations-focus-on-the-theoretical-and-practical-aspects-of-the-course"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The language used in the examinations is clear and understandable</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-language-used-in-the-examinations-is-clear-and-understandable"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-language-used-in-the-examinations-is-clear-and-understandable"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-language-used-in-the-examinations-is-clear-and-understandable"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-language-used-in-the-examinations-is-clear-and-understandable"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-language-used-in-the-examinations-is-clear-and-understandable"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Examinations do not include typographical errors</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Examinations-do-not-include-typographical-errors" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Examinations-do-not-include-typographical-errors" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Examinations-do-not-include-typographical-errors" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Examinations-do-not-include-typographical-errors" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="Examinations-do-not-include-typographical-errors" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The distribution of grades is fair</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-distribution-of-grades-is-fair" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-distribution-of-grades-is-fair" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-distribution-of-grades-is-fair" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-distribution-of-grades-is-fair" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-distribution-of-grades-is-fair" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>


                    <div class="group7">

                        <p class="h6"><u>Laboratories and workshops</u></p>

                        <ul>

                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The institute has enough labs to achieve the objectives of the investigation
                                            sufficient to achieve the goals of the educational process</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-institute-has-enough-labs-to-achieve-the-objectives-of-the-investigation-sufficient-to-achieve-the-goals-of-the-educational-process"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Factories have modern equipment and equipment</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Factories-have-modern-equipment-and-equipment"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Factories-have-modern-equipment-and-equipment"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Factories-have-modern-equipment-and-equipment"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Factories-have-modern-equipment-and-equipment"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Factories-have-modern-equipment-and-equipment"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The design of the plants is attractive and appropriate</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-design-of-the-plants-is-attractive-and-appropriate"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-design-of-the-plants-is-attractive-and-appropriate"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-design-of-the-plants-is-attractive-and-appropriate"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-design-of-the-plants-is-attractive-and-appropriate"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-design-of-the-plants-is-attractive-and-appropriate"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The technicians are characterized by high efficiency laboratories</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-technicians-are-characterized-by-high-efficiency-laboratories"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-technicians-are-characterized-by-high-efficiency-laboratories"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-technicians-are-characterized-by-high-efficiency-laboratories"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-technicians-are-characterized-by-high-efficiency-laboratories"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-technicians-are-characterized-by-high-efficiency-laboratories"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The space available to the laboratories is suitable for the number of
                                            students</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-space-available-to-the-laboratories-is-suitable-for-the-number-of-students"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The workshops available are equipped with modern equipment</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-workshops-available-are-equipped-with-modern-equipment"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-workshops-available-are-equipped-with-modern-equipment"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-workshops-available-are-equipped-with-modern-equipment"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-workshops-available-are-equipped-with-modern-equipment"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-workshops-available-are-equipped-with-modern-equipment"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The size of the workshops is proportional to the number of students</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-size-of-the-workshops-is-proportional-to-the-number-of-students"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-size-of-the-workshops-is-proportional-to-the-number-of-students"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-size-of-the-workshops-is-proportional-to-the-number-of-students"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-size-of-the-workshops-is-proportional-to-the-number-of-students"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio"
                                                       name="The-size-of-the-workshops-is-proportional-to-the-number-of-students"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>The workshop technicians are highly efficient</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-workshop-technicians-are-highly-efficient"
                                                       value="1" autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-workshop-technicians-are-highly-efficient"
                                                       value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-workshop-technicians-are-highly-efficient"
                                                       value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-workshop-technicians-are-highly-efficient"
                                                       value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="The-workshop-technicians-are-highly-efficient"
                                                       value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>


                    <div class="group8">

                        <p class="h6"><u>Terraces and classrooms</u></p>

                        <ul>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Site</p>
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
                                        <p>the size</p>
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
                                        <p>Number of Seats / Punches</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="seats_number" value="1" autocomplete="off"
                                                       required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="seats_number" value="2" autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="seats_number" value="3" autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="seats_number" value="4" autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="seats_number" value="5" autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Teaching facilities (blackboard - data show - projector)</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Teaching-facilities" value="1"
                                                       autocomplete="off" required> 1
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Teaching-facilities" value="2"
                                                       autocomplete="off"> 2
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Teaching-facilities" value="3"
                                                       autocomplete="off"> 3
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Teaching-facilities" value="4"
                                                       autocomplete="off"> 4
                                            </label>

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Teaching-facilities" value="5"
                                                       autocomplete="off"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class='row'>
                                    <div class="col-lg-8 col-sm-6">
                                        <p>Quiet</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Quiet" value="1" autocomplete="off" required>
                                                1
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
                                        <p>Lighting</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Lighting" value="1" autocomplete="off"
                                                       required> 1
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
                                        <p>Cleanliness</p>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                            <label class="btn btn-secondary">
                                                <input type="radio" name="Cleanliness" value="1" autocomplete="off"
                                                       required> 1
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


                    <div class="group9">

                        <p class="h6"><u>Others</u></p>

                        <ul>

                            <li>
                                <p>I like in course</p>
                                <textarea required></textarea>
                            </li>


                            <li>
                                <p>I dislike in course</p>
                                <textarea required></textarea>
                            </li>


                            <li>
                                <p>In your opinion how can you improve or develop this course !?</p>
                                <textarea required></textarea>
                            </li>

                        </ul>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary ">Submit</button>
            </form>
            <button id="up-button">Up</button>

        </div>

    </section>
@endsection
@section('footer')
    {!! Html::script('website/js/poll-page.js') !!}
@endsection
