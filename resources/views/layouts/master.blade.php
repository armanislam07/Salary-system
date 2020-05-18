
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reliable Builders Ltd | RBL</title>
  <link rel="icon" href="{{asset('css/images/rb-ltd-logo.png')}}" type = "image/x-icon">
   <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">  -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- table data search -->
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    

  <link rel="stylesheet" href="{{ asset('css/app.css')}}" >

</head>
<body class="hold-transition sidebar-mini">
<div id="app" class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
 
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
       <img src="{{asset('css/images/rb-ltd-logo.png')}}" alt="Reliable Builders" class="brand-image img-circle elevation-3" > 
      <span class="brand-text font-weight-light">Reliable Builders</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/usersImage/{{Auth::user()->photo}}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">{{Auth::user()->name}}</>
          <!-- Status -->          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link active">
            <i class="fa fa-tachometer-alt"></i> 
            <span>Dashboard</span></a>
          </li>
        <li class="nav-item">
          <a id="profile_page" href="{{route('profile')}}" class="nav-link">
            <i class="fa fa-user"></i> 
            <span>Profile</span></a>
        </li>
        @can('isAdmin')
        <li class="nav-item">
          <a id="project_list_view" href="{{route('project.add')}}" class="nav-link">
            <i class="fa fa-road"></i> 
            <span>Projects</span></a>
        </li>
        @endcan        
        <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="fa fa-users"></i>
              <p>
                Employees
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employes.view')}}" class="nav-link">
                  <i class="fas fa-chalkboard-teacher"></i> 
                  <span>Employees List</span>
                </a>
              </li>              
              <li class="nav-item">
                <a href="{{route('employes.salary.list')}}" class="nav-link">
                  <i class="fa fa-money-check-alt"></i> 
                  <span>Salary</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-wallet"></i> 
                  <span>Advance Salary</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-hand-holding-usd"></i> 
                  <span>Salary Loan</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-people-arrows"></i> 
                  <span>Posting</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-home"></i> 
                  <span>Leave</span>
                </a>
              </li>        
            </ul>
        </li>
        <li class="nav-item">
          <a id="getApi" href="" class="nav-link">
            <i class="fa fa-users"></i> 
            <span>api</span></a>
        </li>
        <li class="nav-item">
         <a href="{{ route('logout') }}" class="nav-link"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
           <i class="fa fa-power-off text-red"></i>   <span>Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="/">Reliable Builders</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<!-- <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="{{asset('js/adminlte.min.js')}}"></script> -->





<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/js/adminlte.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script> -->
<!-- <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->


<!-- <script src="http://code.jquery.com/jquery-1.9.1.js" ></script> -->

<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js" defer></script>


<script src="{{asset('js/custom.js')}}" ></script>

</body>
</html>
