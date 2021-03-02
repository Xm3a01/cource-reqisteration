@extends('admins.dashboard.master')

@section('content')

   <aside> 
        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="row">
                    
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="nav-link " href="{{route('orders.create')}}"><button class="btn btn-primary" > + اضافة </button></a>

                                 <i class="fa fa-align-justify"></i>    كل الطلبات  
                            </div>
                            <div class="card-block">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                        <th>رقم الطلب</th> 
                                        <th>اسم الطلب</th>
                                        <th>كمية الطلب</th>
                                        <th>سعر الطلب</th>
                                        <th>تاريخ الطلب</th>
                                        <th> السعر الكلي</th>
                                        <th>اسم المستخدم</th>
                                        <th>العمليات </th> 
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->name}}</td>
                                                <td>{{$order->quantity}}</td>
                                                <td>{{$order->totalPrice / $order->quantity}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->totalPrice}}</td>
                                                <td>{{$order->user->name ?? "Unkonw"}}</td>
                                                <td>
                                                    <form action="{{route('orders.destroy' , $order->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a style="color:white" class="nav-link btn  btn-info"  href="{{route('orders.edit' , $order->id)}}"><i class="fa fa-edit"></i></a>
                                                        <button class="btn btn-danger nav-link" type="submit" ><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                
                                    </div>
                                    <!--/row-->

                
                                <!--/.row-->
                                <br/>
                                                                            
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
        </div>
   </aside>
        <!--/.container-fluid-->
    @endsection