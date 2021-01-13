@extends('admins.dashboard.master')

@section('content')

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="row">
                    
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="nav-link btn btn-primary" href="{{route('admins.create')}}"> + اضافة </a>

                                 <i class="fa fa-align-justify"></i>    كل المشرفين  
                            </div>
                            <div class="card-block">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                        <th> الصوره </th>
                                        <th>رقم المشرف </th> 
                                        <th>اسم المشرف </th>
                                        <th>عنوان البريد </th>
                                        <th>رقم الهاتف </th> 
                                        <th> كميه المبيعات </th> 
                                        
                                        
                                        <th>العمليات</th>
                                           
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $index => $admin)
                                        <tr>
                                            <td><img src="{{$admin->avatar}}" height="40" width="40" style="border-radius: 50%" alt=""></td>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>{{$admin->phone}}</td>
                                            <td>{{$admin->totalPayment}}</td>
                                            <td>
                                                <form action="{{route('admins.destroy' , $admin->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a style="color:white" class="nav-link btn  btn-info"  href="{{route('admins.edit' , $admin->id)}}"><i class="fa fa-edit"></i></a>
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
        <!--/.container-fluid-->
  @stop