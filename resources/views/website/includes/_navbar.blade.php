
    <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{route('index')}}">Home</a></li>
            {{-- <li class="{{ request()->is('*abouts*') ? 'active' : '' }}"><a href="{{route('abouts.index')}}">About</a></li> --}}
            <li class="{{ request()->is('*courses*') ? 'active' : '' }}"><a href="{{route('web.courses')}}">Courses</a></li>
            <li class="{{ request()->is('*events*') ? 'active' : '' }}"><a href="{{route('web.events')}}">Events</a></li>
            <li class="{{ request()->is('*galleries*') ? 'active' : '' }}"><a href="{{route('web.galleries')}}">Gallery</a></li>
            <li class="{{ request()->is('*trainers*') ? 'active' : '' }}"><a href="{{route('web.trainers')}}">Trainers</a></li>
            <li class="{{ request()->is('*contact*') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact</a></li>
        </ul>
    </nav>
    <a href="{{route('web.courses')}}" class="get-started-btn rounded-sm">Get Started</a>
