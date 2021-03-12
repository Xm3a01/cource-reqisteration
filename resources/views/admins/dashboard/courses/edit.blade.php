@extends('admins.dashboard.master')
@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Course</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('courses.update' , $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Course Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$course->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Monthes</label>
                                <input type="text" class="form-control" placeholder="eg: 1 month" name="monthes" value="{{$course->monthes}}">
                            </div>
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>H/week</label>
                                <input type="text" class="form-control" placeholder="eg: 2 hours, 3times at week" name="h_week" value="{{$course->h_week}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Feeses</label>
                                <input type="number" class="form-control" placeholder="Feeses" name="feeses" value="{{$course->feeses}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control" placeholder="Amount" name="amount" value="{{$course->amount}}">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>seats/group</label>
                                <input type="text" class="form-control" placeholder="seats/group" name="seats" value="{{$course->seats}}">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Belong To</label>
                                <select name="admin_id" id="" class="form-control select">
                                    <option value="">Select Manger</option>
                                    @foreach ($managers as $manager)
                                        <option {{$course->admin_id = $manager->id ? 'selected' : ''}} value="{{ $manager->id }}">{{ $manager->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Course image</label>
                                <input type="file" class="form-control" placeholder="" name="image">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="description"> {{$course->description}} </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
