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
    <meta name="baseUrl" content="${baseUrl}">
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
    <link rel="stylesheet" href="${assets}css/royal-slider-1.0.min.css">
    <link rel="stylesheet" href="${assets}css/slick.css">
    <link rel="stylesheet" href="${assets}css/slick-theme.css">
    <link rel="stylesheet" href="${assets}css/main.css?v=1">
    <link rel="stylesheet" href="${assets}css/loading.css">
    <link rel="shortcut icon" href="${baseUrl}/uploads/ico/favicon.ico" />
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
          <img src="${assets}img/logo_web.png" class="logo-header">
        </div>
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
          <ul id="nav" class="nav navbar-nav">
            <li ng-repeat="list in menu.lists">
              <a href="{{list.link}}" ng-bind="list.name"></a>
            </li>
          </ul>
        </nav>
      </div>
<div class="line-gold"></div>
    </header>
    <main class="site-content" role="main" ng-init="needToRister = false">
      <section id="home" data-temp-slide></section>   
      <section id="searchForm" data-temp-check-package></section>     
      <section id="step" data-temp-step></section> 
      <section id="content" data-temp-content data-contents="${contents}"></section> 
      <!--      <section id="whyme" data-temp-why-me data-url="${assets}"></section> 
      <section id="follow-us" data-temp-follow-us></section> 
      <section id="contact-us" data-temp-contact-us></section> -->


      <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
        <h2>&nbsp;</h2>
      </div>
      <div class="bg-color-theme">
        <div class="container">
          <div class="col-md-8 col-sm-8 col-xs-12 wow animated zoomIn">
            <h2 class="white">ขั้นตอนการเคลมประกันภัยรถยนต์</h2>
            <p>insurancebroker360.com จะทำให้การเคลมประกันภัยรถยนต์เป็นเรื่องที่ง่ายเหลือเชื่อ</p>
            <p>ทุกครั้งที่คุณต้องการแจ้งเคลมหลังเกิดอุบัติเหตุ ผู้เชี่ยวชาญของเราจะดูแลคุณตั้งแต่การให้คำแนะนำ จนถึงการส่งมอบรถ โดยแจ้งความคืบหน้าเป็นระยะ และไม่มีค่าใช้จ่ายใดๆเพิ่มเติม</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 text-center wow animated zoomIn">
            <img  alt="Special Offer" src="${assets}img/man.png" />
          </div>
        </div>
        <div class="line line-top"></div>
        <div class="line line-bottom"></div>
      </div>
      <div style="background-color: #f6f6f6;">
        <div class="container">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
            <h2>ช่องทางการชำระเงิน</h2>
            <p>&nbsp;</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 wow animated zoomIn">
            <p><img alt="Pay Securely Online" src="${assets}img/ic1.png" style="float:left; margin-right:20px" /></p>
            <p>จ่ายออนไลน์</p>
            <p>จ่ายได้ทันทีและปลอดภัย ด้วยบัตรวีซ่าหรือมาสเตอร์การ์ดของคุณ</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 wow animated zoomIn">
            <p><img alt="Pay Securely Online" src="${assets}img/ic2.png" style="float:left; margin-right:20px" /></p>
            <p>โทร.หาเราเพื่อชำระเงิน<br />
              ได้ที่ 02-627-7777</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 wow animated zoomIn">
            <p><img alt="Pay Securely Online" src="${assets}img/ic3.png" style="float:left; margin-right:20px" /></p>
            <p>เคาน์เตอร์เซอร์วิส</p>
            <p>จ่ายเงินได้ที่เคาน์เตอร์เซอร์วิสทุกแห่ง (7-Eleven, Max Value, Tops)</p>
          </div>
            <p>&nbsp;</p>

        </div>
      </div>

      <div class="">
        <div class="container">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
            <p>&nbsp;</p>
            <h2>ประกันรถยนต์ต่างๆ </h2>
            <p>&nbsp;</p>
          </div>
          <div class="center">
            <img src="${assets}images/company/company-logo_01.png" />
            <img src="${assets}images/company/company-logo_02.png" />
            <img src="${assets}images/company/company-logo_03.png" />
            <img src="${assets}images/company/company-logo_04.png" />
            <img src="${assets}images/company/company-logo_05.png" />
            <img src="${assets}images/company/company-logo_07.png" />
            <img src="${assets}images/company/company-logo_08.png" />
            <img src="${assets}images/company/company-logo_09.png" />
            <img src="${assets}images/company/company-logo_10.png" />
            <img src="${assets}images/company/company-logo_11.png" />
            <img src="${assets}images/company/company-logo_13.png" />
            <img src="${assets}images/company/company-logo_14.png" />
            <img src="${assets}images/company/company-logo_15.png" />
            <img src="${assets}images/company/company-logo_16.png" />
            <img src="${assets}images/company/company-logo_17.png" />
            <img src="${assets}images/company/company-logo_19.png" />
            <img src="${assets}images/company/company-logo_20.png" />
            <img src="${assets}images/company/company-logo_21.png" />
            <img src="${assets}images/company/company-logo_22.png" />
            <img src="${assets}images/company/company-logo_23.png" />
          </div>
        </div>
        <div class="line line-top"></div>
        <div class="line line-bottom"></div>
      </div>

      <div style="background-color: #f6f6f6;">
        <div class="container">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
            <h2>&nbsp;</h2>
          </div>
          <div class="row"> 
            <!--start-->
            <div class="col-sm-6 col-md-3"> 

              <h4 class="uppercase">ที่ตั้งสำนักงาน</h4>
              <p> 173/21 อาคารเอเชีย เซนเตอร์ ชั้น 20 ถนนสาทรใต้ แขวงทุ่งมหาเมฆ เขตสาทร กรุงเทพ 10120<br> (เลขที่ใบอนุญาต : ว00004/2556) </p> 
              <img src="/DirectAsiaThailand/media/assets/images/trust-logo.png" alt="Direct Asia" class="visible-xs">




            </div>
            <div class="col-sm-6 col-md-3">
              <h4 class="uppercase">INSURANCE BROKER 360</h4>
              <div class="widget">
                <div class="widget-inner">
                  <ul>
                    <li class="cat-item cat-item-2"> <a href="#" title="">ข่าวประชาสัมพันธ์</a> </li>
                    <li class="cat-item cat-item-3"> <a href="#" title="">ร่วมงานกับเรา</a> </li>
                    <li class="cat-item cat-item-4"> <a href="#" title="">นโยบายการรักษาความปลอดภัย</a> </li>
                    <li class="cat-item cat-item-1"> <a href="#" title="">ข้อตกลงและเงื่อนไข</a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-sm-6 col-md-3 footer-newsletter">


              <div class="widget">
                <div class="widget-inner">
                  <h4 class="uppercase">ช่องทางชำระเงิน</h4>
                  <div class="tagcloud"> <img src="http://www.directasia.co.th/DirectAsiaThailand/media/assets/icons/payment-channel.png" class="img-responsive"> </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 footer-contact-us">
              <h4 class="uppercase">ติดต่อฝ่ายลูกค้าสัมพันธ์</h4>
              <p class="contact-number">02-627-7777</p>    <p>จันทร์-ศุกร์ : 08.00 – 20.30 น.<br>เสาร์-อาทิตย์ : 09.00 – 18.00 น.</p>
              <br class="hidden-xs">
              <p>สายด่วนแจ้งอุบัติเหตุ:<br>02-627-7788 ตลอด 24 ชั่วโมง</p> </div>  
            <!--end--> 
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
            <h2>&nbsp;</h2>
          </div>
        </div>

      </div>

    </main>
    <footer id="footer" data-temp-footer class="bg-color-theme"></footer>
    <script src="${assets}js/plugin/modernizr-2.6.2.min.js"></script>
    <script src="${assets}js/plugin/jquery.js"></script>
    <script src="${assets}js/plugin/jquery.easing.1.3.min.js"></script>
    <script src="${assets}js/plugin/royal-slider-1.0.min.js"></script>
    <script src="${assets}js/plugin/royal-custom.js"></script>
    <script src="${assets}js/plugin/angular.min.js"></script>
    <script src="${assets}js/plugin/slick.min.js"></script>
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
    <script src="${assets}js/plugin/jquery.slitslider.js"></script>
    <script src="${assets}js/plugin/jquery.ba-cond.min.js"></script>
    <script src="${assets}js/plugin/jquery.slides.min.js"></script>
    <script src="${assets}js/plugin/wow.min.js"></script>
    <script src="${assets}js/plugin/main.js"></script>
  </body>
</html>