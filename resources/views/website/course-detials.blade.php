@extends('website.layouts.app')

@section('content')
     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
          <h2>Course Details</h2>
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= Cource Details Section ======= -->
      <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-8">
              <img src="{{$course->image}}" class="img-fluid" alt="">
              <h3>{{$course->name}}</h3>
              <p>
                {{$course->description}}
              </p>
              <a href="{{route('register.show' , $course->id ?? "")}}" class="get-started-btn">Get Started</a>
            </div>
           
  
            <div class="col-lg-4">

              <div class="course-info d-flex justify-content-between align-items-center">
                  <h5>Monthes</h5>
                  <p>{{$course->monthes ?? ""}}</p>
              </div>
              <div class="course-info d-flex justify-content-between align-items-center">
                  <h5>H/W</h5>
                  <p>{{$course->h_week ?? ""}}</p>
              </div>
              <div class="course-info d-flex justify-content-between align-items-center">
                  <h5>Trainer</h5>
                  <p><a href="#">{{$course->trainer->name ?? ""}}</a></p>
              </div>
              
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5>Course amount</h5>
                <p>${{$course->amount ?? ""}}</p>
              </div>
              
              <div class="course-info d-flex justify-content-between align-items-center">
                  <h5>Course Fee</h5>
                  <p>${{$course->feeses ?? ""}}</p>
              </div>


              <div class="course-info d-flex justify-content-between align-items-center">
                  <h5>Available seats</h5>
                  <p>{{$course->seats ?? ""}}</p>
              </div>

              <div class="course-info d-flex justify-content-between align-items-center">
                  <h5>Schedule</h5>
                  <p>{{$course->period ?? ""}}</p>
              </div>

          </div>
          </div>
  
        </div>
      </section><!-- End Cource Details Section -->
@endsection