@extends('admins.dashboard.master')

@section('content')

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
         
        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="row">
                    
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-block">
                               <div class="col-md-5 m-x-auto pull-xs-none vamiddle">
                <div class="card">
                    <div class="card-block p-a-2">
                        <h1>اضافة صنف جديد</h1>
                   <form class="form-control" action ="{{route('orders.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group m-b-1">
                             
                         
                            <input  name = "name" type="text" class="form-control" placeholder=" اسم المنتج ">
                        </div>
                  
                       
                       
                        <div class="input-group m-b-1">
                            <input type="number" step="0.01" name="quantity"  class="form-control" placeholder="   الكمية  ">
                        </div>
                        <div class="input-group m-b-1">
                            <input type="number" step="0.01" name="price" step="0.01"class="form-control" placeholder="  السعر  ">
                        </div>
                       
                        <div class="input-group m-b-1">
                            
                            <select name="user_id" id="" class="form-control">
                                <option value="">اسم المستخدم</option>
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="input-group m-b-1">
                            
                        
                           
                        <div>
                        <button type="submit" name ="save" class="btn btn-block btn-success">
                           
                            اضافة     <i class="icon-plus"></i></button>
                    </div>
                            </form 
                            </div>
                        </div>
                    </div>
                    <!--/col-->
                </div>
                <!--/row-->
            </div>
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
@endsection