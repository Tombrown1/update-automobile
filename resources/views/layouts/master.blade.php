<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('pageTitle') - Aba Sports Club  </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!--Custome-->
  <link rel="icon" type="image/png" href="{{ asset('backend/favicon.ico') }}">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-datetimepicker.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }

    .navbar-light .navbar-nav .nav-link {
      color: red;
    }

    .dot {
      height: 10px;
      width: 10px;
      background-color: green;
      border-radius: 50%;
      display: inline-block;
    }
  </style>
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link" target="_blank">Home</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="dropdown-divider"></div>

              <a href="#" class="dropdown-item">
                <div class="p-3">
                  <i class="fa fa-key"></i> 
                  <span class="ml-3">Change Password</span>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                <!-- Logout -->
                <form action="{{route('logout')}}" method="post">
                  @csrf 
                  <div class="p-3">
                    <i class="nav-icon fa fa-power-off text-red"></i>
                  <button type="submit" class="btn">Logout</button>
                  </div>
                </form>
              </a>
            </div>
          </li>
        </ul>
      </nav>

       @include('component.sidebar') 

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->


      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ date('Y') }} <a href="{{ url('/') }}"></a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->

      <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>

      <script src="{{ asset('backend/plugins/popper/popper.min.js') }}"></script>

     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
  
     <!-- Bootstrap 4 -->
     <script src="{{ asset('backend/dist/js/bootstrap.min.js') }}"></script>
    
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>



    <!--custom-->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
  

    <script>
      //Time picker
    
      
      //Datatables
      $(document).ready( function () {
          $('#example1').DataTable(
            {
                "ordering": false
            });

          $('#example2').DataTable(
            {
                "ordering": true
            });
      } );

      //Toggle sidebar
      $(function() {

          $('#sidebarCollapse').on('click', function() {
              $('#sidebar, #content').toggleClass('active');
          });
      });

      // function myPassword() {
      //   var x = document.getElementById("password");
      //   if (x.type === "password") {
      //       x.type = "text";
      //   } else {
      //       x.type = "password";
      //   }
      // } 
    </script>

    <script>
        function myFunction() {
          var x = document.getElementById("mySelect").value;
          if (x=='archive') {
            document.getElementById('archive').style.display = 'block';
            document.getElementById('new').style.display = 'none';
          }

          if (x=='new') {
            document.getElementById('new').style.display = 'block';
            document.getElementById('archive').style.display = 'none';
          }

        }

        function eyeFunction() {
          var x = document.getElementById("mySelectEye").value;
          if (x=='Yes') {
            document.getElementById('eye').style.display = 'block'; 
          }
          else{
            document.getElementById('eye').style.display = 'none';
          }
        }
    </script>

  </body>
</html>
