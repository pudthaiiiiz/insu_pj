<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>insurancebroker360</title>		
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="${assets}css/font.css">
    <link rel="stylesheet" href="${assets}css/font-awesome.min.css">
    <link rel="stylesheet" href="${assets}css/jquery.fancybox.css">
    <link rel="stylesheet" href="${assets}css/bootstrap.min.css">
    <link rel="stylesheet" href="${assets}css/owl.carousel.css">
    <link rel="stylesheet" href="${assets}css/slit-slider.css">
    <link rel="stylesheet" href="${assets}css/animate.css">
    <link rel="stylesheet" href="${assets}css/main.css">
    <script src="${assets}js/plugin/modernizr-2.6.2.min.js"></script>
  </head>
  <body id="body" ng-app="application">
    <!--
    Fixed Navigation
    ==================================== -->
    <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header" ng-controller="MenuCtrl">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1 class="navbar-brand">
            <a href="#body" class="white"><span ng-bind="menu.title"></span> </a>
          </h1>
        </div>
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
          <ul id="nav" class="nav navbar-nav">
            <li ng-repeat="list in menu.lists">
              <a href="{{list.link}}" ng-bind="list.name"></a>
            </li>
          </ul>
        </nav>
        <!-- /main nav -->

      </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->

    <main class="site-content" role="main">
    <section data-temp-check-package></section>
      <!-- about section -->
      <section id="about" >
        <div class="container">
          <div class="row">
            <div class="col-md-4 wow animated fadeInLeft">
              <div class="recent-works">
                <h3>Recent Works</h3>
                <div id="works">
                  <div class="work-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
                  <div class="work-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
                  <div class="work-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
              <div class="welcome-block">
                <h3>Welcome To Our Site</h3>								
                <div class="message-body">
                  <img src="${assets}img/member-1.jpg" class="pull-left" alt="member">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                </div>
                <a href="#" class="btn btn-border btn-effect pull-right">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end about section -->


      <!-- Service section -->
      <section id="service">
        <div class="container">
          <div class="row">

            <div class="sec-title text-center">
              <h2 class="wow animated bounceInLeft">สมัครง่าย</h2>
              <p class="wow animated bounceInRight">The Key Features of our Job</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fa fa-home fa-3x"></i>
                </div>
                <h3>Support</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fa fa-tasks fa-3x"></i>
                </div>
                <h3>Well Documented</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fa fa-clock-o fa-3x"></i>
                </div>
                <h3>Design UI/UX</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fa fa-heart fa-3x"></i>
                </div>

                <h3>Web Security</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>							
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- end Service section -->

      <!-- portfolio section -->
      <section id="portfolio">
        <div class="container">
          <div class="row">

            <div class="sec-title text-center wow animated fadeInDown">
              <h2>บทความ</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>


            <ul class="project-wrapper wow animated fadeInUp">
              <li class="portfolio-item">
                <img src="${assets}img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
              <figcaption class="mask">
                <h3>Wall street</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="${assets}img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
                <li><a href=""><i class="fa fa-link"></i></a></li>
              </ul>
              </li>

              <li class="portfolio-item">
                <img src="${assets}img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
              <figcaption class="mask">
                <h3>Wall street</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Wall street" href="${assets}img/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
                <li><a href=""><i class="fa fa-link"></i></a></li>
              </ul>
              </li>

              <li class="portfolio-item">
                <img src="${assets}img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
              <figcaption class="mask">
                <h3>Wall street</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="${assets}img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
                <li><a href=""><i class="fa fa-link"></i></a></li>
              </ul>
              </li>

              <li class="portfolio-item">
                <img src="${assets}img/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
              <figcaption class="mask">
                <h3>Wall street</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="${assets}img/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
                <li><a href=""><i class="fa fa-link"></i></a></li>
              </ul>
              </li>

              <li class="portfolio-item">
                <img src="${assets}img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
              <figcaption class="mask">
                <h3>Wall street</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="${assets}img/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
                <li><a href=""><i class="fa fa-link"></i></a></li>
              </ul>
              </li>

              <li class="portfolio-item">
                <img src="${assets}img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
              <figcaption class="mask">
                <h3>Wall street</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
              </figcaption>
              <ul class="external">
                <li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="${assets}img/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
                <li><a href=""><i class="fa fa-link"></i></a></li>
              </ul>
              </li>
            </ul>

          </div>
        </div>
      </section>
      <!-- end portfolio section -->

      <!-- Testimonial section -->
      <section id="testimonials" class="parallax">
        <div class="overlay">
          <div class="container">
            <div class="row">

              <div class="sec-title text-center white wow animated fadeInDown">
                <h2>ทำไมต้อง</h2>
              </div>

              <div id="testimonial" class=" wow animated fadeInUp">
                <div class="testimonial-item text-center">
                  <img src="${assets}img/member-1.jpg" alt="Our Clients">
                  <div class="clearfix">
                    <span>Katty Flower</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
                <div class="testimonial-item text-center">
                  <img src="${assets}img/member-1.jpg" alt="Our Clients">
                  <div class="clearfix">
                    <span>Katty Flower</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
                <div class="testimonial-item text-center">
                  <img src="${assets}img/member-1.jpg" alt="Our Clients">
                  <div class="clearfix">
                    <span>Katty Flower</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- end Testimonial section -->

      <!-- Price section -->
      <section id="price">
        <div class="container">
          <div class="row">

            <div class="sec-title text-center wow animated fadeInDown">
              <h2>Price</h2>
              <p>Our price for your company</p>
            </div>

            <div class="col-md-4 wow animated fadeInUp">
              <div class="price-table text-center">
                <span>Silver</span>
                <div class="value">
                  <span>$</span>
                  <span>24,35</span><br>
                  <span>month</span>
                </div>
                <ul>
                  <li>No Bonus Points</li>
                  <li>No Bonus Points</li>
                  <li>No Bonus Points</li>
                  <li>No Bonus Points</li>
                  <li><a href="#">sign up</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
              <div class="price-table featured text-center">
                <span>Gold</span>
                <div class="value">
                  <span>$</span>
                  <span>50,00</span><br>
                  <span>month</span>
                </div>
                <ul>
                  <li>Free Trial</li>
                  <li>Free Trial</li>
                  <li>Free Trial</li>
                  <li>Free Trial</li>
                  <li><a href="#">sign up</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
              <div class="price-table text-center">
                <span>Diamond</span>
                <div class="value">
                  <span>$</span>
                  <span>123,12</span><br>
                  <span>month</span>
                </div>
                <ul>
                  <li>All Bonus Points</li>
                  <li>All Bonus Points</li>
                  <li>All Bonus Points</li>
                  <li>All Bonus Points</li>
                  <li><a href="#">sign up</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- end Price section -->

      <!-- Social section -->
      <section id="social" class="parallax">
        <div class="overlay">
          <div class="container">
            <div class="row">

              <div class="sec-title text-center white wow animated fadeInDown">
                <h2>FOLLOW US</h2>
                <p>Beautifully simple follow buttons to help you get followers on</p>
              </div>

              <ul class="social-button">
                <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
                <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>							
              </ul>

            </div>
          </div>
        </div>
      </section>
      <!-- end Social section -->

      <!-- Contact section -->
      <section id="contact" >
        <div class="container">
          <div class="row">

            <div class="sec-title text-center wow animated fadeInDown">
              <h2>Contact</h2>
              <p>Leave a Message</p>
            </div>


            <div class="col-md-7 contact-form wow animated fadeInLeft">
              <form action="#" method="post">
                <div class="input-field">
                  <input type="text" name="name" class="form-control" placeholder="Your Name...">
                </div>
                <div class="input-field">
                  <input type="email" name="email" class="form-control" placeholder="Your Email...">
                </div>
                <div class="input-field">
                  <input type="text" name="subject" class="form-control" placeholder="Subject...">
                </div>
                <div class="input-field">
                  <textarea name="message" class="form-control" placeholder="Messages..."></textarea>
                </div>
                <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
              </form>
            </div>

            <div class="col-md-5 wow animated fadeInRight">
              <address class="contact-details">
                <h3>Contact Us</h3>						
                <p><i class="fa fa-pencil"></i>Phoenix Inc.<span>PO Box 345678</span> <span>Little Lonsdale St, Melbourne </span><span>Australia</span></p><br>
                <p><i class="fa fa-phone"></i>Phone: (415) 124-5678 </p>
                <p><i class="fa fa-envelope"></i>website@yourname.com</p>
              </address>
            </div>

          </div>
        </div>
      </section>
      <!-- end Contact section -->

