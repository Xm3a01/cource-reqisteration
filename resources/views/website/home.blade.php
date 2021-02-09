@extends('website.layouts.app')

@section('content')
    @include('website.includes._brand')
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <section id="cource-details-tabs" class="cource-details-tabs">
                <div class="container" data-aos="fade-up">

                    <!-- ======= Courses Section ======= -->
                    <section id="courses" class="courses bg-white p-4 rounded-sm shadow-sm">
                        <div class="container" data-aos="fade-up">
                            <h3 class="mb-5">Latest Courses</h3>
                            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                    <div class="course-item">
                                        <img src="assets/images/course-1.jpg" class="img-fluid" alt="...">
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

                                <!--div class="row" data-aos="zoom-in" data-aos-delay="100">
                          <a href="reg.html" class="get-started-btn">Get Started</a-->
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                                    <div class="course-item">
                                        <img src="assets/images/course-2.jpg" class="img-fluid" alt="...">
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
                                        <img src="assets/images/course-3.jpg" class="img-fluid" alt="...">
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
                    </section><!-- End Cource Details Tabs Section -->
                   <section class="break-section"></section>
                    <!-- ======= Cource Details Section ======= -->
                    <section id="course-details" class="course-details bg-white p-4 rounded-sm shadow-sm">
                        <div class="container" data-aos="fade-up">
                            <h3 class="mb-5">Best Course</h3>
                            <div class="row">
                                <div class="col-lg-8">
                                    <img src="/assets/images/course-details.jpg" class="img-fluid" alt="">
                                    <h3>Et enim incidunt fuga tempora</h3>
                                    <p>
                                        Qui et explicabo voluptatem et ab qui vero et voluptas. Sint voluptates temporibus
                                        quam autem. Atque nostrum voluptatum laudantium a doloremque enim et ut dicta.
                                        Nostrum ducimus est iure minima totam doloribus nisi ullam deserunt. Corporis aut
                                        officiis sit nihil est. Labore aut sapiente aperiam.
                                        Qui voluptas qui vero ipsum ea voluptatem. Omnis et est. Voluptatem officia
                                        voluptatem adipisci et iusto provident doloremque consequatur. Quia et porro est. Et
                                        qui corrupti laudantium ipsa.
                                        Eum quasi saepe aperiam qui delectus quaerat in. Vitae mollitia ipsa quam. Ipsa aut
                                        qui numquam eum iste est dolorum. Rem voluptas ut sit ut.
                                    </p>
                                    <a href="reg.html" class="get-started-btn rounded-sm ml-1 mt-2">Get Started</a>
                                </div>


                                <div class="col-lg-4">

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Trainer</h5>
                                        <p><a href="#">Walter White</a></p>
                                    </div>

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Course Fee</h5>
                                        <p>$165</p>
                                    </div>

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Available Seats</h5>
                                        <p>30</p>
                                    </div>

                                    <div class="course-info d-flex justify-content-between align-items-center">
                                        <h5>Schedule</h5>
                                        <p>5.00 pm - 7.00 pm</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </section><!-- End Cource Details Section -->
                    <section class="break-section"></section>
                    <!-- ======= Cource Details Tabs Section ======= -->
                    <section id="cource-details-tabs" class="cource-details-tabs bg-white p-4 rounded-sm shadow-sm">
                        <h3 class="mb-5">Our Latest Events</h3>
                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="nav nav-tabs flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9 mt-4 mt-lg-0">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab-1">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Architecto ut aperiam autem id</h3>
                                                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad
                                                    sapiente dila
                                                    parde sonata raqer a videna mareta paulona marka</p>
                                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint.
                                                    Laborum
                                                    eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est
                                                    repellat
                                                    minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat
                                                    quos qui
                                                    similique accusamus nostrum rem vero</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/images/course-details-tab-1.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-2">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Et blanditiis nemo veritatis excepturi</h3>
                                                <p class="font-italic">Qui laudantium consequatur laborum sit qui ad
                                                    sapiente dila
                                                    parde sonata raqer a videna mareta paulona marka</p>
                                                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                                    reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius
                                                    et velit
                                                    ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto
                                                    madirna
                                                    desera vafle de nideran pal</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/images/course-details-tab-2.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-3">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                                <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem
                                                    non enim
                                                    fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat
                                                    perferendis
                                                    aut</p>
                                                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                                    quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima
                                                    molestiae
                                                    sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta
                                                    et
                                                    harum voluptatem optio quae</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/images/course-details-tab-3.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-4">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore
                                                </h3>
                                                <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure
                                                    voluptas
                                                    iure porro quis delectus</p>
                                                <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum
                                                    ipsam
                                                    necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                                    consequatur corporis atque. Eligendi asperiores sed qui veritatis
                                                    aperiam quia a
                                                    laborum inventore</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/images/course-details-tab-4.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-5">
                                        <div class="row">
                                            <div class="col-lg-8 details order-2 order-lg-1">
                                                <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                                <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis
                                                    porro quia.
                                                </p>
                                                <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis
                                                    recusandae
                                                    ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam
                                                    amet.
                                                    Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                            </div>
                                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                                <img src="assets/images/course-details-tab-5.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section><!-- End Cource Details Tabs Section -->

        </div>

    </section>

@endsection

<style>
    .break-section {
        background: #dfdddd81;
        width: 100%;
        /* position:absolute; */
    }
</style>