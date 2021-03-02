@extends('layouts.app')

@section('content')
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i>  </a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> Al Siteen St, Khartoum, Sudan </a></li>
            </ul>
            @if(Auth::check())
            <ul class="header-links pull-right">
                <li><a href="#"><i ></i> {{Auth::user()->name}} </a></li>
                <li><a href="#"><i ></i> <img  :src="user.avatar" alt="" class="avatar"> </a></li>
            </ul>
            @else
            <ul class="header-links pull-right" v-if="!user">
                <li><a href="/login"><i ></i> Login </a></li>
                <li><a href="/register"><i ></i> Register </a></li>
            </ul>
            @endif
        </div>
    </div>
    <!-- /TOP HEADER -->
</header>

<div class="section">
    <!-- container -->
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <!-- row -->
    <div class="row">

        <div class="col-md-7">
            <!-- Billing Details -->
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Register</h3>
                </div>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name "
                    class="input"/>
                    @error('name')
                    <p class="mt-4" style="color: red">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email address"
                    class="input"/>
                    @error('email')
                    <p class="mt-4" style="color: red">
                        {{ $message }}
                    </p>
                    @enderror
                </div>


                <div class="form-group">
                    <input type="password" name="password" placeholder="Password"
                    class="input"/>
                    @error('password')
                    <p class="mt-4" style="color: red">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            
            
                <div class="form-group">
                    <input type="password" name="password_confirmation" placeholder="Password confirmation"
                               class="input"/>
                        @error('password_confirmation')
                        <p class="mt-4" style="color: red">
                            {{ $message }}
                        </p>
                        @enderror
                </div>

                <div class="form-group">
                    <input type="file" name="avatar" placeholder=""
                               class="input"/>
                        @error('avatar')
                        <p class="mt-4" style="color: red">
                            {{ $message }}
                        </p>
                        @enderror
                </div>
                
            </div>
            
                
            </div>
        </div>
            
            <button type="submit" class="primary-btn order-submit">Register</button>
     </div>
    </form>
    </div>
@endsection


