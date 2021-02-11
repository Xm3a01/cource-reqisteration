@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit gallery</h5>
            </div>
            <div class="card-body">
                <form action="{{route('galleries.update' , $gallery->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label> Tile</label>
                                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$gallery->title}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-2">
                            <div class="form-group">
                                <label for="image">Date</label>
                                <input type="datetime-local" class="form-control" placeholder="" name="date" value="{{$gallery->date}}">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pl-3">
                            <div class="form-group">
                                <label for="image"> <button type="submit" class="btn btn-primary ">Upload image</button></label>
                                <input type="file" class="form-control" placeholder="" name="image">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12 pl-3">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="content">{{$gallery->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
