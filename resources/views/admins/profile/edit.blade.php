@extends('admins.dashboard.master')

@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Profile</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update', $admin->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="input-group m-b-1">


                        <input type="text" name="name" class="form-control" placeholder=" اسم المستخدم "
                            value="{{ $admin->name }}">
                    </div>
                    <div class="input-group m-b-1">


                        <input type="email" name="email" class="form-control" placeholder="  عنوان البريد "
                            value="{{ $admin->email }}">
                    </div>

                    <div class="input-group m-b-1">


                        <input type="password" name="password" class="form-control" placeholder="كلمة السر ">
                    </div>
                    <div class="input-group m-b-1">

                        <input type="file" class="form-control " name="avatar">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-block btn-success">

                            حفظ التعديلات <i class="icon-plus"></i></button>
                    </div>
                </form>
            </div>
        </div>

    @stop
