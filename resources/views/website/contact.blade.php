@extends('website.layouts.app')

@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Contact Us</h2>
            <p>contact us by sending email and we will soon comeback to you. </p>
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

                                    <div class="col-lg-4">
                                        <div class="info">
                                            <div class="address">
                                                <i class="icofont-google-map"></i>
                                                <h4>Location:</h4>
                                                <p>Manshyia,Khartoum , Bahri </p>
                                            </div>

                                            <div class="email">
                                                <i class="icofont-envelope"></i>
                                                <h4>Email:</h4>
                                                <p>info@courses-ccst.com</p>
                                            </div>

                                            <div class="phone">
                                                <i class="icofont-phone"></i>
                                                <h4>Call:</h4>
                                                <p>(249) 121117920</p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-8 mt-5 mt-lg-0">

                                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                            <div class="form-row">
                                                <div class="col-md-6 form-group">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Your Name" data-rule="minlen:4"
                                                        data-msg="Please enter at least 4 chars" />
                                                    <div class="validate"></div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Your Email" data-rule="email"
                                                        data-msg="Please enter a valid email" />
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject" data-rule="minlen:4"
                                                    data-msg="Please enter at least 8 chars of subject" />
                                                <div class="validate"></div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                    data-msg="Please write something for us"
                                                    placeholder="Message"></textarea>
                                                <div class="validate"></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="loading">Loading</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                            </div>
                                            <div class="text-center"><button class=" rounded-sm" type="submit">Send Message</button></div>
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
    <table>
        <tr>
            <td>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.842748323739!2d32.52914291371568!3d15.600048389172233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8e04836de6e3%3A0xc2738a1e753e3d38!2sComboni%20Short%20Courses%20Center!5e0!3m2!1sen!2sus!4v1587893973137!5m2!1sen!2sus"
                    width="450" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                <div class="conta-posi-w3ls p-4 rounded">

            </td>
            <td>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.895789939327!2d32.57069971485242!3d15.597215689174089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e91866c6d8929%3A0x1dac5e468099f7bd!2sComboni%20College%20Khartoum!5e0!3m2!1sen!2s!4v1591616027090!5m2!1sen!2s"
                    width="450" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                <div class="conta-posi-w3ls p-4 rounded">

            </td>
            <td>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.4659199175467!2d32.534538880068055!3d15.620158577542814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8df7d2fd4b1f%3A0x20977023cc5cf4f3!2sComboni%20College%20Bahri%20Branch!5e0!3m2!1sen!2s!4v1591689922148!5m2!1sen!2s"
                    width="450" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                <div class="conta-posi-w3ls p-4 rounded">
            </td>
        </tr>
    </table>
@endsection
