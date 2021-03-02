@extends('website.layouts.app')

@section('content')
    @include('website.includes._brand')
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <section id="cource-details-tabs" class="cource-details-tabs">
                <div class="container" data-aos="fade-up">

                    <!-- ======= Courses Section ======= -->
                    <section id="courses" class="courses bg-white p-4 rounded-sm shadow-sm">
                        <div class="container" data-aos="fade-up">
                            <h3 class="mb-5">Latest Courses</h3>
                            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                            @foreach ($courses as $index => $course)     
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                    <div class="course-item">
                                        <img src="{{$course->image}}" class="img-fluid" alt="..." style="width: 311.77px; height: 189.86px !important;">
                                        <div class="course-content">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                                    <a href="{{route('register.show' , $course->id)}}" class="get-started-btn rounded-sm">Get Started</a>
                                                </div>
                                                <p class="price">${{$course->feeses}}</p>
                                            </div>

                                            <div class="ml-1">
                                                
                                                <p style="font-size: 0.72rem; color:#ccc">{{$course->name}}</p>
                                                <p>{{ Str::limit($course->description , 60 )}}</p>
    
                                                <h3><a href="{{route('course.show', $course->id)}}">Course Details</a></h3>
                                            </div>
                                            <div class="trainer d-flex justify-content-between align-items-center">
                                                {{-- <div class="trainer-profile d-flex align-items-center">
                                                    
                                                </div> --}}
                                                {{-- <div class="trainer-rank d-flex align-items-center">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Course Item-->
                                @endforeach
                            </div>
                        </div>
                    </section><!-- End Cource Details Tabs Section -->
                   <section class="break-section"></section>
                    <!-- ======= Cource Details Section ======= -->
                    <section id="course-details" class="course-details bg-white p-4 rounded-sm shadow-sm">
                        <div class="container" data-aos="fade-up">
                            <h3 class="mb-5">Best Course</h3>
                            <div class="row">
                                <div class="col-lg-8">
                                    <img src="{{$lastCourse->image ?? ""}}" class="img-fluid" alt="">
                                    <h3>{{$lastCourse->name ?? ""}}</h3>
                                    <p>
                                        {{$lastCourse->description ?? ""}}.
                                    </p>
                                    <a href="{{route('register.show' , $lastCourse->id ?? "")}}" class="get-started-btn rounded-sm ml-1 mt-2">Get Started</a>
                                </div>


                                <div class="col-lg-4">

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Trainer</h5>
                                        <p><a href="#">{{$lastCourse->trainer->name ?? ""}}</a></p>
                                    </div>

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Course Fee</h5>
                                        <p>${{$lastCourse->feeses ?? ""}}</p>
                                    </div>

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Available seats</h5>
                                        <p>{{$lastCourse->seats ?? ""}}</p>
                                    </div>

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Schedule</h5>
                                        <p>{{$lastCourse->period ?? ""}}</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </section><!-- End Cource Details Section -->
                    <section class="break-section"></section>
                    <!-- ======= Cource Details Tabs Section ======= -->
                    <section id="cource-details-tabs" class="cource-details-tabs bg-white p-4 rounded-sm shadow-sm">
                        <h3 class="mb-5">Our Latest Events</h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="nav nav-tabs flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">{{$events[0]->name ?? ""}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-2">{{$events[1]->name ?? ""}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-3">{{$events[2]->name ?? ""}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-4">{{$events[3]->name ?? ""}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-5">{{$events[4]->name ?? ""}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9 mt-4 mt-lg-0">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab-1">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>{{$events[0]->name ?? ""}}</h3>
                                                <p class="font-italic">{{Str::limit($events[0]->content ?? "" , 100 , '')}}</p>
                                                <p>{{Str::substr($events[0]->content ?? "" , 99)}}</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="{{$events[0]->image ?? ""}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>{{$events[1]->name ?? ""}}</h3>
                                                <p class="font-italic">{{Str::limit($events[1]->content ?? "" , 100 , '')}}</p>
                                                <p>{{Str::substr($events[1]->content ?? "" , 99)}}</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="{{$events[1]->image ?? ""}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>{{$events[2]->name ?? ""}}</h3>
                                                <p class="font-italic">{{Str::limit($events[2]->content ?? "" , 100 , '')}}</p>
                                                <p>{{Str::substr($events[2]->content ?? "" , 99)}}</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="{{$events[2]->image ?? ""}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>{{$events[3]->name ?? ""}}</h3>
                                                <p class="font-italic">{{Str::limit($events[3]->content ?? "" , 100 , '')}}</p>
                                                <p>{{Str::substr($events[3]->content ?? "" , 99)}}</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="{{$events[3]->image ?? ""}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-5">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>{{$events[4]->name ?? ""}}</h3>
                                                <p class="font-italic">{{Str::limit($events[4]->content ?? "" , 100 , '')}}</p>
                                                <p>{{Str::substr($events[4]->content ?? "" , 99)}}</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="{{$events[4]->image ?? ""}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section><!-- End Cource Details Tabs Section -->

        </div>

    </section>

@endsection

<style>
    .break-section {
        background: #dfdddd81;
        width: 100%;
        /* position:absolute; */
    }

    .event-image {
        width: 235.53px;
        height: 235.53px;
    }
</style>