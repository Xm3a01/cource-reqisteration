@extends('website.layouts.app')

@section('content')
<div class="breadcrumbs">
    <div class="container">
      <h2>Gallery</h2>
    </div>
  </div>
  <!-- ======= Courses Section ======= -->
  <section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="row bg-white rounded-sm shadow-sm p-5" data-aos="zoom-in" data-aos-delay="100">

        @foreach ($galleries as $gallery)
            
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
          <div class="course-item">
           <a target="_blank" href="{{$gallery->image}}">
              <img src="{{$gallery->image}}" class="img-fluid" alt="..." style="height: 276px; width: 315px;">
            </a>
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
        
                   <h3>{{$gallery->title}}</h3>

                    </div>
              </div>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <p>{{$gallery->content}}.  </p>

                </div>
                <div class="trainer-rank d-flex align-items-center">
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
        @endforeach
  
      </div>
      <div class="pt-4">
        {{$galleries->links()}}
      </div>
    </div>
     
  </section><!-- End Courses Section -->
@endsection