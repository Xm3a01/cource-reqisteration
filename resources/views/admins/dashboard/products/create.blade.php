@extends('admins.dashboard.master')

@section('content')

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
                                                <h1>اضافة منتج جديد</h1>
                                                <form class="form-control" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="input-group m-b-1">


                                                        <input type="text" class="form-control" name="name"
                                                            placeholder=" اسم المنتج ">
                                                    </div>
                                                    <div class="input-group m-b-1">

                                                        <input type="file" class="form-control " name="image[]"  multiple="multiple">
                                                    </div>
                                                    <div class="input-group m-b-1">


                                                        <label> اختر لون المنتج </label> &ensp; &ensp; &ensp;
                                                        <input type="color" id="favcolor" name="color"
                                                            value="">
                                                    </div>
                                                    {{-- <div class="input-group m-b-1">


                                                        <label> اختر الألوان المتاحة من المنتج </label> &ensp; &ensp;
                                                        &ensp;
                                                        <input type="color" id="favcolor" name="favcolor"
                                                            value="#123456">
                                                    </div> --}}
                                                    <div class="input-group m-b-1">


                                                        <input type="number" step="0.01" class="form-control" name="availableSize"
                                                            placeholder=" حجم المنتج ">
                                                    </div>
                                                   
                                                    <div class="input-group m-b-1">
                                                        <input type="number" step="0.01" class="form-control" name="disCount"
                                                            placeholder="  الخصم  ">
                                                    </div>
                                                   
                                                    <div class="input-group m-b-1">


                                                        <input type="number" step="0.01" class="form-control" name="price"
                                                            placeholder="  السعر ">
                                                    </div>
                                                    <div class="input-group m-b-1">


                                                        <input type="number" class="form-control" name="productAmount"
                                                            placeholder="  الكمية ">
                                                    </div>

                                                    <div class="input-group m-b-1">
                                                        
                                                        
                                                        <input type="hidden" class="form-control" name="unitPrice" value="SDG"
                                                        placeholder="  ملاحظات ">
                                                    </div>
                                                    <div class="input-group m-b-1">
                                                        <select name="category_id" id="" class="form-control">
                                                            <option value="">تصنيف المنتج</option>
                                                            @foreach ($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @if (!Auth::guard('admin')->user()->is_supervisor)
                                                    <div class="input-group m-b-1">
                                                        <select name="admin_id" id="" class="form-control">
                                                            <option value="">صاحب المنتج</option>
                                                            <option value="{{Auth::guard('admin')->user()->id}}">تابع للشركه</option>
                                                            @foreach ($admins as $admin)
                                                             <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @else
                                                     <input type="hidden"  name = "admin_id" value="{{Auth::guard('admin')->user()->id}}">
                                                    @endif
                                                    <div class="input-group m-b-1">
                                                        <textarea type="text" class="form-control" placeholder="  الوصف " name="description"> </textarea>
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-block btn-success">

                                                            اضافة <i class="icon-plus"></i></button>
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
                        <br />

                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        </div>

        </div>
   @stop