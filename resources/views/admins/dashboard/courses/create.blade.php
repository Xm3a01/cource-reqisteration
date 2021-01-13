<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Short Courses-CCST
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
       <!-- <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>-->
          <!-- <p>CT</p> -->
       <!-- </a>-->
        <a href="https://www.creative-tim.com" class="simple-text logo-small">
            Short Courses-CCST
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="./index.html">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
         <!-- <li>
            <a href="./managers.html">
              <i class="nc-icon nc-diamond"></i>
              <p>Icons</p>
            </a>
          </li>-->
          <li class="active ">
            <a href="./courses.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>courses</p>
            </a>
          </li>
          <li >
            <a href="./events.html">
              <i class="nc-icon nc-bell-55"></i>
              <p>Events</p>
            </a>
          </li>
          <li >
            <a href="./managers.html">
              <i class="nc-icon nc-single-02"></i>
              <p>managers</p>
            </a>
          </li>
          <li >
            <a href="./students.html">
              <i class="nc-icon nc-globe"></i>
              <p>Students</p>
            </a>
          </li>
          <li>
           <!--<a href="./typography.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>-->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            
            <a class="navbar-brand" href="javascript:;">Courses</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <!-- End Navbar -->
      <div class="content">

        
        
            
                <div class="col-md-8">
                    <div class="card card-user">
                      <div class="card-header">
                        <h5 class="card-title">Add Course</h5>
                      </div>
                      <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                  <div class="form-group">
                                    <label>Course Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                  </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                  <div class="form-group">
                                    <label>H/week</label>
                                    <input type="number" class="form-control" placeholder="H/w" >
                                  </div>
                                </div>
                              </div>
                             <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                      <label>Feeses</label>
                                      <input type="number" class="form-control" placeholder="Feeses" >
                                    </div>
                                  </div>
                                <div class="col-md-6 pl-1">
                                  <div class="form-group">
                                    <label>seats/group</label>
                                    <input type="number" class="form-control" placeholder="seats/group " >

                                  </div>
                                </div>
                              </div>
                          
                           
                         
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea"></textarea>
                              </div>
                            </div>
                          </div>
                         
                         
                         
                          <div class="row">
                            <div class="update ml-auto mr-auto">
                              <button type="submit" class="btn btn-primary btn-round">Add</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
              
         
        
        
          
       
     
    </div>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
