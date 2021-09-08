<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="{{asset('assets/global/images/favicon.png')}}" type="image/png">
    <script src="https://kit.fontawesome.com/d963bd4b19.js" crossorigin="anonymous"></script>
    <title> &amp; @yield('title')</title>
    <link href="{{asset('assets/global/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/css/ui.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/layout4/css/layout.css')}}" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="{{asset('assets/global/plugins/metrojs/metrojs.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/plugins/maps-amcharts/ammap/ammap.css')}}" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="{{asset('assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <!-- Bootstrap CSS -->
     <!----<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">---->
    <style>
     body{
       font-size:15px;
       }
     .card-style{
       background-color:#fff;
       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
       border-radious:5px;
       margin-bottom:60px;
       padding-bottom:20px;
       }
       .card-header-style {
            background: #28a745!important;
            padding: .75rem 1.25rem;
            color: #fff;
            margin-bottom: 0;
            background-color: rgba(0,0,0,.03);
            border-bottom: 1px solid rgba(0,0,0,.125);
        }
        .card-body-style {
    padding: 0px 10px;
    margin-top: 15px;
}

.card-body-style input {
    background: #fff;
}

        .card-footer-style {
            padding: .65rem 1.25rem;
            background-color: #f0f3f5;
            border-top: 1px solid #c2cfd6;
            color: #343a40;
            font-size: .875em;
            font-weight: 600;
            padding-top: 5px;
            text-transform: capitalize;
        }
        .card-footer-style input {
           background: #fff;
        }

      .card-footer-style input[type=submit] {
          background: #28a745;
          color: #fff;
          
       }
       .card-body-style input.form-control.btn.btn-success {
             background: #28a745;
          color: #fff;
        }
        .card-body-bg-style {
            background: #17a2b8;
            padding: 18px;
            color: #fff;
        }
        
        .card-body-bg-style input {
            background: #fff;
            margin-bottom: 5px;
        }
        
        .card-body-bg-style input[type=submit] {
            background: lightskyblue;
        }
       .dropdown-menu{
          min-width:18rem;
          font-size:14px;
         
         }
    </style>
    
</head>
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->

<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
<!-- BEGIN BODY -->

