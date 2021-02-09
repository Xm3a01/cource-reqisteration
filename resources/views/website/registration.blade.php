@extends('website.layouts.app')

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
          

          <form action="" method="">
            <h1>Register:</h1>
            <div class="tab"> Personal INFO
              <p><label>User Name</label><input type="text" placeholder="First name..." oninput="this.className = ''" name="fname"></p>
              <p> <label>Sure Name</label><input type="text" placeholder="Sure name..." oninput="this.className = ''" name="surname"></p>
              <p><label>Birthday</label><input type="date"  oninput="this.className = ''"  placeholder="  " data-rule="minlen:4" name="birthday" required/></p>
              <p>
                <label for="gender">Choose Gender</label>
                <select name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Femal</option>
                </select> 
              </p>
            </div>
            
            <div class="tab">Contact Info:
              <p><label>Address</label><input type="address" oninput="this.className = ''"   placeholder="Address"  data-msg="Please enter a valid email" name="address" required/>
          
              <p><label>Email</label><input type="email " placeholder="E-mail..." oninput="this.className = ''" name = "email"></p>
              <p><label>Phone</label><input type="tel" placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
              <p><label>Passwprd</label><input type="password" placeholder="Password..." oninput="this.className = ''" name="password"></p>

            </div>
            <div class="tab">Addition INFO
              <p><label>Level number was studied</label><input type="number" oninput="this.className = ''" name="level"   placeholder="heightest level studies"  data-msg="Please enter a valid email" required/></p>
              <p>  <label>Select Month when was that</label><input type="date" oninput="this.className = ''" name="history"  placeholder="When was that"  data-msg="Please enter a valid email" required/></p> 
            
            <p> <label>Job Title</label> <input type="text" oninput="this.className = ''" name="level"  placeholder="job"  data-msg="Please enter a valid email" required/>
          </p>
          
          
          <p>    <label>Select Time</label> <select name="Time">
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
