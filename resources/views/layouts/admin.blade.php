<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="{{asset('assets/global/images/favicon.png')}}" type="image/png">
    <title>  @yield('title')</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{asset('assets/global/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/css/ui.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/layout4/css/layout.css')}}" rel="stylesheet">
    <script src="{{asset('assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <!-- Fontawesom icon -->
    <script src="https://kit.fontawesome.com/d963bd4b19.js" crossorigin="anonymous"></script>
     <!-- Custom Css link -->
   @yield('page-style')
   <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>


<body class="sidebar-top  theme-sdtl color-default dashboard">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php $plan=App\Models\Plan::where('status',1)->first(); ?>
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
                    <li class="nav-active active"><a href=""><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li class="nav-active "><a href="" data-toggle="modal" data-target="#exampleModalCenter1"><i
                                class="icon-settings"></i><span>Offer List</span></a>
                    </li>
                    <li class="nav-active "><a href="{{url('marketing')}}" data-toggle="modal"
                            data-target="#exampleModalCenter2"><i class="icon-settings"></i><span>Marketing
                                Plan Details</span></a></li>
                    <li class="nav-active "><a href="{{url('renew')}}" data-toggle="modal"
                            data-target="#exampleModalCenter3"><i class="icon-list"></i><span>Renew
                                Details</span></a></li>
                    <li class="nav-active "><a href="{{url('rank')}}" data-toggle="modal"
                            data-target="#exampleModalCenter4"><i class="icon-list"></i><span>Rank
                                Details</span></a></li>
                  <li class="nav-active "><a href="{{url('admin/video')}}" ><i class="icon-list"></i><span>
                     Video</span></a></li>

                   <li class="dropdown" id="user-header">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-list"></i>
                            <span class="username">Web Setting</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('admin/plan')}}"><i class="icon-user"></i><span>Plan</span></a>
                            </li>
                            <li>
                                <a href="{{url('admin/work')}}"><i class="icon-calendar"></i><span>Work</span></a>
                            </li>
                            <li>
                                <a href="{{url('admin/slider')}}"><i class="icon-settings"></i><span>Slider</span></a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="dropdown" id="user-header">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-list"></i>
                            <span class="username">Setting</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('admin/rank')}}"><i class="icon-user"></i><span>Rank</span></a>
                            </li>
                            <li>
                                <a href="{{url('admin/matching')}}"><i class="icon-calendar"></i><span>Matching</span></a>
                            </li>
                            <li>
                                <a href="{{ url('admin/commission')}}"><i class="icon-settings"></i><span>Commission</span></a>
                            </li>

                            <li>
                                <a href="{{ url('admin/sponsor')}}"><i class="icon-settings"></i><span>Sponsor</span></a>
                            </li>
                           
                        </ul>
                    </li>
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

        <!-- modal start -->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Offer List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{url('admin/offer')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="offer" id="">
                            <span><img src="{{asset('assets/images/plan/'.@$plan->offer)}}" height="350" width="100%"
                                    alt=""></span>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Marketing
                                Plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{url('admin/marketing')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="markating" id="">
                            <span><img src="{{asset('assets/images/plan/'.@$plan->markating)}}" height="350" width="100%"
                                    alt=""></span>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Renew
                                Plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{url('admin/renew')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="renu" id="">
                            <span><img src="{{asset('assets/images/plan/'.@$plan->renu)}}" height="350" width="100%"
                                    alt=""></span>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rank
                                List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{url('admin/rank')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="rank" id="">
                            <span><img src="{{asset('assets/images/plan/'.@$plan->rank)}}" height="350" width="100%"
                                    alt=""></span>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal end -->

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
                                    <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-calendar"></i><span>My Calendar</span></a>
                                </li>
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
                {!! @Toastr::render() !!}  <!-- toastr Notification -->
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
 
    <script src="{{asset('assets/global/plugins/retina/retina.min.js')}}"></script>
    <!-- Retina Display -->
    <script src="{{asset('assets/global/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Select Inputs -->
    <script src="{{asset('assets/global/plugins/icheck/icheck.min.js')}}"></script>
    <!-- Checkbox & Radio Inputs -->

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