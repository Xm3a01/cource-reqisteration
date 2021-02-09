@extends('website.layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <h2>Courses</h2>
        </div>
    </div>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <section id="cource-details-tabs" class="cource-details-tabs">
                <div class="container" data-aos="fade-up">
                    <!-- ======= Courses Section ======= -->
                    <section id="courses" class=" cource-details-tabs bg-white p-4 shadow-sm">
                        <div class="container" data-aos="fade-up">

                            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                    <div class="course-item">
                                        <img src="{{ asset('assets/images/course-1.jpg') }}" class="img-fluid" alt="...">
                                        <div class="course-content pt-2">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                                    <a href="reg.html" class="get-started-btn rounded-sm">Get Started</a>


                                                </div>
                                                <p class="price">$169</p>
                                            </div>
                                            <p>Et architecto provident deleniti facere repellat nobis iste. </p>
                                            <h4><a href="course-details.html">Course Details</a></h4>
                                            <div class="trainer d-flex justify-content-between align-items-center">
                                                <div class="trainer-profile d-flex align-items-center">

                                                </div>
                                                <div class="trainer-rank d-flex align-items-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Course Item-->

                                <!--div class="row" data-aos="zoom-in" data-aos-delay="100">
              <a href="reg.html" class="get-started-btn">Get Started</a-->
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                                    <div class="course-item">
                                        <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
                                        <div class="course-content">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                                    <a href="reg.html" class="get-started-btn">Get Started</a>


                                                </div>
                                                <p class="price">$169</p>
                                            </div>
                                            <p>Et architecto provident deleniti facere repellat nobis iste. </p>

                                            <h3><a href="course-details.html">Course Details</a></h3>
                                            <div class="trainer d-flex justify-content-between align-items-center">
                                                <div class="trainer-profile d-flex align-items-center">

                                                </div>
                                                <div class="trainer-rank d-flex align-items-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Course Item-->

                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                    <div class="course-item">
                                        <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
                                        <div class="course-content">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                                                    <a href="reg.html" class="get-started-btn">Get Started</a>


                                                </div>
                                                <p class="price">$169</p>
                                            </div>
                                            <p>Et architecto provident deleniti facere repellat nobis iste. </p>

                                            <h3><a href="course-details.html">Course Details</a></h3>
                                            <div class="trainer d-flex justify-content-between align-items-center">
                                                <div class="trainer-profile d-flex align-items-center">

                                                </div>
                                                <div class="trainer-rank d-flex align-items-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End Course Item-->

                            </div>

                        </div>

                    </section><!-- End Courses Section -->
                </div>
            </section>
        </div>
    </section>
@endsection
