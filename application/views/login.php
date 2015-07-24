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

  <div id="searchForm" class="container" ng-controller="CheckPackageCtrl">
    <div class="row">
      <br>
      <div class="sec-title wow animated fadeInDown">
        <div class="text-center" ng-show="!needToRister" ng-if="showTextRegister">
          <h2><a href="{{baseUrl}}login" class="black">เข้าสู่ระบบ</a></h2>
        </div>
        <form ng-submit="loginFormPage()" ng-show="!needToRister" ng-if="showTextRegister">
          <div  class="form-group has-feedback" ng-class="{'has-success' : usernameCorrect ,'has-warning' : usernameError }">
            <label for="exampleInputEmail1">Username</label>
                <label class="control-label" ng-if="usernameCorrect">: ผ่าน</label>
                <label class="control-label" ng-if="usernameError">: โปรดตรวจสอบความถูกต้อง username </label>
            <input type="text" class="form-control" ng-model="formLogin.username" id="username" placeholder="Username" required>
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" ng-if="usernameCorrect"></span>
                <span id="inputSuccess2Status" class="sr-only" ng-if="usernameCorrect">(success)</span>
                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true" ng-if="usernameError"></span>
                <span id="inputWarning2Status" class="sr-only" ng-if="usernameError">(warning)</span>
          </div>
          <div class="form-group has-feedback" ng-class="{'has-success' : passwordCorrect ,'has-warning' : passwordError }">
            <label for="exampleInputPassword1">Password</label>
                <label class="control-label" ng-if="passwordCorrect">: ผ่าน</label>
                <label class="control-label" ng-if="passwordError">: โปรดตรวจสอบความถูกต้อง password </label>
            <input type="password" class="form-control" ng-model="formLogin.password" id="password" placeholder="Password" required>
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" ng-if="passwordCorrect"></span>
                <span id="inputSuccess2Status" class="sr-only" ng-if="passwordCorrect">(success)</span>
                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true" ng-if="passwordError"></span>
                <span id="inputWarning2Status" class="sr-only" ng-if="passwordError">(warning)</span>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">เข้าสู่ระบบ</button>
        </form>

