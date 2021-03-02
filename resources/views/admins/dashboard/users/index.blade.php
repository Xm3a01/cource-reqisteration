@extends('admins.dashboard.master')

@section('content')

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="row">
                    
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="nav-link btn btn-primary" href="{{route('users.create')}}"> + اضافة </a>

                                 <i class="fa fa-align-justify"></i>    كل الطلبات  
                            </div>
                            <div class="card-block">
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                        <tr>
                                        <th>رقم المستخدم</th> 
                                        <th>اسم المستخدم</th>
                                        <th>عنوان البريد </th>
                                        <th>رقم الهاتف </th> 
                                        <th> الصوره </th>
                                        
                                        
                                        <th>العمليات</th>
                                           
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td><img src="{{$user->avatar}}" height="40" width="40" style="border-radius: 50%" alt=""></td>
                                            <td>
                                                <form action="{{route('users.destroy' , $user->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a style="color:white" class="nav-link btn  btn-info"  href="{{route('users.edit' , $user->id)}}"><i class="fa fa-edit"></i></a>
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