<body class="sidebar-top  theme-sdtl color-default dashboard">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
   
    <section>
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar">
            <div class="logopanel">
                <h1>
                    <a href=""></a>
                </h1>
            </div>
            <div class="sidebar-inner">
                <ul class="nav nav-sidebar">
                    <li class="nav-active "><a href="{{url('user/dashboard')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                  <li class="nav-active "><a href="{{url('user/shopping')}}"><i class="fas fa-shopping-cart"></i><span>Shopping</span></a></li>
                   <li class="dropdown" id="user-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                              <i class="fas fa-wallet"></i>
                                <span class="username">Wallet</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('user/withdraw')}}"><i class="fas fa-wallet"></i><span>Withdraw Wallet</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('user/carry')}}"><i class="fas fa-baby-carriage"></i><span>Carry Wallet</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('user/register_wallet')}}"><i class="fas fa-cash-register"></i><span>Register Wallet</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('user/renew')}}"><i class="icon-calendar"></i><span>Renew Wallet</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('user/sponsor')}}"><i class="fas fa-archive"></i><span>Sponsor Wallet</span></a>
                                </li>
                                 <li>
                                    <a href="{{ url('user/gen_wallet')}}"><i class="fab fa-trade-federation"></i><span>Genration Wallet</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('user/rankwallet')}}"><i class="fab fa-hackerrank"></i><span>Rank Wallet</span></a>
                                </li>
                               
                                <li>
                                    <a href="{{ url('user/youtube')}}"><i class="fab fa-youtube"></i><span>Youtube Wallet</span></a>
                                </li>
                            </ul>
                        </li>
                   <li class="dropdown" id="user-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="fas fa-th-list"></i>
                                <span class="username">My plan List</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                   <a href="{{url('user/marketingplan')}}" ><i class="fas fa-poll"></i><span>Marketing
                                 Details</span></a>
                                </li>
                                <li>
                                    <a href="{{url('user/renewplan')}}" ><i class="icon-calendar"></i><span>Renew
                                Details</span></a>
                                </li>
                                <li>
                                   <a href="{{url('user/rank')}}" ><i class="fab fa-hackerrank"></i><span>Rank
                                Details</span></a>
                                </li>
                                <li>
                                   <a href="{{ url('user/offer_details')}}" ><i class="fab fa-buffer"></i><span>Offer
                                Details</span></a>
                                </li>
                               
                            </ul>
                        </li>
                 
                  
                    <li class="nav-active "><a href="{{url('user/video')}}" ><i class="fab fa-youtube"></i><span>Youtube Click</span></a></li>
                    <li class="nav-active "><a href="{{ url('user/new_membar')}}" ><i class="fas fa-user"></i><span>New Member</span></a></li>
                    <li class="nav-active "><a href="{{ url('user/car_tre')}}" ><i class="fas fa-baby-carriage"></i><span>Carry Tree</span></a></li>


                               
                </ul>
                <div class="sidebar-footer clearfix">
                    <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top"
                        data-original-title="Settings">
                        <i class="icon-settings"></i></a>
                    <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top"
                        data-original-title="Fullscreen">
                        <i class="icon-size-fullscreen"></i></a>
                    <a class="pull-left" href="#" data-rel="tooltip" data-placement="top"
                        data-original-title="Lockscreen">
                        <i class="icon-lock"></i></a>
                    <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip"
                        data-placement="top" data-original-title="Logout">
                        <i class="icon-power"></i></a>
                </div>
            </div>
        </div>

        
       

        <!-- END SIDEBAR -->
        <div class="main-content">
            <!-- BEGIN TOPBAR -->
            <div class="topbar">

                <div class="header-right">
                    <ul class="header-menu nav navbar-nav">

                        
                        <!-- BEGIN USER DROPDOWN -->
                        <li class="dropdown" id="user-header">
                            <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img src="{{asset('assets/global/images/avatars/user1.png')}}" alt="user image">
                                <span class="username">Hi, John Doe</span>
                            </a>
                            <ul class="dropdown-menu">
                                
                               
                                <li>
                                    <a href="#"><i class="icon-settings"></i><span>Account Settings</span></a>
                                </li>
                                <li>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-settings"></i> <span> {{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </li>
                        <!-- END USER DROPDOWN -->
                        <!-- CHAT BAR ICON -->

                    </ul>
                </div>
                <!-- header-right -->
            </div>
            <!-- END TOPBAR -->
            <!-- BEGIN PAGE CONTENT -->
            <div class="page-content page-thin" style="top: 0;">

                @yield('content')

                <div class="footer">
                    <div class="copyright">
                        <p class="pull-left sm-pull-reset">
                            <span>Copyright <span class="copyright">©</span> 2021 </span>
                            <span>RYCKI</span>.
                            <span>All rights reserved. </span>
                        </p>
                        <p class="pull-right sm-pull-reset">
                            <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of
                                    use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END MAIN CONTENT -->

    </section>

    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->

   <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    <script src="{{asset('assets/global/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
    <script src="{{asset('assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/global/plugins/gsap/main-gsap.min.js')}}"></script>
    <script src="{{asset('assets/global/plugins/tether/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/global/plugins/appear/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/global/plugins/jquery-cookies/jquery.cookies.min.js')}}"></script>
    <!-- Jquery Cookies, for theme -->
    <script src="{{asset('assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js')}}"></script>
    <!-- simulate synchronous behavior when using AJAX -->
    <script src="{{asset('assets/global/plugins/bootbox/bootbox.min.js')}}"></script>
    <!-- Modal with Validation -->
    <script src="{{asset('assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Custom Scrollbar sidebar -->
    <script src="{{asset('assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js')}}"></script>
    <!-- Show Dropdown on Mouseover -->
    <script src="{{asset('assets/global/plugins/charts-sparkline/sparkline.min.js')}}"></script>
    <!-- Charts Sparkline -->
    <script src="{{asset('assets/global/plugins/retina/retina.min.js')}}"></script>
    <!-- Retina Display -->
    <script src="{{asset('assets/global/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Select Inputs -->
    <script src="{{asset('assets/global/plugins/icheck/icheck.min.js')}}"></script>
    <!--Bootstrap Cdn link-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>-->
    <!-- Checkbox & Radio Inputs -->
    <script src="{{asset('assets/global/plugins/backstretch/backstretch.min.js')}}"></script>
    <!-- Background Image -->
    <script src="{{asset('assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- Animated Progress Bar -->
    <script src="{{asset('assets/global/js/builder.js')}}"></script>
    <!-- Theme Builder -->
    <script src="{{asset('assets/global/js/sidebar_hover.js')}}"></script>
    <!-- Sidebar on Hover -->
    <script src="{{asset('assets/global/js/application.js')}}"></script>
    <!-- Main Application Script -->
    <script src="{{asset('assets/global/js/plugins.js')}}"></script>
    <!-- Main Plugin Initialization Script -->
    <script src="{{asset('assets/global/js/widgets/notes.js')}}"></script>
    <!-- Notes Widget -->
    <script src="{{asset('assets/global/js/quickview.js')}}"></script>
    <!-- Chat Script -->
    <script src="{{asset('assets/global/js/pages/search.js')}}"></script>
    <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPT -->
    <script src="{{asset('assets/global/plugins/noty/jquery.noty.packaged.min.js')}}"></script>
    <!-- Notifications -->
    <script src="{{asset('assets/global/plugins/bootstrap-editable/js/bootstrap-editable.min.js')}}"></script>
    <!-- Inline Edition X-editable -->
    <script src="{{asset('assets/global/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js')}}"></script>
    <!-- Context Menu -->
    <script src="{{asset('assets/global/plugins/multidatepicker/multidatespicker.min.js')}}"></script>
    <!-- Multi dates Picker -->
    <script src="{{asset('assets/global/js/widgets/todo_list.js')}}"></script>
    <script src="{{asset('assets/global/plugins/metrojs/metrojs.min.js')}}"></script>
    <!-- Flipping Panel -->
    <script src="{{asset('assets/global/plugins/charts-chartjs/Chart.min.js')}}"></script>
    <!-- ChartJS Chart -->
    <script src="{{asset('assets/global/plugins/charts-highstock/js/highstock.js')}}"></script>
    <!-- financial Charts -->
    <script src="{{asset('assets/global/plugins/charts-highstock/js/modules/exporting.js')}}"></script>
    <!-- Financial Charts Export Tool -->
    <script src="{{asset('assets/global/plugins/maps-amcharts/ammap/ammap.js')}}"></script>
    <!-- Vector Map -->
    <script src="{{asset('assets/global/plugins/maps-amcharts/ammap/maps/js/worldLow.js')}}"></script>
    <!-- Vector World Map  -->
    <script src="{{asset('assets/global/plugins/maps-amcharts/ammap/themes/black.js')}}"></script>
    <!-- Vector Map Black Theme -->
    <script src="{{asset('assets/global/plugins/skycons/skycons.min.js')}}"></script>
    <!-- Animated Weather Icons -->
    <script src="{{asset('assets/global/plugins/simple-weather/jquery.simpleWeather.js')}}"></script>
    <!-- Weather Plugin -->
    <script src="{{asset('assets/global/js/widgets/widget_weather.js')}}"></script>
    <script src="{{asset('assets/global/js/pages/dashboard.js')}}"></script>
    <!-- END PAGE SCRIPT -->
    <script src="{{asset('assets/admin/layout4/js/layout.js')}}"></script>
<script> 
  var url = "{{URL::to('/')}}";
  $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

</script>
    @yield('page-script')
</body>

</html>