<div ng-cloak class="check-package">
     <br>
  <button type="button" class="btn btn-default btn-lg btn-block" ng-click="$parent.needToRister = true; showTextRegister = true;" ng-show="!needToRister" ng-if="showTextRegister">สมัคร คลิกเลย!!</button> 
     <div class="clear"></div>
        <div class="text-center" ng-if="needToRister && saveMember.status !== 'success'">
        <h2><a href="{{baseUrl}}login" class="black">ลงทะเบียน</a></h2>
      </div>
      <div class="col-md-12 wow animated fadeInLeft" ng-if="needToRister && saveMember.status !== 'success'">
          <div class="box-register box-form" style="background-color: #ffffff;">
            <form ng-submit="submitRegisterForm()">

              <div class="form-group">
                <label>หมายเลขบัตรประชาชน :</label>
                <input type="text" name="idCard" class="form-control" ng-model="formRegister.idCard" placeholder="หมายเลขบัตรประชาชน" maxlength="13" pattern="\d*" required title="กรอกเฉพาะตัวเลขเท่านั้น">
              </div>
              <div class="form-group">
                <label>ชื่อ-นามสกุล :</label>
                <input type="text" name="fullname" class="form-control" ng-model="formRegister.fullname" placeholder="ชื่อ-นามสกุล" required title="กรอก ชื่อ-นามสกุล">
              </div>
              <div class="form-group">
                <label>ที่อยู่ :</label>
                <input type="text" name="address" class="form-control" ng-model="formRegister.address" placeholder="ที่อยู่" required title="กรอก ที่อยู่">
              </div>
              <div class="input-field" ng-if="data.Provinces">
                <label>จังหวัด :</label>
                <select id="province" class="form-control" ng-model="formRegister.province" data-select-search ng-change="selectWatch('province')" required>
                  <option value="">เลือกจังหวัด</option>
                  <option ng-repeat="province in data.Provinces" value="{{province.PROVINCE_ID}}">{{province.PROVINCE_NAME}}</option>
                </select>
              </div>
              <div class="input-field" ng-if="data.Amphurs">
                <label>อำเภอ :</label>
                <select id="amphur" class="form-control" ng-model="formRegister.amphur" data-select-search ng-change="selectWatch('amphur')" required>
                  <option value="">เลือกอำเภอ</option>
                  <option ng-repeat="amphur in data.Amphurs" value="{{amphur.AMPHUR_ID}}">{{amphur.AMPHUR_NAME}}</option>
                </select>
              </div>
              <div class="input-field" ng-if="data.Districts">
                <label>ตำบล :</label>
                <select id="district" class="form-control" ng-model="formRegister.district" data-select-search ng-change="selectWatch('district')" required>
                  <option value="">เลือกตำบล</option>
                  <option ng-repeat="district in data.Districts" value="{{district.DISTRICT_ID}}">{{district.DISTRICT_NAME}}</option>
                </select>
              </div>
              <div class="input-field" ng-if="data.Zipcodes">
                <label>รหัสไปรษณีย์ :</label>
                <select id="zipcode" class="form-control" ng-model="formRegister.zipcode" data-select-search ng-change="selectWatch('zipcode')" required>
                  <option value="">เลือกรหัสไปรษณีย์</option>
                  <option ng-repeat="zipcode in data.Zipcodes" value="{{zipcode.POST_CODE}}">{{zipcode.POST_CODE}}</option>
                </select>
              </div>
              <div class="form-group">
                <label>เบอร​์โทรศัพท์ :</label>
                <input type="text" name="tel" class="form-control" ng-model="formRegister.tel" placeholder="เบอร​์โทรศัพท์" required pattern="\d*" title="กรอกเฉพาะตัวเลขเท่านั้น" maxlength="10">
              </div>
              <div class="form-group">
                <label>อีเมล์ :</label>
                <input type="text" name="email" class="form-control" ng-model="formRegister.email" placeholder="อีเมล์" required title="กรอก อีเมล์">
              </div>
              <div class="form-group">
                <label>บริษัทประกันที่เคยทำ :</label>
                <input type="text" name="text" class="form-control" ng-model="formRegister.oldInsurance" placeholder="บริษัทประกันที่เคยทำ" required title="กรอก ประกันที่เคยทำ">
              </div>
              <div class="form-group">
                <label>สนใจต่อจากเจ้าเดิมหรือป่าว :</label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="text" ng-model="formRegister.oldInsuranceRegister" value="0" required>
                  ต่อเจ้าเดิม
                </label>
                <label>
                  <input type="radio" name="text" ng-model="formRegister.oldInsuranceRegister" value="1" required>
                  ต่อเจ้าใหม่
                </label>
              </div>
              <div class="input-field" ng-if="data.Brands">
                <label>รถที่ใช้งานปัจจุบัน :</label>
                <select class="form-control" ng-model="formRegister.brand" data-select-search ng-change="selectWatch('brand')" required>
                  <option value="">เลือกยี้ห้อ</option>
                  <option ng-repeat="brand in data.Brands" value="{{brand.bName}}">{{brand.bName}}</option>
                </select>
              </div>
              <div id="box-user" class="input-field">
                <label>ผู้ใช้งาน :</label>
              </div>
              <div class="form-group has-feedback" ng-class="{'has-success' : hasUserAlraedy ,'has-warning' : hasUserYet }">
                <label>Username :</label>
                <label class="control-label" ng-if="hasUserAlraedy">สามารถใช้งานได้</label>
                <label class="control-label" ng-if="hasUserYet">ไม่สามารถใช้งานได้</label>
                <input type="text" name="username" class="form-control" ng-model="formRegister.username" placeholder="Username" required title="กรอก ชื่อผู้้ใช้" aria-describedby="inputSuccess2Status" ng-blur="checkUser()" minlength="6">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" ng-if="hasUserAlraedy"></span>
                <span id="inputSuccess2Status" class="sr-only" ng-if="hasUserAlraedy">(success)</span>
                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true" ng-if="hasUserYet"></span>
                <span id="inputWarning2Status" class="sr-only" ng-if="hasUserYet">(warning)</span>
              </div>
              <div class="form-group">
                <label>Password :</label>
                <input type="password" name="password" class="form-control" ng-model="formRegister.password" placeholder="Password" required title="กรอก รหัสผ่าน">
