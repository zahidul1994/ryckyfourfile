<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fontawesome icon -->
    <script src="https://kit.fontawesome.com/d963bd4b19.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link rel="stylesheet" href="frontend/css/style.css">

    <title>RYCKI.NET </title>
    <style>
    body {
        margin: 0;
        padding: 0;
    }



    .heading_top h2 {
        font-size: 42px;
        letter-spacing: -0.5px;
        font-weight: 700;
        padding: 0;
        margin: 0;
        font-family: 'Raleway', sans-serif;
        position: relative;
        text-transform: uppercase;
        line-height: 45px !important;
    }

    p {
        color: #272f43;
    }

    .section_padding {
        padding: 90px 0px;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    ul li {
        display: inline-block;
        list-style: none;
    }

    /***************************
 Header Area
/***************************/
    a.nav-link {
        color: rgba(0, 0, 0, .5);
        text-transform: uppercase;
    }

    a.nav-link:hover {
        color: #fff;
        padding-bottom: 5px;
        border-bottom: 2px solid red;
    }

    .carousel-indicators [data-bs-target] {
        width: 15px;
        margin: 0 8px;
        background: red;
        border-radius: 50%;
    }

    /***************************
 Service area
/***************************/
    .service_area {
        background: #f6f6f6;
        text-align: center;
    }

    .service_box {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        padding: 25px 14px;
        margin-top: 50px;
    }

    .service_box:hover {
        background: #fc301e;
    }

    .service_box h4 {
        font-weight: 400;
        color: #07528d;
        margin-top: 25px;
        font-size: 20px;
    }

    .service_box p {
        line-height: 20px;
        margin-top: 18px;
        font-weight: 400;
    }


    /***************************
 About Area
/***************************/
    .about_area {
        background: #f6f6f6;
        font-size: 17px;
        line-height: 1.7;
    }

    .heading_main {
        margin-bottom: 40px;
    }

    .heading_main h2 {
        font-size: 35px;
    }

    .heading_small h4 {
        color: #272f43;
        font-size: 30px;
        border-bottom: solid #ddd 1px;
        margin-bottom: 40px;
        padding-bottom: 25px;
        margin-top: 50px;
    }

    .readmore_btn {
        margin-top: 50px;
    }

    .readmore_btn a {
        background: #272f43;
        width: 150px;
        padding: 20px 40px;
        text-align: center;
        margin-top: 30px;
        color: #fff;
        text-transform: uppercase;
        transition: 0.5s;
        text-decoration: none;
    }

    .readmore_btn a:hover {
        background: #fc301e;
    }


    /***************************
 Prev Project area
/***************************/
    img.img-responsive {
        width: 100%;
    }

    section.prev-project.section_padding {
        background: #f6f6f6;
    }

    section.prev-project.section_padding p {}

    .heading_main.text-center p {
        font-size: 20px;
        line-height: 1.7;
        margin-top: 40px;
    }

    /***************************
  News later area
/***************************/

    .news_later {
        background: #262e41;
    }

    .form-group input[type=email] {
        width: 430px;
        height: 60px;
        padding: 15px 20px;
        border: none;
        float: left;
        margin: 0;
        font-size: 18px;
        font-weight: 400;
    }

    .form-group input[type=submit] {
        height: 60px;
        width: 210px;
        border: none;
        float: left;
        margin: 0;
        background: #ef4023;
        color: #fff;
        font-size: 18px;
        font-weight: 400;
        cursor: pointer;
    }

    /***************************
  Blog  area start
/***************************/
    .blog-area {
        background: #f6f6f6;

    }

    .blog-item {
        margin-top: 40px;
        position: relative;

    }

    .blog-item img {
        position: relative;
        width: 100%;
    }

    .blog_img_hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;


    }

    .blog_img_hover:after {
        content: "";
        top: 0;
        left: 0;
        background-color: green;
        width: 100%;
        height: 100%;
        z-index: -1;


    }

    .blog_hover_content {
        background: red;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: auto;
        text-align: center;
        color: #fff;
        padding: 10px 0px;
        transition: 0.3s;
        opacity: 0;
    }

    .blog-item:hover .blog_hover_content {
        top: 0;
        opacity: 0.5;
    }

    /***************************
  Touch area 
/***************************/
    .touh_area {
        background: #f6f6f6;
    }

    .heading_main h2 {
        font-size: 42px;
        letter-spacing: -0.5px;
        font-weight: 700;
        padding: 0;
        margin: 0;
        font-family: 'Raleway', sans-serif;
        position: relative;
        text-transform: uppercase;
        line-height: 45px !important;
    }

    .form_bg {
        background: red;
        padding: 90px 0px;
    }

    .contact_form {
        background: #fff;
        min-height: auto;
        padding: 45px 65px 150px;
        max-width: 550px;
        width: 100%;
        margin: 0 auto;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .2);
    }

    .form-group input {

        width: 100%;
        background: #fff;
        min-height: 60px;
        border: none;
        margin: 10px 0 0 0;
        color: #000;
        padding: 0;
        font-size: 20px;
        font-weight: 300;
        border-bottom: solid #ccc 2px;

    }

    .form-group textarea {
        width: 100%;
        background: #fff;
        min-height: 120px;
        border: none;
        margin: 10px 0 0 0;
        color: #000;
        padding: 0;
        font-size: 20px;
        font-weight: 300;
        border-bottom: solid #ccc 2px;
    }


    .contact_form .form-group input[type=submit] {
        width: 100%;
        margin-top: 30px;
        text-transform: uppercase;
    }

    .contact_form .form-group input[type=submit]:hover {
        color: #fff;
        background: #050000;
    }

    /***************************
  Footer area 
/***************************/
    .footer {
        background: #262e41;
        color: white;
        padding: 70px 0px;
    }

    .footer .heading_main h2 {
        border-bottom: 1px solid #fff;
        padding-bottom: 40px;
    }

    .f_icon {
        float: left;
        margin-right: 15px;
    }

    .footer_item h5 {
        color: #fffcf4;
        padding-top: 25px;
    }

    .f_icon a {
        font-size: 35px;
        color: #fff;
    }

    .copyright {
        background: #0f1521;
        padding: 20px 0px;
    }

    .copyright p {
        color: #fffcf4;
    }

    ul.social_icon li a {
        font-size: 36px;
        margin-left: 20px;
        color: #fff;
    }
    </style>
