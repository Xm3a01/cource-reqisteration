<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admins.dashboard')}}"><i class="icon-speedometer"></i> الصفحة الرئيسية </a>
            </li>

            <li class="nav-title">
                المحتويات
            </li>
            <li class="nav-item nav-dropdown">
                @if (Auth::guard('admin')->user()->is_supervisor)
                  <a class="nav-link " href="{{route('products.index')}}"><i class="icon-paypal"></i> المنتجات</a>
                @else
                    <a class="nav-link " href="{{route('users.index')}}"><i class="icon-user"></i> المستخدمين</a>
                    <a class="nav-link " href="{{route('admins.index')}}"><i class="icon-user"></i> مشرفين</a>
                    <a class="nav-link " href="{{route('products.index')}}"><i class="icon-paypal"></i> المنتجات</a>
                    <a class="nav-link " href="{{route('categories.index')}}"><i class="icon-tag"></i> التصنيفات</a>
                    <a class="nav-link " href="{{route('orders.index')}}"><i class="icon-handbag"></i> الطالبات</a>
                @endif
              
            </li>

        </ul>
    </nav>
</div>