@extends('website.layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <h2>Courses</h2>
        </div>
    </div>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <section id="cource-details-tabs" class="cource-details-tabs">
                <div class="container" data-aos="fade-up">
                    <!-- ======= Courses Section ======= -->
                    <section id="courses" class=" cource-details-tabs bg-white p-4 shadow-sm">
                        <div class="container" data-aos="fade-up">

                            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                                @foreach ($courses as $index => $course)
                                
                                {{-- @if(($index+1)%3 == 0)
                                <br>
                                <br>
                                @endif --}}
                                <div class="col-lg-4 col-md-4 d-flex align-items-stretch mb-5">
                                    <div class="course-item">
                                        <img src="{{ $course->image }}" class="img-fluid" alt="..." style="width: 311.77px; height: 189.86px !important;">
                                        <div class="course-content pt-2">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                                    <a href="{{route('register.show' , $course->id)}}" class="get-started-btn rounded-sm">Get Started</a>

                                                </div>
                                                <p class="price">${{$course->feeses}}</p>
                                            </div>
                                            <p style="font-size: 0.72rem; color:#ccc">{{$course->name}}</p>
                                            <p>{{ Str::limit($course->description , 60 )}}</p>
                                            <h4><a href="{{route('course.show' , $course->id)}}">Course Details</a></h4>
                                            <div class="trainer d-flex justify-content-between align-items-center">
                                                <div class="trainer-profile d-flex align-items-center">

                                                </div>
                                                <div class="trainer-rank d-flex align-items-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Course Item-->
                                @endforeach

                            </div>

                        </div>
                        {{$courses->links()}}
                    </section><!-- End Courses Section -->
                </div>
            </section>
        </div>
    </section>
@endsection