</head>
</body>

<!-- header area start -->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top" style="background: #d2d2d2;">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}"><i class="fa fa-home"
                            aria-hidden="true"></i></a>
                    <a class="nav-link" href="#do"><i class="fas fa-american-sign-language-interpreting"></i></a>
                    <a class="nav-link" href="#BUSINESS"><i class="fas fa-business-time"></i></a>
                    <a class="nav-link" href="#PROJECTS"><i class="fas fa-project-diagram"></i></a>
                    <a class="nav-link" href="#WORK"><i class="fas fa-tasks"></i></a>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('') }}<i class="fas fa-sign-in-alt"></i></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- header area end -->
<!-- slider area Start -->

<!-- slider area End -->
<section class='blog-area section_padding'>
@yield('content')
</section>
     
     
    <!-- Footer Area Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading_main text-center">
                    <h2>Contact us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer_item text-center">

                    <h5>Address</h5>
                    <p style="color:#fff;">
                        1277 Willow Oaks Lane, <br> Lafayette- LA, USA 70501 <br>
                      

                        151 Ho Ba Kien Street,<Br>Ward 15, District 10,<Br>Ho Chi Minh City, Vietnam</p>
                </div>
            </div>
                <div class="col-lg-4 col-md-6">
                <div class="footer_item text-center">

                    <h5>Contact</h5>
                    <p style="color:#fff;">
                       
                        Phone Number 337-368-4755 <br>
                        Mobile Number 337-849-3647 <br>

                        info@rycki.net<Br></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer_item">
                <div class="f_icon float-left">
                  
                </div>
                <h5> About </h5>
                <a href="{{url('about')}}">About Us</a> <br>
                <a href="{{url('terms')}}">Terms and Conditions</a> <br>
                <a href="{{url('policy')}}">Privacy Policy</a> <br>
                
                
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6">
              <div class="footer_item">
                <div class="f_icon float-left">
                  <ul>
                    <li><a href=""><i class="fas fa-map-marker-alt"></i></a></li>
                  </ul>
                </div>
                <h5>Email</h5>
                <p style="color:#fff;">support@sofbox.com<Br>24 X 7 online support</p>
              </div>
            </div> -->
            <!-- <div class="col-lg-3 col-md-6">
              <div class="footer_item">
                <div class="f_icon float-left">
                  <ul>
                    <li><a href=""><i class="fas fa-email"></i></a></li>
                  </ul>
                </div>
                <h5>Social media</h5>
                 <ul class="social_icon">
                   <li><a href=""><i class="fa fa-facebook"></i></a></li>
                   <li><a href=""><i class="fa fa-twitter"></i></a></li>
                   <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                   <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                   <li><a href=""><i class="fa fa-youtube"></i></a></li>
                 </ul>
              </div>
            </div> -->
        </div>
    </div>
</footer>

<!-- Footer Area End -->

<section class="copyright">
    <div class="contaier">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>&copy;Copyright 2021</p>
            </div>
        </div>
    </div>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(funtion() {
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
    });
});
</script>
</body>

</html>