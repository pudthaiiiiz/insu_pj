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
      <!--<section id="home" data-temp-slide></section>-->    
      <div ng-controller="SlideCtrl" ng-cloak class="temp-slide">

        <div id="wrapper"> 
          <div id="myGallery1" class="royalSlider clearfix">

            <ul class="royalSlidesContainer" id="testId">
              <li class="royalSlide"> 

                <!--<div  style="background-image:url({site_url()}content/images/slide/{$slide[i]->SlidePic});">-->
                <div class="royalCaption">
                  <div class="royalCaptionItem title" data-show-effect="moveleft fade"  data-move-offset="10">จ่ายแพงกว่าทำไม</div>
                  <div class="royalCaptionItem content" data-show-effect="moveleft fade" data-delay="400" data-move-offset="15" >วันนี้ต่อประกันในราคาต้นทุน ดีกว่ามั้ย

<!--<p><a href="#" target="_self" class="" title="BTN">BTN</a><p>-->
                    <button type="button" class="btn_link btn btn-primary btn-lg">อ่านต่อ</button>

                  </div>
                </div>                               	

                <img src="${assets}img/piggy-bank_2283301b.jpg">
                <!--</div>-->
              </li>
              <li class="royalSlide"> 

                <!--<div  style="background-image:url({site_url()}content/images/slide/{$slide[i]->SlidePic});">-->
                <div class="royalCaption">
                  <div class="royalCaptionItem title" data-show-effect="moveleft fade"  data-move-offset="10">ที่ปรึกษาด้านประกันรถยนต์</div>
                  <div class="royalCaptionItem content" data-show-effect="moveleft fade" data-delay="400" data-move-offset="15" >เข้ามาเป็นส่วนหนึ่งของเรา มาเป็นที่ปรึกษาด้านประกันรถยนต์

<!--<p><a href="#" target="_self" class="" title="BTN">BTN</a><p>-->
                    <button type="button" class="btn_link btn btn-primary btn-lg">สมัครเป็นที่ปรึกษา</button>

                  </div>
                </div>                               	

                <img src="${assets}img/kick-your-own-butt-2-professionalvas.jpg">
                <!--</div>-->
              </li>
            </ul>                 
          </div> <!-- Gallery End -->        
        </div> <!-- #wrapper end -->



      </div>
            <!--<section id="searchForm" data-temp-check-package></section>-->     
            <!--<section id="step" data-temp-step></section>--> 
      <section id="step" data-temp-step>
        <div ng-controller="StepCtrl">
          <div class="container">
            <div class="row">
              <!--      <div class="sec-title text-center">
                      <h2 class="wow animated bounceInLeft">สมัครง่าย คลิกเลย</h2>
                    </div>-->

              <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
                <div class="service-item">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/L7rgmUov1xE?list=PLwkyYG-MjCyOP-dboCXSc27S_HXUtq6H_" frameborder="0" allowfullscreen></iframe>						
                  <br>
                  <br>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
                <div class="service-item">
                  <div class="service-icon">
                    <i class="fa fa-home fa-3x"></i>
                  </div>
                  <h3>การันตีราคาดีที่สุด</h3>
                  <p>เราให้ราคาโดนใจ ผู้ขับขี่ปลอดภัยทุกท่าน</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
                <div class="service-item">
                  <div class="service-icon">
                    <i class="fa fa-tasks fa-3x"></i>
                  </div>
                  <h3>การันตีคุณภาพ</h3>
                  <p>ความสำเร็จที่ผ่านการพิสูจน์ จากทั่วเอเชีย</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
                <div class="service-item">
                  <div class="service-icon">
                    <i class="fa fa-clock-o fa-3x"></i>
                  </div>
                  <h3>การันตีถึงจุดเกิดเหตุเร็ว</h3>
                  <p>เราจะมาถึงจุดเกิดเหตุภายใน 30 นาที หากช้ากว่านี้ รับฟรี บัตรเติมน้ำมันมูลค่า 1,000 บาท </p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
                <div class="service-item">
                  <div class="service-icon">
                    <i class="fa fa-heart fa-3x"></i>
                  </div>
                  <h3>การันตีบริการอบอุ่น</h3>
                  <p>แม้เราจะเป็นบริษัทออนไลน์ แต่เราดูแลเอาใจใส่อย่างใกล้ชิดและเป็นกันเอง </p>							
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


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

            <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
              <h2>&nbsp;</h2>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-12 wow animated zoomIn">
              <h2>ขั้นตอนการเคลมประกันภัยรถยนต์</h2>
              <p>insurancebroker360.com จะทำให้การเคลมประกันภัยรถยนต์เป็นเรื่องที่ง่ายเหลือเชื่อ</p>
              <p>ทุกครั้งที่คุณต้องการแจ้งเคลมหลังเกิดอุบัติเหตุ ผู้เชี่ยวชาญของเราจะดูแลคุณตั้งแต่การให้คำแนะนำ จนถึงการส่งมอบรถ โดยแจ้งความคืบหน้าเป็นระยะ และไม่มีค่าใช้จ่ายใดๆเพิ่มเติม</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-center wow animated zoomIn">
              <p><img alt="Special Offer" src="http://www.directasia.co.th/DirectAsiaThailand/media/assets/images/content/process-icon.png" /><br />
                &nbsp;</p>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
              <h2>ช่องทางการชำระเงิน</h2>
              <p>&nbsp;</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow animated zoomIn">
              <p><img alt="Pay Securely Online" src="http://www.directasia.co.th/DirectAsiaThailand/media/assets/images/content/online-icon.png" style="float:left; margin-right:20px" /></p>
              <p><a href="#">จ่ายออนไลน์</a></p>
              <p>จ่ายได้ทันทีและปลอดภัย ด้วยบัตรวีซ่าหรือมาสเตอร์การ์ดของคุณ</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow animated zoomIn">
              <p><img alt="Pay Securely Online" src="http://www.directasia.co.th/DirectAsiaThailand/media/assets/images/content/over-phone-icon.png" style="float:left; margin-right:20px" /></p><p><a href="http://www.directasia.co.th/online-car-insurance/buy-save/#ways-to-buy">ผ่านทางโทรศัพท์</a></p>
              <p>โทร.หาเราเพื่อชำระเงิน<br />
                ได้ที่ 02-627-7777</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 wow animated zoomIn">
              <p><img alt="Pay Securely Online" src="http://www.directasia.co.th/DirectAsiaThailand/media/assets/images/content/service-count.png" style="float:left; margin-right:20px" /></p>
              <p><a href="#">เคาน์เตอร์เซอร์วิส</a></p>
              <p>จ่ายเงินได้ที่เคาน์เตอร์เซอร์วิสทุกแห่ง (7-Eleven, Max Value, Tops)</p>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
              <h2>&nbsp;</h2>
            </div>

          </div>
        </div>
      </div>

