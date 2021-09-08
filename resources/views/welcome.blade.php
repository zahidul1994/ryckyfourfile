<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fontawesome icon -->
    <script src="https://kit.fontawesome.com/d963bd4b19.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
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
        color: #262e41;
        text-transform: uppercase;
    }

    a.nav-link:hover {
        color: red;
        padding-bottom: 5px;
        border-bottom: 2px solid red;
    }

    .carousel-indicators [data-bs-target] {
        width: 20px;
        margin: 0 8px;
        background: #00d1ff;
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
   .service_box img {
    width: 100%;
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
    <nav class="navbar navbar-expand-lg fixed-top" style="background: #fff;">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('') }}<i class="fas fa-user"></i></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                  <!----  <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i></a>--->
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

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/s2.jpg')}}" class="d-block w-100" height="500" alt="...">
    </div>
     @foreach($slider as $sl)
    <div class="carousel-item ">-->
      <img src="{{asset('assets/images/slider/'.$sl->image)}}" class="d-block w-100" height="500" alt="...">
     </div>
     @endforeach
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider area End -->


<!-- Service Section start -->
<section class="service_area section_padding" id="do">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading_top text-center">
                    <h2>WHAT WE DO</h2>
                </div>
            </div>
        </div>
        <!-- service_box start -->
        <div class="row">
            @foreach($plan as $pl)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="service_box">
                    <div class="service_icon">
                        <img src="{{asset('assets/images/plan/'.$pl->logo)}}" alt="">
                    </div>
                    <h4>{{$pl->title}}</h4>
                    <p>{{$pl->des}}</p>
                </div>
            </div>
            @endforeach
           
        </div>
        <!-- service_box end -->
    </div>
</section>
<!-- Service section End -->

<!-- About Section Start -->
<section class="about_area section_padding" id="BUSINESS">
    <div class="contianer">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="heading_main text-center">
                    <h2><strong style="color: #fc301e;font-weight: normal;">ABOUT YOUR CLIENT FOR</strong><br>BETTER
                        POSITION OF BUSINESS</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading_small">
                        <h4>About your client</h4>
                        <p>We, RYCKI.NET offer the best you tube marketing services to its user by ensuring real or organic traffic worldwide. Here, anyone can get genuine youtube paid service across the globe where we ensure real watch time for its advertisers.

RYCKI.NET offers exclusive income policy for its user where every registered user can earn a lot every day in certain ways like watching videos, referral income, generation income, rank income and many more.<br>

So, what are you looking for? Join today and earn anywhere form the world with us.
                        </p>
                        <div class="readmore_btn">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-responsive" src="{{asset('img/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- prev_project Section Start -->
<section class="prev-project section_padding" id="PROJECTS">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading_main text-center">
                    <h2><strong style="color: #fc301e;font-weight: normal;">PREVIOUS PROJECTS</strong><br>OUR CASE
                        STUDIES</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by<br> injected humour, or randomised words which don't look even
                        slightly believable. If you are going to use a passage of Lorem<br> Ipsum, you need to be sure
                        there isn'</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="img text-center">
                    <img class="img-responsive" src="{{asset('img/video_img.jpg')}}" alt="">
                </div>
                <div class="center text-center">
                    <div class="readmore_btn">
                        <a href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- prev_project Section End -->



<!-- newslater area Start -->
<!-- <section class="news_later section_padding">
       <div class="container">
         <div class="row">
           <div class="col-lg-4 col-md-12 text-white">
             <h2><strong> GET YOUR FREE QUOTE</strong><br>TODAY</h2>
           </div>
           <div class="col-lg-8 col-md-12">
             <div class="submit">
               <form action="">
                 <div class="form-group">
                   <input type="email" class="form-control" placeholder ="Enter Your Email">
                 </div>
                 <div class="form-group">
                   <input type="submit" value="submit">
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </section> -->
<!-- newslater area End -->

<!-- Blog  Area End -->
<section class="blog-area section_padding" id="WORK">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="heading_main text-center">
                    <h2><strong style="color: #fc301e;font-weight: normal;">WE’VE DONE LOT’S OF WORK,
                            LET’S</strong><br>CHECK SOME FROM HERE</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($work as $wr)
            <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <img src="{{asset('assets/images/work/'.$wr->image)}}" height="400" width="100%" alt="image">
                    <div class="blog_img_hover">
                        <div class="blog_hover_content">
                            <ul>
                                <li><a href=""></a><i class="fas fa-search"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <img src="{{asset('img/blog2.jpg')}}" alt="image">
                    <div class="blog_img_hover">
                        <div class="blog_hover_content">
                            <ul>
                                <li><a href=""></a><i class="fas fa-search"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <img src="{{asset('img/blog3.jpg')}}" alt="image">
                    <div class="blog_img_hover">
                        <div class="blog_hover_content">
                            <ul>
                                <li><a href=""></a><i class="fas fa-search"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <img src="{{asset('img/blog4.jpg')}}" alt="image">
                    <div class="blog_img_hover">
                        <div class="blog_hover_content">
                            <ul>
                                <li><a href=""></a><i class="fas fa-search"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</section>
<!-- Blog Area End -->

<!-- Getin tuch Start -->
<!-- <section class="touh_area section_padding">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <div class="heading_main text-center">
               <h2>Get IN touch</h2>
             </div>
           </div>
         </div>
       </div>
     </section> -->
<!-- Getin tuch End -->

<!-- Contact Area Start -->
<!-- <section class="contact_area">
       <div class="container-fluid">
         <div class="row">
           <div class="col-sm-12 col-md-10 col-lg-6">
            <div class="form_bg">
               <div class="contact_form">
              <form action="">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" autocomplete="off">
                </div>
                <div class="form-group">
                  <textarea class="form-control" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="form-control" value="send">
                </div>
              </form>
            </div>
            </div>
           </div>
         </div>
       </div>
     </section> -->
<!-- Contact Area End -->

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

<!-----Bootstrap min js----> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>