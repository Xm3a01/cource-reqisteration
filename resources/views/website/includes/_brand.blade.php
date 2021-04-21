<section id="">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade " data-ride="carousel">
  <ol class="carousel-indicators">
    @if (is_null($setting))
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @else
    @foreach ($setting->images as $index => $image)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index == 0 ? 'active' : ''}}"></li>
    @endforeach
    @endif
  </ol>
  <div class="carousel-inner">
    @if (is_null($setting))
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('assets/images/noImage.png')}}" height="500" alt="First slide">
    </div>
    @else
    @foreach ($setting->images as $index => $image)
    <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
      <img class="d-block w-100" src="{{$image->getUrl()}}" height="500" alt="First slide">
    </div>
    @endforeach
    @endif

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