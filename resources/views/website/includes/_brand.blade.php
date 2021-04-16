<section id="">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{$setting->image ?? ""}}" height="500" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="{{$setting->image ?? ""}}" height="500" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="{{$setting->image ?? ""}}" height="500" alt="Third slide">
      <div class="carousel-caption d-none d-md-block" style=" background: #2c2b2b8a; padding:5px">
        <h5>Hello<h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis illum dolor cum at officia, eos placeat, necessitatibus saepe consequatur ipsa labore vitae mollitia iure aliquid tempore, cumque minus harum error.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<script>
  $('.carousel').carousel({
  interval: 200
})
</script>

<style>
    .carousel-item img {
    /* width: 100%;
    height: 80vh; */
    /* background: url({!!$setting->image ?? ""!!}) center center;
    background-size: cover;
    position: relative; */
    brightness(200%)
    }
</style>