<!--<section id="content" data-temp-content data-url="${assets}" data-contents="${contents}"></section>--> 
<!--      <section id="whyme" data-temp-why-me data-url="${assets}"></section> 
<section id="follow-us" data-temp-follow-us></section> 
<section id="contact-us" data-temp-contact-us></section> -->
    </main>
    <!--<footer id="footer" data-temp-footer></footer>-->
    <footer id="footer" data-temp-footer>
      <div ng-controller="FooterCtrl">
        <div class="container">
          <div class="row text-center">
            <div class="footer-content">
              <div class="wow animated fadeInDown">
                <p>INSURANCE BROKER 360</p>
              </div>
              <!--
                      <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
                        <div class="input-field">
                          <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
                          <button type="submit" class="submit-icon">
                            <i class="fa fa-paper-plane fa-lg"></i>
                          </button>
                        </div>
                      </form>-->
              <div class="footer-social">
                <ul>
                  <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
                  <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                  <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
                  <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
                  <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
                </ul>
              </div>

              <p>Copyright &copy; 2015 Design and Developed By <a href="http://th-script.com/">TH-SCRIPT.COM</a> </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
        <!--<script src="${assets}js/plugin/modernizr-2.6.2.min.js"></script>-->
    <script src="${assets}js/plugin/jquery.js"></script>
    <script src="${assets}js/plugin/jquery.easing.1.3.min.js"></script>
    <script src="${assets}js/plugin/royal-slider-1.0.min.js"></script>
    <script src="${assets}js/plugin/royal-custom.js"></script>
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
    <!--<script src="${assets}js/directives.js"></script>-->
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
    <script>
      setTimeout(function () {


        new RoyalSlider("#myGallery1", {
          captionShowEffects: ["moveleft", "fade"],
          captionShowDelay: 200,
          captionShowSpeed: 400,
          captionShowEasing: "easeOutBack",
          directionNavEnabled: true,
          controlNavEnabled: true,
          slideshowEnabled: true,
          slideshowPauseOnHover: true,
          autoScaleSlider: false,
          loop: true,
          slideshowDelay: 7000
        });

      }, 200);

    </script>
  </body>
</html>