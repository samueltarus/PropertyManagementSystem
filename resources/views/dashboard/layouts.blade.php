<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="sty lesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-dark  secondary-color">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ action("DashboardController@index")}}" class="btn btn-secondary">Home</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user8-128x128.jpg') }} "alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Company Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Person Log in</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="{{ action("DashboardController@index")}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ URL::to('all_landlord')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               LandLords
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              
              <li class="nav-item">
                <a href="{{ URL::to('all-landlord') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Landlords List </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('add-landlord') }}"  class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Register New Landlords</p>
                </a>
              </li>
            </ul>
            
          </li>
          <li class="nav-item">
            <a href="{{ action('PropertyController@index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Apartments
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ action("PropertyController@index")}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> All Properties List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ action('PropertyController@create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Register New Apartments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Apartment Types</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ action('ManagePropertiesController@create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Houses</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ action('TenantController@index')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               Tenants
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('tenant.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Tenant  List  Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ action('TenantController@create') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register Tenant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{action('ManageTenantController@create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Assign House</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ action('HousesController@index')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Houses
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ action("HousesController@index")}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  Houses  List</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{action ('VacantController@index')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> List Vacant</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{action ('OccupiedController@index')}}" class="nav-link  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p> List Occupied</p>
                </a>
                
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ action('ManagePropertiesController@create')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Deposit Reports
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ action('ManagePropertiesController@create')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Fees
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ action('ManagePropertiesController@create')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Invoices
                <span class="right badge badge-danger"></span>
              </p>
            </a>
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
                <a href="{{ action('InvoiceController@index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Invoices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('prepare-invoice')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prepare Invoice</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pay Due Invoices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Overpayments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ action('ManagePropertiesController@create')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Incomes Reports
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{URL::to('/company-income')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Income</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/landlord-income')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Landlord Income</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ action('ManagePropertiesController@create')}}" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Admins|Users
                <span class="right badge badge-danger"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> All Admins </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  Register Admin</p>
                </a>
              </li>
              
            </ul>
          </li>
        
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Log Out</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.3
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">


      $(document).ready(function(){

        $(document).on('change','.property_name',function(){

          var property_id=$(this).val();

          var div=$(this).parents();

          var op= "";
        
        
           $.ajax({
            type:'get',
            url:'{!!URL::to('findhouse_number')!!}',
            data:{'id':property_id},
            

            success:function(data){
             
              op+='<option value ="0" selected disabled><Chose Property </option>';
                 for(var i=0; i<data.length;i++){
                op+='<option value="'+data[i].id+'">'+data[i].house_number+'</option>';
                console.log(op);
                 }

              div.find('.house_number').html(" ");
              div.find('.house_number').append(op);
            },

            error:function(){

            }
          });
        });

        $(document).on('change','.house_number',function(){
          var monthly_rent=$(this).val();

          var a=$(this).parents();

          console.log(monthly_rent);

          var op= "";
          $.ajax({
            
            type:'get',
            url:'{!!URL::to('findmonthly_rent')!!}',
            data:{'id':monthly_rent},
            dataType:'json',

            success:function(data){

              // console.log('Rent');
              // console.log(data.monthly_rent);
              a.find('.monthly_rent').val(data.monthly_rent);

            },

            error:function(){

            }
          });

          
        });
      });

    

  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>
