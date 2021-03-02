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
                      <form class="form-control" action ="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group m-b-1">
                            
                            </span>
                            <input type="text" class="form-control" placeholder=" اسم الصنف " name="name">
                        </div>
                        <div class="input-group m-b-1">
                            
                            </span>
                            <input type="text" class="form-control " placeholder="الوصف " name="description">
                        </div>
                        <div class="input-group m-b-1">
                            
                            <input type="file" class="form-control " name="image">
                        </div>
                        <div>
                        <button type="submit" class="btn btn-block btn-success">
                           
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