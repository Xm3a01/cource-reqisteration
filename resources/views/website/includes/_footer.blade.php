<div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
            &copy; Copyright <strong><span> <a href="http://www.hashdevelopedprojects.com"> Hash Developed Projects</a></span></strong>. All Rights Reserved
        </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
        @if (!is_null($setting))
            
        @foreach ($setting->links as $link)
          <a href="{{$link->link}}" class="twitter"><i class="bx {{$link->s_icon}}"></i></a>
        @endforeach
        @endif
    </div>
</div>
