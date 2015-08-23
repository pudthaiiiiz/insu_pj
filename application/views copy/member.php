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
    <link rel="stylesheet" href="${assets}css/colorbox.css">
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
      <div ng-controller="ContentListCtrl">

  <div class="container" ng-if="contents">
    <div class="row">
      <br>
      <div class="sec-title wow animated fadeInDown">
        <ol class="breadcrumb">
          <li><a href="${baseUrl}">หน้าแรก</a></li>
          <li class="active">ระบบสมาชิค</li>
        </ol>
      </div>


      <div class="col-md-4 col-sm-4 col-xs-12 wow animated zoomIn">
        <form class="form-">
          <div class="text-center">
        <img src="{{assets}}images/person-icon.png" alt="member" class="img-member img-circle">
      </div>
        <br>
          <!-- <button type="submit" class="btn btn-primary btn-lg btn-block">เปลี่ยนรูป</button> -->
          <a href='<?php echo base_url(); ?>logout' class="btn btn-danger btn-lg btn-block">ออกจากระบบ</a>
        </form>
        <br>
        <br>
      </div>

      <div class="col-md-8 col-sm-8 col-xs-12 wow animated zoomIn form-">
        <p>ชื่อ-นามสกุล : <?php echo $this->session->userdata('sesData')->cusFullname; ?></p>
        <p>อีเมล์ :  <?php echo $this->session->userdata('sesData')->cusEmail; ?></p>
        <p>เบอร​์โทรศัพท์ :  <?php echo $this->session->userdata('sesData')->cusPhone; ?></p>
        <p>ผู้แนะนำ : <?php
          if($this->session->userdata('sesData')->cusInvite == ""){
              echo "ยังไม่มี";
          }else{

            echo $this->session->userdata('sesData')->cusInvite;
          }
        ?>

        </p>
        
        
      </div>
     
      <div class="col-md-12 col-sm-12 col-xs-12 wow animated zoomIn">
       <?php if(isset($error)){
              echo '<label  class="btn btn-danger btn-lg btn-block">กรุณาตรวจสอบ เอกสาร อีกครั้ง ** รูปเท่านั้น</label>';
            }elseif(isset($success)){
              echo '<label  class="btn btn-success btn-lg btn-block">ทางเราได้รับเอกสารของท่านเรียบร้อยแล้ว</label>';
            }

      ?>
        <form class="form-file" action="<?php echo base_url(); ?>AuthenCtrl/uploads"method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="file">แนบไฟล์</label>
            <input type="file" name="file" id="file" accept="image/*" required>
            <p class="help-block">เอกสาร <font color='red' > ** รูปเท่านั้น </font></p>
          </div>
          <input type="submit"  name="sent" class="btn btn-primary btn-lg btn-block" value="อัพโหลด"> 
        </form>
        <h2>&nbsp;</h2>
      </div>

    </div>
  </div>
</div>


      <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
        <h2>&nbsp;</h2>
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
    <script src="${assets}js/plugin/jquery.colorbox-min.js"></script>
    <script src="${assets}js/plugin/main.js"></script>
  </body>
</html>