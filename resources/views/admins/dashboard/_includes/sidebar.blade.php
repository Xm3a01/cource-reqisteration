{{-- <div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admins.dashboard') }}"><i class="icon-speedometer"></i> الصفحة
                    الرئيسية </a>
            </li>

            <li class="nav-title">
                المحتويات
            </li>
            <li class="nav-item nav-dropdown">
                @if (Auth::guard('admin')->user()->is_supervisor)
                    <a class="nav-link " href="{{ route('products.index') }}"><i class="icon-paypal"></i> المنتجات</a>
                    @else 
                    <a class="nav-link " href="{{ route('users.index') }}"><i class="icon-user"></i> المستخدمين</a>
                    <a class="nav-link " href="{{ route('admins.index') }}"><i class="icon-user"></i> مشرفين</a>
                    <a class="nav-link " href="{{ route('products.index') }}"><i class="icon-paypal"></i> المنتجات</a>
                    <a class="nav-link " href="{{ route('categories.index') }}"><i class="icon-tag"></i> التصنيفات</a>
                    <a class="nav-link " href="{{ route('orders.index') }}"><i class="icon-handbag"></i> الطالبات</a>
                @endif

            </li>

        </ul>
    </nav>
</div> --}}

<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="/dashboard" class="simple-text logo-small">
         <div class="logo-image-big">
          <img src="/assets/images/favico.ico" height="90" width="100" class="col-md-6 offset-md-3">
        </div>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class=" {{ request()->is('dashboard') ? 'active' : '' }} ">
                <a href="/dashboard">
                    <i class="nc-icon nc-bank"></i>
                    <p>Home</p>
                </a>
            </li>
            @if (Auth::guard('admin')->user()->is_supervisor)
            <li class="{{ request()->is('*courses*') ? 'active' : '' }}">
                <a href="{{ route('courses.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>courses</p>
                </a>
            </li>
            <li class="{{ request()->is('*events*') ? 'active' : '' }}">
                <a href="{{ route('events.index') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Events</p>
                </a>
            </li>
            <li class="{{ request()->is('*galleries*') ? 'active' : '' }}">
                <a href="{{ route('galleries.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Gallery</p>
                </a>
            </li>
            @else
            <li class="{{ request()->is('*courses*') ? 'active' : '' }}">
                <a href="{{ route('courses.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>courses</p>
                </a>
            </li>
            <li class="{{ request()->is('*events*') ? 'active' : '' }}">
                <a href="{{ route('events.index') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Events</p>
                </a>
            </li>
            <li class="{{ request()->is('*managers*') ? 'active' : '' }}">
                <a href="{{ route('managers.index') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>managers</p>
                </a>
            </li>
            <li class="{{ request()->is('*students*') ? 'active' : '' }}">
                <a href="{{ route('students.index') }}">
                    <i class="nc-icon nc-badge"></i>
                    <p>Students</p>
                </a>
            </li>
            <li>
            <li class="{{ request()->is('*galleries*') ? 'active' : '' }}">
                <a href="{{ route('galleries.index') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Gallery</p>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>

<style>
    .sidebar[data-active-color="danger"] .nav li.active>a,
    .sidebar[data-active-color="danger"] .nav li.active>a i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"],
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"] i,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active .sidebar-mini-icon,
    .off-canvas-sidebar[data-active-color="danger"] .nav li.active>a[data-toggle="collapse"]~div>ul>li.active>a {
        color: #51cbce;
        opacity: 1;
    }

</style>