<!--                <br>
                <input type="password" name="passwordConfirm" class="form-control" ng-model="formRegister.passwordConfirm" placeholder="Password Confirm" required title="ยืนยัน รหัสผ่าน">-->
              </div>
              <div id="box-invite" class="form-group has-feedback" ng-class="{'has-success' : hasInviteAlraedy ,'has-warning' : hasInviteYet }">
                <label>ผู้แนะนำ :</label>
                <label class="control-label" ng-if="hasInviteAlraedy">มีผู้แนะนำที่ระบุ</label>
                <label class="control-label" ng-if="hasInviteYet">ไม่มีผู้แนะนำที่ระบุ</label>
                <input type="text" name="invite" class="form-control" ng-model="formRegister.invite" placeholder="ผู้แนะนำ" title="ผู้แนะนำ" aria-describedby="inputSuccess2Status" ng-blur="checkInvite()">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" ng-if="hasInviteAlraedy"></span>
                <span id="inputSuccess2Status" class="sr-only" ng-if="hasInviteAlraedy">(success)</span>
                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true" ng-if="hasInviteYet"></span>
                <span id="inputWarning2Status" class="sr-only" ng-if="hasInviteYet">(warning)</span>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">ลงทะเบียน</button>
              <button type="button" class="btn btn-default btn-lg btn-block"  ng-click="$parent.needToRister = false; scrollTo('searchForm');">ไม่ล่ะ!! ขอบคุณ.</button>
            </form> 
          </div>
      </div>
      <div class="col-md-12 wow animated fadeInLeft" ng-if="showTerm" style="background-color: #ffffff;">
          <div class="box-form">
            <form ng-submit="confirmTerm()">
          <div class="box-term">

              <div class="input-field">
                <h1>เงื่อนไขและข้อกำหนด</h1>
              </div>
              <div class="input-field">


<h2><strong>กฎระเบียบ ข้อกำหนด การสมัครเป็นที่ปรึกษาด้านการประกันรถ</strong></h2>

