@extends('admins.dashboard.master')

@section('content')
<aside>
    <div class="container-fluid">

        @if (Auth::guard('admin')->user()->is_supervisor)

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-success">
                <div class="card-block p-b-0">
                    <div class="btn-group pull-left" >
                        <h4 class="totalPayment">
                            {{Auth::guard('admin')->user()->totalPayment}}
                        </h4>
                    </div>
                    
                    <p>كمية المشتريات</p>
                </div>
                <div class="chart-wrapper" style="height:70px;">
                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>

        @else

        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-primary">
                        <div class="card-block p-b-0">
                            <div class="btn-group pull-left">
                               <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                                <i class="icon-tag"></i>
                            </button>
                                
                            </div>
                            
                            <p>التصنيفات</p>
                        </div>
                        <div class="chart-wrapper p-x-1" style="height:70px;">
                            <canvas id="card-chart1" class="chart" height="10"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-info">
                        <div class="card-block p-b-0">
                            <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                                <i class="icon-user"></i>
                            </button>
                            
                            <p>المستخدمين</p>
                        </div>
                        <div class="chart-wrapper p-x-1" style="height:70px;">
                            <canvas id="card-chart2" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-warning">
                        <div class="card-block p-b-0">
                            <div class="btn-group pull-left">
                                
                               <i class="icon-paypal"></i>
                            </div>
                            
                            <p>المنتجات</p>
                        </div>
                        <div class="chart-wrapper" style="height:70px;">
                            <canvas id="card-chart3" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-inverse card-danger">
                        <div class="card-block p-b-0">
                            <div class="btn-group pull-left">
                                
                                <i class="icon-handbag"></i>
                            </div>
                            
                            <p>الطلبات </p>
                        </div>
                        <div class="chart-wrapper p-x-1" style="height:70px;">
                            <canvas id="card-chart4" class="chart" height="70"></canvas>
                        </div>
                    </div>
                </div>
                <!--/col-->
              @endif

            </div>
            <!--/row-->

           
</aside>
@endsection