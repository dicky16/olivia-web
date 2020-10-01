<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title -->
    <title>Olivia</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('user/img/core-img/atomic.png') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('user/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('user/css/responsive.css') }}" rel="stylesheet">

</head>

<body>
 
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
                            <a class="navbar-brand" href="index.html"><img src="{{ asset('user/img/core-img/o.png') }}" alt="logo"></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#olv-navbar" aria-controls="olv-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="olv-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="profile.html">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="artikel.html">Berita</a></li>
                                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                                </ul>
                                <!-- Search Form Area Start -->
                                <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
                                        <button type="submit" class="d-none"><img src="{{ asset('user/img/core-img/search-icon.png') }}" alt="Search"></button>
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div class="search-button">
                                    <a href="#" id="search-btn"><img src="{{ asset('user/img/core-img/search-icon.png') }}" alt="Search"></a>
                                </div>
                                <!-- Login/Register btn -->
                                <div class="login-register-btn">
                                    <a href="#">Login</a>
                                    <a href="#">/ Register</a>
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
               
              <!-- div class="form-group">
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
                </div>
              </div>

              <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>
              
              <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                <div class="button">
                  <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                </div>
              
              </button> -->
              
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
</body>

</html>