<ol>
  <li>ที่ปรึกษาด้านการประกันรถ (CONSULT) คือบุคคลหรือบริษัทฯ ที่ได้ยื่นขอสมัครเป็นผู้ขายประกันรถของบริษัทฯและได้รับการอนุมัติจากบริษัทฯเป็นที่เรียบร้อยแล้ว</li>
  <li>ที่ปรึกษาฯจะต้องศึกษา และปฏิบัติตามระเบียบข้อกำหนดของบริษัทฯ และไม่ทำการใด ๆ ที่ผิดต่อกฎหมายบ้านเมือง</li>
  <li>สถานภาพของที่ปรึกษาฯ
  <ul>
    <li>ที่ปรึกษาฯ จะต้องกรอกแบบฟอร์มต่าง ๆ ของบริษัทฯ พร้อมชำระค่าสมัครจำนวน 0 ฿/ปี ภายในวันที่ 31 ธันวาคมของปีที่หมดอายุนั้น หากยังมิได้แจ้งความจำนงรักษาสถานภาพของที่ปรึกษาฯ จะถือว่าระยะเวลาการได้รับอนุญาตเป็นที่ปรึกษาฯ สิ้นสุดลงโดยอัตโนมัติในวันที่&nbsp;31 ธันวาคมของปีนั้น</li>
    <li>ที่ปรึกษาฯจะต้องชำระค่าบริหารจัดการด้านการตลาด 10 % ของรายได้ เฉพาะในส่วนที่เกิน 100,000บาท/เดือน</li>
    <li>กรณีที่ปรึกษาฯลาออก หรือมิได้ยื่นหนังสือแจ้งความจำนงรักษาสถานภาพ ที่ปรึกษาฯอันมีผลทำให้สถานภาพของที่ปรึกษาฯสิ้นสุดลงนั้น อาจขอสมัครและรับอนุญาตใหม่ได้ โดยจะต้องรับการแต่งตั้งจากผู้แต่งตั้งรายเดิม แต่หากต้องการได้รับการแต่งตั้งจากผู้แต่งตั้งรายใหม่ จะต้องได้รับอนุมัติจากบริษัทฯ</li>
  </ul>
  </li>
  <li>สิทธิ อำนาจ และหน้าที่ของที่ปรึกษาฯ
  <ul>
    <li>ที่ปรึกษาฯ มีสิทธิได้รับค่า COMM. จากการขายประกันรถให้กับลูกค้า และลูกค้าจะต้องชำระเบี้ยประกันเป็นที่เรียบร้อยแล้วเท่านั้น นั่นหมายความว่า บริษัทฯ จะจ่าย &nbsp;(COMMISSION) โดยคำนวณจากยอดขายจริงที่เกิดขึ้น</li>
    <li>ที่ปรึกษาฯ จะทำการติดตั้งป้ายใด ๆ หรือจำหน่ายจ่ายแจกใบปลิว เอกสาร หนังสือชี้ชวน ภาพ โฆษณา หรือเอกสารใด ๆ ที่มีชื่อของบริษัทฯเกี่ยวข้องอยู่ด้วย จะต้องได้รับอนุญาตจากบริษัทฯ &nbsp;เป็นลายลักษณ์อักษรเสียก่อน</li>
    <li>ที่ปรึกษาฯ ไม่มีอำนาจเปลี่ยนแปลงแก้ไขข้อความ ขูดลบเอกสารใด ๆ ของบริษัทฯ หรือที่ บริษัทฯมอบให้ยึดถือไว้ หรือก่อให้เกิดหนี้สิน หรือทำสัญญาข้อตกลงใด ๆ อันเป็นการผูกพัน ต่อบริษัทฯ</li>
    <li>เมื่อที่ปรึกษาฯ ก่อให้เกิดหนี้สินขึ้นกับบริษัทฯ ไม่ว่าจะโดยสาเหตุใด และเป็นจำนวนเงินเท่าใด &nbsp;บริษัทฯมีสิทธิ์นำเอา COMM. หรือประโยชน์อื่นใดของที่ปรึกษาฯ มาหักใช้หนี้สินนั้นได้</li>
  </ul>
  </li>
  <li>การคำนวนค่า COMM. และการเลื่อนตำแหน่ง
  <ul>
    <li>
    <p>ค่า COMM. 12% &nbsp;&nbsp;คำนวณจากเบี้ยประกัน &nbsp;สำหรับตำแหน่ง ที่ปรึกษาฯ<br />
    ค่า COMM. 15% &nbsp;&nbsp;&nbsp;คำนวณจากเบี้ยประกัน &nbsp;สำหรับตำแหน่ง DIRECTOR<br />
    ค่า COMM. 18% &nbsp;&nbsp;&nbsp;คำนวณจากเบี้ยประกัน &nbsp;สำหรับตำแหน่ง CEO&nbsp;&nbsp;</p>
    </li>
    <li>
    <p>COMM. บริหารการขาย เฉพาะตำแหน่ง CEO คำนวณ 2% จากเบี้ยประกันของสาขาสายตรง ที่มีตำแหน่ง CEO เทียบเท่ากับคุณ ทั้งนี้ลูกทีม CEO จะต้องการันตียอดเบี้ยประกัน 500,000 ฿/เดือน ให้กับคุณ</p>
    </li>
    <li>
    <p>PROMOTION รถ BENZ S-CLASS เป็นการส่งเสริมการขายเฉพาะผู้ที่ยังไม่เคยได้รับสิทธิ์นี้ &nbsp;หรือให้สิทธ์เฉพาะบุคคล คำนวณ 10% จาก COMM. ของผู้ให้การแต่งตั้งคุณ ตั้งแต่ระดับที่ 1-3 &nbsp;ทั้งนี้ 10% ของ COMM. ของแต่ละผู้ให้การแต่งตั้ง จะต้องไม่เกินรายได้ COMM. 10% ของคุณให้เก็บสะสมจนครบที่จะซื้อรถดังกล่าว เริ่มเก็บสะสมตั้งแต่ตำแหน่งที่ ปรึกษาฯ จะออกรถได้เมื่อ &nbsp;คุณมีตำแหน่งเป็น CEO เท่านั้น</p>
    </li>
  </ul>
  </li>
  <li>
  <p>ที่ปรึกษาฯ จะต้องประพฤติตนให้เหมาะสม และไม่ละเมิดจรรยาบรรณดังต่อไปนี้​</p>

  <ul>
    <li>มีความซื่อสัตย์สุจริตต่อลูกค้าบริษัทฯ และผู้ร่วมประกันด้วยกัน</li>
    <li>
    <p>นำเสนอกรมธรรม์ และแผนขยายตลาดด้วยความซื่อสัตย์ ตามความเป็นจริงที่ระบุในเอกสารสิ่งพิมพ์ของบริษัทฯเท่านั้น</p>
    </li>
    <li>
    <p>ไม่ลดหรือเสนอที่จะลดราคาเพื่อจูงใจลูกค้า</p>
    </li>
    <li>
    <p>ไม่กล่าวให้ร้ายทับถม หรือพูดในแง่ลบต่อบริษัทฯ เพื่อนร่วมอาชีพอันจะก่อให้เกิดการเสียกำลังใจหรือแตกความสามัคคี</p>
    </li>
    <li>
    <p>ให้การแนะนำ และช่วยเหลือแก่ผู้ที่ได้รับอนุญาตในการเข้าร่วมเป็นที่ปรึกษาฯอย่างถูกต้อง</p>
    </li>
    <li>
    <p>หมั่นศึกษาหาความรู้เพิ่มเติมอย่างสม่ำเสมอ จากที่ประชุม รวมถึงข้อกำหนดกฎระเบียบของบริษัท</p>
    </li>
    <li>
    <p>ให้ความร่วมมือกับบริษัทฯ ด้วยดี</p>
    </li>
    <li>
    <p>ประพฤติตนอยู่ในศีลธรรม ประเพณีอันดีงาม ทั้งธำรงไว้ซึ่งเกียรติ ศักดิ์ศรี และคุณธรรม</p>
    </li>
    <li>
    <p>จะต้องปฏิบัติตามกฎระเบียบข้อกำหนดของบริษัทฯทุกประการ</p>
    </li>
  </ul>
  </li>
  <li>
  <p>บริษัทฯ สงวนไว้ซึ่งสิทธิที่จะเปลี่ยนแปลง แก้ไข ผลประโยชน์ ได้ตามความเหมาะสมเป็นครั้งคราว&nbsp;โดยบริษัทฯ จะแจ้งให้ทราบเป็นลายลักษณ์อักษร</p>
  </li>
  <li>
  <p>ไม่ชักจูงลูกค้าของผู้ร่วมอาชีพ อื่น ๆ มาซื้อประกันกับตนเอง และไม่ชักจูงผู้มุ่งหวังของเพื่อนร่วมอาชีพของที่ปรึกษาฯอื่น ๆ ที่ลงทะเบียนไว้ ณ บริษัทฯ ในช่วงคุ้มครองสิทธิ 10 วัน ให้มาซื้อประกันหรือร่วม ที่ปรึกษาฯกับตน</p>
  </li>
  <li>
  <p>หากเกิดกรณีพิพาทระหว่าง ที่ปรึกษาฯ กับผู้ให้การแต่งตั้ง หรือบริษัทฯ คำตัดสินของบริษัทฯ ถือเป็นที่สุด</p>
  </li>
  <li>
  <p>บริษัทฯ ทรงไว้ซึ่งสิทธิเด็ดขาด ที่จะระงับการจ่ายผลประโยชน์นับตั้งแต่วันที่</p>

  <ul>
    <li>
    <p>​​ที่ปรึกษาฯ ประพฤติผิดสัญญาข้อใดข้อหนึ่ง&nbsp;</p>
    </li>
    <li>
    <p>สัญญาการเป็นที่ปรึกษาฯ สิ้นสุดลง</p>
    </li>
    <li>
    <p>ที่ปรึกษาฯ กระทำใด ๆ เพื่อผลประโยชน์ของตนเองหรือผู้อื่น อันก่อให้เกิดความเสียหายแก่บริษัทฯ ไม่ว่าทางตรงหรือทางอ้อม</p>
    </li>
    <li>
    <p>บริษัทฯ ให้พ้นจากการเป็นที่ปรึกษาฯ</p>
    </li>
  </ul>
  </li>
  <li>​​สัญญาการเป็นที่ปรึกษาฯ สิ้นสุดลงเมื่อ
  <ul>
    <li>​ดำเนินการให้เกิด หรืออาจทำให้เกิดความเสียหายแก่ลูกค้าเพื่อนร่วมอื่น ๆ หรือบริษัทฯ​</li>
    <li>
    <p>กระทำการใด ๆ โดยไม่สุจริต ไม่สมควรในหน้าที่ ผิดกฎระเบียบข้อกำหนดหรือประมาทเลินเล่อในการปฏิบัติหน้าที่</p>
    </li>
    <li>
    <p>การกระทำผิดสัญญา หรือกฎระเบียบข้อกำหนด เงื่อนไข ข้อใดข้อหนึ่ง</p>
    </li>
    <li>
    <p>บริษัทฯ อนุมัติเป็นลายลักษณ์อักษร ให้พ้นจากการเป็นที่ปรึกษาของบริษัทฯ</p>
    </li>
  </ul>
  </li>
  <li>
  <p>ในกรณีที่บริษัทฯ ไม่ได้เรียกร้องให้ที่ปรึกษาฯ ปฏิบัติตามเงื่อนไขของสัญญาทั้งหมด หรือแต่บางส่วนก็ดี หรือละเลยไม่แจ้งถึงการผิดสัญญา หรือการไม่ปฏิบัติตามสัญญานับแต่วันที่บริษัทฯ&nbsp;ทราบก็ดี ก็ไม่ถือเป็นสาเหตุให้ที่ปรึกษาฯ หลุดพ้นจากความผูกพันในการปฏิบัติตามข้อกำหนดในสัญญานี้แต่อย่างใด</p>
  </li>
