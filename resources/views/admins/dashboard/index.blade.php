@extends('admins.dashboard.master')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-single-02 text-success"></i>
                            </div>
                        </div>
                        {{-- This For managers --}}
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Managers
                                </p>
                                <p class="card-title">
                                    {{ $managers ?? '' }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-users"></i>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-caps-small text-success"></i>
                            </div>
                        </div>
                        {{-- This For Course --}}
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Cources
                                </p>
                                <p class="card-title">
                                    {{ $cources ?? '' }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clipboard"></i>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-bell-55 text-success"></i>
                            </div>
                        </div>
                        {{-- This For events --}}
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Events
                                </p>
                                <p class="card-title">
                                    {{ $events ?? '' }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-check-o"></i>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-badge text-warning"></i>
                            </div>
                        </div>
                        {{-- This For Student --}}
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Students
                                </p>
                                <p class="card-title">
                                    {{ $students ?? '' }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-users"></i>

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
