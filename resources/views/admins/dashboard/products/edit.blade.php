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

                        <h1>تعديل منتج </h1>
                      <form action="{{route('products.update' , $product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                         <div class="input-group m-b-1">
                            
                        
                            <input type="text" class="form-control" placeholder=" اسم المنتج " name="name" value="{{$product->name}}">
                        </div>
                        <div class="input-group m-b-1">
                            
                            <input type="file" class="form-control " name="image[]"  multiple="multiple">
                        </div>
                        <div class="input-group m-b-1">
                            
                           
                            <label> اختر لون المنتج </label>    &ensp; &ensp; &ensp;
                            <input type="color" id="favcolor" name="color" value="{{$product->color}}" >
                        </div>
                         <div class="input-group m-b-1">
                        </div>
                        <div class="input-group m-b-1">
                            
                        
                            <input type="number" step="0.01"  class="form-control" placeholder=" حجم المنتج " name="availableSize" value="{{$product->availableSize}}">
                        </div>
                        <div class="input-group m-b-1">
                            
                        </div>
                        <div class="input-group m-b-1">
                            
                        
                            <input type="number" step="0.01"class="form-control" placeholder="  الخصم  " name="disCount" value="{{$product->disCount}}">
                        </div>
                        <div class="input-group m-b-1">
                            
                        </div>
                        <div class="input-group m-b-1">
                            
                        
                            <input type="number" step="0.01" class="form-control" placeholder="  السعر " name="price" value="{{$product->price}}">
                        </div>
                         <div class="input-group m-b-1">
                            
                        
                            <input type="number" class="form-control" placeholder="  الكمية " name="productAmount" value="{{$product->productAmount}}">
                        </div>
                        <div class="input-group m-b-1">
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)                      
                                <option {{$product->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group m-b-1">
                       
                           <textarea type="text" class="form-control" placeholder="  الوصف " name="description"> {{$product->description}} </textarea>
                       </div>
                        {{-- <div class="input-group m-b-1">
                            <label>     &ensp; &ensp; &ensp; </label>
                            <input type="checkbox" name="productAvailable" value="1"  {{$product->productAvailable ? 'checked' : ''}} > &ensp; &ensp; &ensp;                    
                        </div> --}}
                        <div>
                        <button  type="submit" class="btn btn-block btn-success">
                           
                            تعديل     <i class="fa fa-edit"></i></bu>
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