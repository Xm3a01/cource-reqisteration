@extends('admins.dashboard.master')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
            <div class="row">
                <div class="col-5 col-md-4">
                <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                </div>
                </div>
                <div class="col-7 col-md-8">
                <div class="numbers">
                    <p class="card-category"></p>
                    <p class="card-title"><p>
                </div>
                </div>
            </div>
            </div>
            <div class="card-footer ">
            <hr>
            <div class="stats">
                <i class="fa fa-refresh"></i>
                
            </div>
            </div>
        </div>
        </div>
        
      </div> 

        <!-- <div class="row">
          <div class="col-md-12">
            <div class="card ">
             
            </div>
          </div>
        </div>
        <div class="row">
          
        </div>
      </div> -->
@endsection