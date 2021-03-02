@extends('website.layouts.app')

@section('content')

<div class="breadcrumbs">
    <div class="container">
      <h2>Trainers</h2>
    </div>
  </div>
 
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach ($trainers as $trainer)
            
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="{{$trainer->image}}" class="img-fluid" alt="" style="width: 357.09px; height: 243.9px;">
            <div class="member-content">
              <h4>{{$trainer->name}}</h4>
              <span>{{$trainer->job_title}}</span>
              <p>
               {{$trainer->description}}
              </p>
              <div class="social">
                @foreach ($trainer->links as $link)
                <a target="_blank" href="{{$link->link}}"><i class="{{$link->icon}}"></i></a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>

@endsection
