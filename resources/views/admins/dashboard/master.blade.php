
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admins.dashboard._includes.styles')
</head>

<body class="" style="background-color: #f4f3ef;">
  <div class="wrapper ">

    @include('admins.dashboard._includes.sidebar')              

    <div class="main-panel">
      <!-- Navbar -->
    @include('admins.dashboard._includes.navbar' , ['title' => $title ?? "Dashboard"] )
      
      <!-- End Navbar -->
      <div class="content">

        @yield('content')
     
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('admins.dashboard._includes.scripts')
  @include('admins.dashboard._includes.messages')

</body>

</html>