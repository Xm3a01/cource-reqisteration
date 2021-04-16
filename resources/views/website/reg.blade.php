@extends('website.layouts.app')

@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Course Registration</h2>
            <p></p>
        </div>
    </div>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <section id="cource-details-tabs" class="cource-details-tabs">
                <div class="container" data-aos="fade-up">

                    <section id="contact" class="contact ">
                        <div data-aos="fade-up" class="bg-white p-4 rounded-sm shadow-sm">

                            <div class="container" data-aos="fade-up">

                                <div class="row mt-5">

                                  <div class="col-lg-2">

                                    </div>

                                    <div class="col-lg-8 mt-5 mt-lg-0">

                                        <table class="table" style="border-top: none">
                                            <thead >
                                                <tr>
                                                    <th>Course</th>
                                                    <th>Amount</th>
                                                    <th>Fees</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody style="color:#4b5092">
                                                <tr>
                                                    <td>{{$course->name}}</td>
                                                    <td>{{$course->amount}} SDG</td>
                                                    <td>{{$course->feeses}} SDG</td>
                                                    <td>{{$course->feeses + $course->amount}} SDG</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <form action="{{ route('register.store') }}" method="post" role="form">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                                            <div class="form-group">
                                                <strong>Personal INFO</strong>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 form-group">
                                                    <label for="name" style="color: #ccc; font-size:12px">Full name</label>
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Your Name" value="{{ old('name') }}" />
                                                    @error('name')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="username" style="color: #ccc; font-size:12px">User name</label>
                                                    <input type="text" class="form-control" name="username" id="username"
                                                        placeholder="Username" value="{{ old('username') }}"/>
                                                    @error('username')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="birthday" style="color: #ccc; font-size:12px">Birthday date</label>
                                                    <input type="date" name='birthday' class="form-control" id="birthday"
                                                        placeholder="1/1/1995" value="{{ old('birthday') }}"/>
                                                    @error('birthday')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="gender" style="color: #ccc; font-size:12px">Gender</label>
                                                    <select name="gender" class="form-control">
                                                        <option value="">Choose Gender</option>
                                                        <option value="0" {{ old('gender') == '0' ? 'selected' : '' }}>Male</option>
                                                        <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Femal</option>
                                                    </select>
                                                    {{-- <div class="validate"></div> --}}
                                                    @error('gender')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="password" style="color: #ccc; font-size:12px">Password</label>

                                                    <input type="password" name='password' class="form-control"
                                                        id="password" placeholder="Password" />
                                                    @error('password')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="password_confirmation" style="color: #ccc; font-size:12px">Password Confirmation</label>

                                                    <input type="password" name='password_confirmation' class="form-control"
                                                        id="password_confirmation" placeholder="re-password" />
                                                    @error('password_confirmation')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <strong>CONTACT INFO</strong>
                                            </div>
                                            <div class="form-row">

                                                <div class="col-md-6 form-group">
                                                    <label for="address" style="color: #ccc; font-size:12px">Address</label>
                                                    <input type="text" class="form-control" name="address" id="address"
                                                        placeholder="eg: block-1 , srt:0 , build:23" value="{{ old('address') }}"/>
                                                    @error('address')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="email" style="color: #ccc; font-size:12px">E-mail</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Your Email" value="{{ old('email') }}"/>
                                                    @error('email')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="phone" style="color: #ccc; font-size:12px">Phone Number</label>

                                                    <input type="text" name='phone' class="form-control" id="phone"
                                                        placeholder="Phone" value="{{ old('phone') }}"/>

                                                    {{-- <div class="validate"></div> --}}
                                                    @error('phone')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="whatsapp" style="color: #ccc; font-size:12px">Whats app number</label>

                                                    <input type="text" name='whatsapp' class="form-control"
                                                        id="whatsapp" placeholder="whatsapp" value="{{ old('whatsapp') }}"/>
                                                    @error('whatsapp')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                               
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <strong>Addition INFO</strong>
                                            </div>
                                            <div class="form-row">

                                                <div class="col-md-6 form-group">
                                                    <label for="username" style="color: #ccc; font-size:12px">Level number was studied</label>
                                                    <input type="text" class="form-control" name="level" id="level"
                                                        placeholder="Level number was studied" value="{{ old('level') }}"/>
                                                    @error('level')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="whenWasthat" style="color: #ccc; font-size:12px">The month when studied</label>
                                                    <input type="date" class="form-control" name="whenWasthat"
                                                        id="whenWasthat" placeholder="Select Month when was that" value="{{ old('whenWasthat') }}"/>
                                                    @error('whenWasthat')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="job_title" style="color: #ccc; font-size:12px">Job title</label>
                                                    <input type="text" name='job_title' class="form-control" id="job_title"
                                                        placeholder="Job title" value="{{ old('job_title') }}"/>
                                                    @error('job_title')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="coures_time" style="color: #ccc; font-size:12px">Course Time</label>

                                                    <select name="coures_time" class="form-control">
                                                        <option value="">Select Time</option>
                                                        <option value="Morning" {{ old('coures_time') == 'Morning' ? 'selected' : '' }}>Morning</option>
                                                        <option value="Evening" {{ old('coures_time') == 'Evening' ? 'selected' : '' }}>Evening</option>
                                                    </select>
                                                    @error('coures_time')
                                                        <p class="" style="color: red; font-size:12px">
                                                            {{ $message }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>

                                            
                                            <div class="row">
                                                <div>

                                                <p style="font-size: 14px">
                                                    
                                                    Fees are updated on monthly bases according to the USD equivalent (5, 10 and 15 USD).
                    
                                                    These fees are valid from day 1 till the last day of the month.
                    
                                                    Payment is available for all banks except(faisal,khartoum,baraka,salam)bank.
                                                </p>
 
                                                    <input onchange="agreeTerm()" type="checkbox" size="40" name="agree" value="agree" id="ag" />
                                                    <label for="agree" style = "color: blue"> I agree</label><br>

                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-success" type="submit" id="pay" disabled style="padding: 3px 50px 3px 50px">Pay</button>
                                            </div>
                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </section>
                </div>
            </section>
        </div>
    </section>

@endsection

<script>
    function agreeTerm(){

    checkbox = document.getElementById('ag');
    if(checkbox.checked)
        item = document.getElementById('pay').disabled = false;
    else 
        item = document.getElementById('pay').disabled = true;
    }
</script>