</ol>

<p>&nbsp;</p>

<p>&nbsp;</p>



              </div>
          </div>
            <br>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="text" ng-model="formTerm.agree" value="1" required>
                  ฉันอ่านเงื่อนไขและยอมรับ
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">ยอมรับ</button>
              <button type="button" class="btn btn-default btn-lg btn-block" ng-click="stepBackToRegister();">ย้อนกลับ</button>
            </form> 
      </div>
  </div>
      <div class="col-md-12 wow animated fadeInLeft" ng-if="saveMember.status === 'success'">
          <div class="box-register box-form">
            <form>
              <div class="input-field" align="center">
                <h1>ลงทะเบียนเสร็จสิ้น</h1>
              </div>
            </form> 
          </div>
      </div>
     
     <br>
  </div>

      <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
        <h2>&nbsp;</h2>
      </div>

    </div>
  </div>
</div>
</div>
      <!-- <section id="content" data-temp-content data-contents="${contents}"></section>  -->
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

      <div class="bg-color-theme-default">
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
      </div>

      <div class="bg-color-theme-gray">
        <div class="container">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
            <h2>&nbsp;</h2>
          </div>
          <div class="row"> 
            <!--start-->
            <div class="col-sm-6 col-md-3"> 

              <h4 class="uppercase">ที่ตั้งสำนักงาน</h4>
              <p> 173/21 อาคารเอเชีย เซนเตอร์ ชั้น 20 ถนนสาทรใต้ แขวงทุ่งมหาเมฆ เขตสาทร กรุงเทพ 10120<br> (เลขที่ใบอนุญาต : ว00004/2556) </p> 

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