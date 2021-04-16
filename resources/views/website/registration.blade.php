@extends('website.layouts.app')
@section('styles')

@endsection

@section('content')

    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Course Registration</h2>
        </div>
    </div>
    <div id="app">
        <vue-reg :course = "{{$course}}" />
      </div>
      
      <script src="/js/app.js"></script>
 @endsection
