@extends('website.layouts.app')

@section('content')
   <div class="breadcrumbs">
      <div class="container">
        <h2>Events</h2>
      </div>
    </div><!-- End Breadcrumbs -->

      <!-- ======= Events Section ======= -->
      <section id="events" class="events">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            @foreach ($events as $event)
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-img" style="    width: 540.04px; height: 359.89px;">
                  <img src="{{$event->image}}" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">{{$event->name}}</a></h5>
                  <p class="font-italic text-center">{{$event->date}}</p>         {{--Sunday, September 26th at 7:00 pm--}}
                  <p class="card-text">{{$event->content}}</p>
                </div>
              </div>
            </div>
                
            @endforeach
          </div>
  
          {{$events->links()}}
        </div>
      </section><!-- End Events Section -->

@endsection