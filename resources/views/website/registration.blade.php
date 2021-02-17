@extends('website.layouts.app')
@section('styles')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        label {
            color: grey;
        }

        select {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }

    </style>
@endsection

@section('content')

    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Register</h2>
        </div>
    </div>
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">


                <form action="{{route('register.store')}}" method="post">
                  @csrf
                  <input type="hidden" name="course_id" value="{{$course->id}}">
                    <h1>Register:</h1>
                    <div class="tab"> Personal INFO
                        <p><label>User Name</label><input type="text" placeholder="First name..."
                                oninput="this.className = ''" name="name"></p>
                        <p> <label>Sure Name</label><input type="text" placeholder="User name..."
                                oninput="this.className = ''" name="username"></p>
                        <p><label>Birthday</label><input type="date" oninput="this.className = ''" placeholder="  "
                                data-rule="minlen:4" name="birthday" required /></p>
                        <p>
                            <label for="gender">Choose Gender</label>
                            <select name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Femal</option>
                            </select>
                        </p>
                    </div>

                    <div class="tab">Contact Info:
                        <p><label>Address</label><input type="address" oninput="this.className = ''" placeholder="Address"
                                data-msg="Please enter a valid email" name="address" required />

                        <p><label>Email</label><input type="email " placeholder="E-mail..." oninput="this.className = ''"
                                name="email"></p>
                        <p><label>Phone</label><input type="tel" placeholder="Phone..." oninput="this.className = ''"
                                name="phone"></p>
                        <p><label>Passwprd</label><input type="password" placeholder="Password..."
                                oninput="this.className = ''" name="password"></p>

                    </div>
                    <div class="tab">Addition INFO
                        <p><label>Level number was studied</label><input type="number" oninput="this.className = ''"
                                name="level" placeholder="heightest level studies" data-msg="Please enter a valid email"
                                required /></p>
                        <p> <label>Select Month when was that</label><input type="date" oninput="this.className = ''"
                                name="whenWasthat" placeholder="When was that" data-msg="Please enter a valid email" required />
                        </p>

                        <p> <label>Job Title</label> <input type="text" oninput="this.className = ''" name="job_title"
                                placeholder="job" data-msg="Please enter a valid email" required />
                        </p>


                        <p> <label>Select Time</label>
                            <select name="coures_time">
                                <option value="Morning">Morning</option>
                                <option value="Evenning">Morning</option>
                            </select>
                        </p>
                    </div>


                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

            </div>

        </div>

        </div>
    </section>

@endsection

@section('scripts')
    <script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {

            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").setAttribute("type", "Submit");
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }

    </script>
@endsection
