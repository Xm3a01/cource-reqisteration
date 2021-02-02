@extends('admins.dashboard.master')

@section('content')


    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Manager</h5>
            </div>
            <div class="card-body">
                <form action="{{route('managers.update' , $manager)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$manager->name}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address" value="{{$manager->address}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Phone</label>
                                <input  type="text" class="form-control" placeholder="Phone" name="phone" value="{{$manager->phone}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Gender</label>
                                <select type="text" class="form-control" placeholder="" name="gender">
                                    <option value="0">Male</option>
                                    <option {{$manager->gender == 1 ? 'selected' : ''}} value="1">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Whatsapp </label>
                                <input  type="text" class="form-control" placeholder=" Number" name="whatsapp" value="{{$manager->whatsapp}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{$manager->email}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>password </label>
                                <input type="password" class="form-control" placeholder="password " name="password">
                            </div>
                        </div>
                        {{-- <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="Cpassword">Confirm password</label>
                                <input type="password" class="form-control" placeholder="Confirm password">
                            </div>
                        </div> --}}
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