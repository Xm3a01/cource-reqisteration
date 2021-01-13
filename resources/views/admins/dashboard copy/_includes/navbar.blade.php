
<div class="container-fluid">
    <ul class="nav navbar-nav pull-right hidden-md-down">
        <img src="{{asset('vendor/img/Logo.jpg')}}" class="img-avatar" alt="E-store.com">
        <li class="nav-item">
            <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
        </li>

    </ul>
    <ul class="nav navbar-nav pull-left hidden-md-down">
        
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-bell"></i><span class="tag tag-pill tag-danger">5</span></a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                <img src="{{Auth::user()->avatar}}"  height="40" width="38" style="border-radius: 50%" class="img-avatar" alt="E-store.com">
                <span class="hidden-md-down">{{Auth::user()->name}}</span>            
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-xs-center">
                    <strong>الحساب</strong>
                </div>
                
                <a class="dropdown-item" href="{{route('super.admin' , Auth::user()->id)}}"><i class="icon-settings"></i> إعدادات الحساب</a>
                <a class="dropdown-item" href="{{route('admins.logout')}}"><i class="fa fa-lock"></i> خروج</a>
            </div>
        </li>
        <li class="nav-item">
        </li>

    </ul>
    
</div>