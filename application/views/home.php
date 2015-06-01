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
  </head>
  <body id="body" ng-app="application">
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
      </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->

    <main class="site-content" role="main">
      <section id="home" data-temp-slide></section>      
      <section id="searchForm" data-temp-check-package></section>     
      <section id="step" data-temp-step></section> 
      <section id="content" data-temp-content></section> 
      <section id="whyme" data-temp-why-me></section> 
      <section id="follow-us" data-temp-follow-us></section> 
      <section id="contact-us" data-temp-contact-us></section> 
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
    <script src="${assets}js/plugin/modernizr-2.6.2.min.js"></script>
    <script src="${assets}js/plugin/jquery-1.11.1.min.js"></script>
    <script src="${assets}js/plugin/angular.min.js"></script>
    <script src="${assets}js/angular-route/angular-route.js"></script>
    <script src="${assets}js/app.js"></script>
    <script src="${assets}js/MenuCtrl.js"></script>
    <script src="${assets}js/SlideCtrl.js"></script>
    <script src="${assets}js/CheckPackageCtrl.js"></script>
    <script src="${assets}js/StepCtrl.js"></script>
    <script src="${assets}js/ContentCtrl.js"></script>
    <script src="${assets}js/WhyMeCtrl.js"></script>
    <script src="${assets}js/FollowUsCtrl.js"></script>
    <script src="${assets}js/ContactUsCtrl.js"></script>
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