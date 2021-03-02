@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Student</h5>
            </div>
            <div class="card-body">
                <form action="{{route('students.update' , $student->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value = "{{$student->name}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="eg : Block-48 kartumm st 60" name="address" value = "{{$student->address}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" placeholder="eg: 1994/1/1" name="birthday" value = "{{$student->birthday}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Gender</label>
                                <select type="text" class="form-control" placeholder="Gender" name="gender">
                                    <option value="0">Male</option>
                                    <option {{$student->gender == 1 ? 'selected' : ''}} value="1">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>User name</label>
                                <input type="username" class="form-control" placeholder="eg: examole01" name="username" value = "{{$student->username}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="Phone" name="phone" value = "{{$student->phone}}">
                            </div>
                        </div>
                        <div class="col-md-6 px-1">
                            <div class="form-group">
                                <label>Whatsapp </label> 
                                <input type="text" class="form-control" placeholder=" Number" name="whatsapp" value = "{{$student->whatsapp}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>When was That</label>
                                <input type="date" class="form-control" placeholder="when" name="whenWasthat" value = "{{$student->whenWasthat}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Heighest Level Studies With Us</label>
                                <input type="text" class="form-control" placeholder="level" name="level" value = "{{$student->level}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Course Time</label>
                                <select class="form-control" placeholder="Course Time" name="coures_time" >
                                    <option value="8 - 10 AM">8 - 10 AM</option>
                                    <option {{$student->coures_time == '6 - 8 PM' ? 'selected' : ''}} value="6 - 8 PM">6 - 8 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Job title</label>
                                <input type="text" class="form-control" placeholder="Job title" name="job_title" value = "{{$student->job_title}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value = "{{$student->email}}">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>Courses ( <small>Select course to relate this student</small> )</h4>

                    <h5>{{$student->courses ? 'Student Course' : ''}}</h5>
                    <div class="row">
                        @foreach ($student->courses as $course)
                            
                        <div class="col-md-4 pr-1">
                            <div class="form-group row">
                                <input type="checkbox" checked class="form-control col-md-1"  name="courses[]" value = "{{$course->id}}">
                                <label for="courses" class="col-md-9">{{$course->name}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <br>

                    <label>Course selected</label><br>
                    <div class="row">
                        @foreach ($courses as $course)
                            
                        <div class="col-md-4 pr-1 pl-3">
                            <div class="form-group row">
                                <input type="checkbox" class="form-control col-md-1"  name="courses[]" value = "{{$course->id}}">
                                <label for="courses" class="col-md-9">{{$course->name}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
