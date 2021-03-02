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

                        <h1> الضبط </h1>
                      <form action="{{route('admins.update' , $admin->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="input-group m-b-1">
                             
                             
                                <input type="text" name="name" class="form-control" placeholder=" اسم المستخدم " value="{{$admin->name}}">
                            </div>
                            <div class="input-group m-b-1">
                                
                                
                               <input type="email" name="email" class="form-control" placeholder="  عنوان البريد " value="{{$admin->email}}">
                           </div>

                           <div class="input-group m-b-1">
                                
                                
                               <input type="password" name="password" class="form-control" placeholder="كلمة السر ">
                           </div>
                           <div class="input-group m-b-1">

                            <input type="file" class="form-control " name="avatar">
                         </div>
                            <div>
                            <button type="submit" class="btn btn-block btn-success">
                               
                                حفظ التعديلات      <i class="icon-plus"></i></button>
                        </div>
                           </form>    
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
    @stop