<!--      <section id="google-map">
        <div id="map-canvas" class="wow animated fadeInUp"></div>
      </section>-->

    </main>

    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <div class="footer-content">
            <div class="wow animated fadeInDown">
              <p>newsletter signup</p>
              <p>Get Cool Stuff! We hate spam!</p>
            </div>
            <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
              <div class="input-field">
                <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
                <button type="submit" class="submit-icon">
                  <i class="fa fa-paper-plane fa-lg"></i>
                </button>
              </div>
            </form>
            <div class="footer-social">
              <ul>
                <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
                <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
                <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
                <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
              </ul>
            </div>

            <p>Copyright &copy; 2014-2015 Design and Developed By<a href="http://www.themefisher.com">Themefisher</a> </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Essential jQuery Plugins
    ================================================== -->
    <!-- Main jQuery -->
    <script src="${assets}js/plugin/jquery-1.11.1.min.js"></script>
    <script src="${assets}js/plugin/angular.min.js"></script>
    <script src="${assets}js/angular-route/angular-route.js"></script>
    <script src="${assets}js/app.js"></script>
    <script src="${assets}js/MenuCtrl.js"></script>
    <script src="${assets}js/CheckPackageCtrl.js"></script>
    <script src="${assets}js/directives.js"></script>
    <script src="${assets}js/services/RegisterServices.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="${assets}js/plugin/bootstrap.min.js"></script>
    <!-- Single Page Nav -->
    <script src="${assets}js/plugin/jquery.singlePageNav.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="${assets}js/plugin/jquery.fancybox.pack.js"></script>
    <!-- Owl Carousel -->
    <script src="${assets}js/plugin/owl.carousel.min.js"></script>
    <!-- jquery easing -->
    <script src="${assets}js/plugin/jquery.easing.min.js"></script>
    <!-- Fullscreen slider -->
    <script src="${assets}js/plugin/jquery.slitslider.js"></script>
    <script src="${assets}js/plugin/jquery.ba-cond.min.js"></script>
    <!-- onscroll animation -->
    <script src="${assets}js/plugin/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="${assets}js/plugin/main.js"></script>
  </body>
</html>