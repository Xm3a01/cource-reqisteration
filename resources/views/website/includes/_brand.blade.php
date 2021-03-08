<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Your Bright Future<br>is our Mission</h1>
        <h2></h2>
        <a href="{{route('web.courses')}}"" class="btn-get-started">Get Started</a>
    </div>
</section>


<style>
    #hero {
    width: 100%;
    height: 80vh;
    background: url({!!$setting->image ?? ""!!}) center center;
    background-size: cover;
    position: relative;
    }
</style>