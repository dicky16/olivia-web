<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <!-- Title -->
    <!-- <title>Olivia</title> -->
    @yield('title')

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('user/img/fix.svg') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('user/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet">

</head>

<body>

<!-- firebase -->
	<!-- The core Firebase JS SDK is always required and must be listed first -->
   <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBwBRQHnE1ruI8I6U1rUJTY83HHfdWPumI",
    authDomain: "smart-city-c346a.firebaseapp.com",
    databaseURL: "https://smart-city-c346a.firebaseio.com",
    projectId: "smart-city-c346a",
    storageBucket: "smart-city-c346a.appspot.com",
    messagingSenderId: "10824827554",
    appId: "1:10824827554:web:6d556148dd2d5c627e8dfb",
    measurementId: "G-ENKBQX9FZ8"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<!-- end firebase -->
 
    <div id="preloader">
        <div class="olv-preloader"></div>
    </div>

  
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <!-- <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('user/img/core-img/o.png') }}" alt="logo"></a> -->
                            <a class="navbar-brand" href="{{ url('/') }}"><h2 class="color color-white">VASHE</h2></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#olv-navbar" aria-controls="olv-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="olv-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item @if(Route::is('home')) active @endif"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                                    <li class="nav-item @if(Route::is('profile')) active @endif"><a class="nav-link" href="{{ url('profile') }}">Profile</a></li>
                                    <!--- GALERY DROPDOWN-->
                                    <!-- <li class="nav-item @if(Route::is('berita')) active @endif"><a class="nav-link" href="{{ url('berita') }}">Berita</a></li> -->
                                    <div class="dropdown">
                                       <li class="nav-item dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown">Gallery</li>
                                       <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                          <!-- JAJA -->
                                       <!-- </button> -->
                                       <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                          <!-- Small button
                                       </button> -->
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="{{ url('galeri') }}">Foto</a>
                                          <a class="dropdown-item" href="{{ url('video') }}">Video</a>
                                       </div>
                                    </div>


                                    <div class="dropdown">
                                       <li class="nav-item dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown">Info</li>
                                       <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                          <!-- JAJA -->
                                       <!-- </button> -->
                                       <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                          <!-- Small button
                                       </button> -->
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="{{ url('berita') }}">Berita</a>
                                          <a class="dropdown-item" href="{{ url('pengumuman') }}">Pengumuman</a>
                                       </div>
                                    </div>
                                    <li class="nav-item @if(Route::is('faq')) active @endif"><a class="nav-link" href="{{ url('faq') }}">FAQ</a></li>
                                </ul>
                                <!-- Search Form Area Start -->
                                <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
                                        <!-- <button type="submit" class="d-none"><img src="{{ asset('user/img/core-img/search-icon.png') }}" alt="Search"></button> -->
                                    </form>
                                    <div id="display-search"></div>
                                    
                                </div>
                                <!-- Search btn -->
                                <div class="search-button">
                                    <a href="#" id="search-btn"><img src="{{ asset('user/img/core-img/search-icon.png') }}" alt="Search"></a>
                                </div>
                                <div class="login-register-btn">
                                <!-- jika user tidak auth -->
                                <?php if(auth()->user() == null) {?>
                                <!-- Login/Register btn -->
                                <div class="login-register-btn">
                                <a href="{{ url('login') }}">Login/Register</a>
                                </div>
                                <?php } else if(auth()->user() != null) {?>
                                 <?php if(auth()->user()->id_role == 2) {?>
                                <!-- jika user auth -->
                                <div class="container">
                                        <div class="half">
                                            <label for="profile2" class="profile-dropdown">
                                                <input type="checkbox" id="profile2">
                                                <img src="https://cdn0.iconfinder.com/data/icons/avatars-3/512/avatar_hipster_guy-512.png">
                                                <span style="color: #000000;">Paraseka</span>
                                                <!-- <label for="profile2"><i class="mdi mdi-menu"></i></label> -->
                                                
                                                <ul>
                                                <form action="{{ route('logout') }}" method="POST">
                                                   @csrf
                                                    <!-- <li><a href="#"><i class="mdi mdi-email-outline"></i>Akun</a></li> -->
                                                    <div class="form-row">
                                                      <div class="col">
                                                         <a href="user"><input type="button" class="btn btn-success" value="Akun"></a>
                                                      </div>
                                                      <div class="col">
                                                         <input type="submit" class="btn btn-primary" value="Logout">
                                                      </div>
                                                   </div>
                                                    <!-- <li><a href=""><i class="mdi mdi-logout" type="submit"></i>Logout</a></li> -->
                                                    
                                                </form>
                                                </ul>
                                            </label>
                                        </div>
                                    </div>
                                    <?php } else {?>
                                       <div class="login-register-btn">
                                             <a href="{{ url('login') }}">Login/Register</a>
                                       </div>
                                    <?php } ?>
                                <?php } ?>
                                 </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    @yield('content')
    
    <footer class="footer-area clearfix">
        <section id="contact">
  
          <h1 class="section-header"></h1>
          
          <div class="contact-wrapper">
            
              <!---------------- 

              CONTACT KIRI 
            
              -----------------> 
            
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11176.264540637865!2d112.61440279667983!3d-7.956904248467246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11a949e002df2194!2sPendidikan%20Vokasi%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1601097931634!5m2!1sid!2sid" width="400" height="390" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>              
            </form>
            
              <!---------------- 

              CONTACT KANAN
            
              -----------------> 
            
              <div class="direct-contact-container justify-content-center">

                <ul class="contact-list">
                  <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Jl Veteran | Malang</span></i></li>
                  
                  <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call"> (0341) 553240</a></span></i></li>
                  
                  <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">emailvokasi@gmail.com</a></span></i></li>
                  
                </ul>

                <hr>
                <ul class="social-media-list">
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-github" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="#" target="_blank" class="contact-icon">
                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                </ul>
                <hr>

                <div class="copyright">www.olivia.com</div>

              </div>
            
          </div>
          
        </section>  
        
        
        <div class="footer-bottom-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="footer-bottom-content h-100 d-md-flex justify-content-between align-items-center">
                            <div class="copyright-text">
                                <p>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Vokasi UB </i> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('user/js/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('user/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('user/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('user/js/active.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @yield('js-user')
    <script type="text/javascript">
    $(document).ready(function() {

      $(document).on('keyup', '#search', function() {
         var key = $('#search').val();
         if(key != "") {
            showSearch(key)
         } else {
            $('#display-search').empty();
         }
      });

      function showSearch(key)
      {  
         $.ajax({
               type: 'GET',
               url: 'search',
               data: {key:key},
               success: function(data) {
                  if(data.success == true) {
                  $('#display-search').html(data.html);
                  } else {
                     $('#display-search').html(data.html);
                     console.log(data.html)
                  }
               }
         });
      }

      $(function () {
           $(".input input")
              .focus(function () {
                 $(this)
                    .parent(".input")
                    .each(function () {
                       $("label", this).css({
                          "line-height": "18px",
                          "font-size": "18px",
                          "font-weight": "100",
                          top: "0px"
                       });
                       $(".spin", this).css({
                          width: "100%"
                       });
                    });
              })
              .blur(function () {
                 $(".spin").css({
                    width: "0px"
                 });
                 if ($(this).val() == "") {
                    $(this)
                       .parent(".input")
                       .each(function () {
                          $("label", this).css({
                             "line-height": "60px",
                             "font-size": "24px",
                             "font-weight": "300",
                             top: "10px"
                          });
                       });
                 }
              });

           $(".button").click(function (e) {
              var pX = e.pageX,
                 pY = e.pageY,
                 oX = parseInt($(this).offset().left),
                 oY = parseInt($(this).offset().top);

              $(this).append(
                 '<span class="click-efect x-' +
                    oX +
                    " y-" +
                    oY +
                    '" style="margin-left:' +
                    (pX - oX) +
                    "px;margin-top:" +
                    (pY - oY) +
                    'px;"></span>'
              );
              $(".x-" + oX + ".y-" + oY + "").animate(
                 {
                    width: "500px",
                    height: "500px",
                    top: "-250px",
                    left: "-250px"
                 },
                 600
              );
              $("button", this).addClass("active");
           });

           $(".alt-2").click(function () {
              if (!$(this).hasClass("material-button")) {
                 $(".shape").css({
                    width: "100%",
                    height: "100%",
                    transform: "rotate(0deg)"
                 });

                 setTimeout(function () {
                    $(".overbox").css({
                       overflow: "initial"
                    });
                 }, 600);

                 $(this).animate(
                    {
                       width: "140px",
                       height: "140px"
                    },
                    500,
                    function () {
                       $(".box").removeClass("back");

                       $(this).removeClass("active");
                    }
                 );

                 $(".overbox .title").fadeOut(300);
                 $(".overbox .input").fadeOut(300);
                 $(".overbox .button").fadeOut(300);

                 $(".alt-2").addClass("material-buton");
              }
           });

           $(".material-button").click(function () {
              if ($(this).hasClass("material-button")) {
                 setTimeout(function () {
                    $(".overbox").css({
                       overflow: "hidden"
                    });
                    $(".box").addClass("back");
                 }, 200);
                 $(this).addClass("active").animate({
                    width: "700px",
                    height: "700px"
                 });

                 setTimeout(function () {
                    $(".shape").css({
                       width: "50%",
                       height: "50%",
                       transform: "rotate(45deg)"
                    });

                    $(".overbox .title").fadeIn(300);
                    $(".overbox .input").fadeIn(300);
                    $(".overbox .button").fadeIn(300);
                 }, 700);

                 $(this).removeClass("material-button");
              }

              if ($(".alt-2").hasClass("material-buton")) {
                 $(".alt-2").removeClass("material-buton");
                 $(".alt-2").addClass("material-button");
              }
           });
        });
      });
        </script>
</body>

</html>