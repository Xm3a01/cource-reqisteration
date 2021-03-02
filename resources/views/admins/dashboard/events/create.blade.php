@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Event</h5>
            </div>
            <div class="card-body">
                <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Event Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Plase</label>
                                <input type="text" class="form-control" placeholder="Address" name="place">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-3">
                            <div class="form-group">
                                <label for="image"> <button type="submit" class="btn btn-primary ">Upload image</button></label>
                                <input type="file" class="form-control" placeholder="" name="image">

                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="datetime-local" class="form-control" placeholder=" " name="date">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12 pl-3">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="content"></textarea>
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
