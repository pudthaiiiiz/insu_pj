<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
    <link rel="stylesheet" href="${assets}css/slide.css">
    <link rel="stylesheet" href="${assets}css/main.css">
    <link rel="stylesheet" href="${assets}css/loading.css">
  </head>
  <body id="body" ng-app="application">
    <div data-temp-load></div>
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
    <main class="site-content" role="main" ng-init="needToRister = false">
      <section id="home" data-temp-slide></section>    
      <section id="searchForm" data-temp-check-package></section>     
      <section id="step" data-temp-step></section> 
      
      <div ng-controller="ContentCtrl">
  <div class="container">
    <div class="row">

      <div class="sec-title text-center wow animated fadeInDown">
        <h2>บทความ</h2>
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
      </div>


      <ul class="project-wrapper wow animated fadeInUp">
        ${contents}
        <li class="portfolio-item">
          <div class="img-crop" style="background-image: url('${baseUrl}uploads/${cImage}')"></div>
          <img src="${baseUrl}uploads/${cImage}" class="img-responsive transparent" alt="${cDes}">
        <figcaption class="mask">
          <h3>${cTitle}</h3>
          <p>${cDes} </p>
        </figcaption>
        <ul class="external">
          <!--<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="{{assets}}img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>-->
          <li><a href="${baseUrl}content/${cId}"><i class="fa fa-link"></i></a></li>
        </ul>
        </li>
        ${/contents}
      </ul>

    </div>
  </div>
</div>
      
      <!--<section id="content" data-temp-content data-url="${assets}" data-contents="${contents}"></section>--> 
<!--      <section id="whyme" data-temp-why-me data-url="${assets}"></section> 
      <section id="follow-us" data-temp-follow-us></section> 
      <section id="contact-us" data-temp-contact-us></section> -->
    </main>
    <footer id="footer" data-temp-footer></footer>

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
    <script src="${assets}js/FooterCtrl.js"></script>
    <script src="${assets}js/LoadCtrl.js"></script>
    <script src="${assets}js/directives.js"></script>
    <script src="${assets}js/services/HomeServices.js"></script>
    <script src="${assets}js/plugin/bootstrap.min.js"></script>
    <script src="${assets}js/plugin/jquery.singlePageNav.min.js"></script>
    <script src="${assets}js/plugin/jquery.fancybox.pack.js"></script>
    <script src="${assets}js/plugin/owl.carousel.min.js"></script>
    <script src="${assets}js/plugin/jquery.easing.min.js"></script>
    <script src="${assets}js/plugin/jquery.slitslider.js"></script>
    <script src="${assets}js/plugin/jquery.ba-cond.min.js"></script>
    <script src="${assets}js/plugin/jquery.slides.min.js"></script>
    <script src="${assets}js/plugin/wow.min.js"></script>
    <script src="${assets}js/plugin/main.js"></script>
  </body>
</html>