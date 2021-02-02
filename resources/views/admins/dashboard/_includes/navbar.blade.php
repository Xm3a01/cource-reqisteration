{{--
<div class="container-fluid">
    <ul class="nav navbar-nav pull-right hidden-md-down">
        <img src="{{ asset('vendor/img/Logo.jpg') }}" class="img-avatar" alt="E-store.com">
        <li class="nav-item">
            <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
        </li>

    </ul>
    <ul class="nav navbar-nav pull-left hidden-md-down">

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-bell"></i><span class="tag tag-pill tag-danger">5</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">

                <img src="{{ Auth::user()->avatar }}" height="40" width="38" style="border-radius: 50%"
                    class="img-avatar" alt="E-store.com">
                <span class="hidden-md-down">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-xs-center">
                    <strong>الحساب</strong>
                </div>

                <a class="dropdown-item" href="{{ route('super.admin', Auth::user()->id) }}"><i
                        class="icon-settings"></i> إعدادات الحساب</a>
                <a class="dropdown-item" href="{{ route('admins.logout') }}"><i class="fa fa-lock"></i> خروج</a>
            </div>
        </li>
        <li class="nav-item">
        </li>

    </ul>

</div> --}}

<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">

            <a class="navbar-brand" href="javascript:;">{{ $title }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="nc-icon nc-zoom-split"></i>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">

                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>
                            <span class="d-lg-none d-md-block"></span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-rotate" href="javascript:;">
                        <i class="nc-icon nc-settings-gear-65"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Account</span>
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
