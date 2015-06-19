<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <title>Pudthai | Dashboard</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/lib/uploadify.css" />
    <link rel="stylesheet" href="${assets}js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="${assets}css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="${assets}css/bootstrap.css">
    <link rel="stylesheet" href="${assets}css/neon-core.css">
    <link rel="stylesheet" href="${assets}css/neon-theme.css">
    <link rel="stylesheet" href="${assets}css/neon-forms.css">
    <link rel="stylesheet" href="${assets}css/custom.css">

    <script src="${assets}js/jquery-1.11.0.min.js"></script>

  </head>
  <body class="page-body  page-fade" data-url="#">
    <script>
      var Global = {};
      Global.baseUrl = '<?php echo base_url(); ?>';
    </script>
    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	

      <div class="sidebar-menu">


        <header class="logo-env">

          <!-- logo -->
          <div class="logo">
            <a href="#">
              <img src="${assets}images/logo.png" width="120" alt="" />
            </a>
          </div>

          <!-- logo collapse icon -->

          <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
              <i class="entypo-menu"></i>
            </a>
          </div>



          <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
          <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
              <i class="entypo-menu"></i>
            </a>
          </div>

        </header>






        <ul id="main-menu" class="">
          <!-- add class "multiple-expanded" to allow multiple submenus to open -->
          <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
          <!-- Search Bar -->
          <li id="search">
            <form method="get" action="">
              <input type="text" name="q" class="search-input" placeholder="Search something..."/>
              <button type="submit">
                <i class="entypo-search"></i>
              </button>
            </form>
          </li>
          <li class="active opened active">
            <a href="#">
              <i class="entypo-gauge"></i>
              <span>Dashboard</span>
            </a>
            <ul>
              <li class="active">
                <a href="<?php echo base_url(); ?>homectrl/main">
                  <span>Dashboard Main</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>homectrl/member">
                  <span>ระบบสมาชิก แก้ไข/ดูรายชื่อ</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>homectrl/content">
                  <span>ระบบจัดการเนือหา</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>homectrl/payment">
                  <span>ช่องทางการชำระเงิน</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>homectrl/accident">
                  <span>เบอร์แจ้งอุบัติเหตุ</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>homectrl/products">
                  <span>สินค้าและเบี้ยประกันภัย</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>homectrl/history">
                  <span>ประวัติ</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>homectrl/service">
                  <span>บริการ</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>Popup</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>Silde</span>
                </a>
              </li>


            </ul>
          </li>
        </ul>

      </div>	
      <div class="main-content">

        <div class="row">

          <!-- Profile Info and Notifications -->
          <div class="col-md-6 col-sm-8 clearfix">

            <ul class="user-info pull-left pull-none-xsm">

              <!-- Profile Info -->
              <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="${assets}images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
                  Administrator
                </a>


              </li>

            </ul>



          </div>


          <!-- Raw Links -->
          <div class="col-md-6 col-sm-4 clearfix hidden-xs">

            <ul class="list-inline links-list pull-right">

              <!-- Language Selector -->			
              </li>


              <li>
                <a href="<?php echo base_url(); ?>homectrl/logout">
                  Log Out <i class="entypo-logout right"></i>
                </a>
              </li>
            </ul>

          </div>

        </div>

        <hr />
