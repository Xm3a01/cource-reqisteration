<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
 
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
     <meta name="author" content="Lukasz Holeczek">
     <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
     <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
     <title> Admin Dashboard</title>

     @include('admins.dashboard._includes.styles')
    </head>
 <body class="navbar-fixed sidebar-nav fixed-nav">
     <header class="navbar">
         @include('admins.dashboard._includes.navbar')
     </header>
         @include('admins.dashboard._includes.sidebar')
     <!-- Main content -->
     <main class="main">

         @yield('content')

         @include('admins.dashboard._includes.scripts')
         @include('admins.dashboard._includes.messages')
     </main>

     
 </body>
 
 </html>
 