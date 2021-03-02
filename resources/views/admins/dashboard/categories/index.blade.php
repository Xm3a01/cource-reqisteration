@extends('admins.dashboard.master')

@section('content')
    
<div class="container-fluid">

    <div class="animated fadeIn">
        <div class="row">
            
            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a class="nav-link " href="{{route('categories.create')}}"><button class="btn btn-primary" > + اضافة </button></a>

                         <i class="fa fa-align-justify"></i>    كل التصنيفات  
                    </div>
                    <div class="card-block">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                <th>رقم الصنف</th> 
                                <th>اسم الصنف</th> 
                                <th>الوصف</th>
                                <th>الصورة</th>
                                <th>العمليات</th>
                                   
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)  
                                <tr>
                                     <td>{{$category->id}}</td>
                                     <td>{{$category->name}}</td>
                                     <td>{{$category->description}}</td>
                                     <td><img src="{{$category->image}}" height="40" width="40" alt="" style="border-radius: 50%"></td>
                                     <td>
                                         <form action="{{route('categories.destroy' , $category->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a style="color:white" class="nav-link btn  btn-info"  href="{{route('categories.edit' , $category->id)}}"><i class="fa fa-edit"></i></a>
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
@endsection
