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
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" ng-model="formLogin.username" id="username" placeholder="Username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" ng-model="formLogin.password" id="password" placeholder="Password" required>
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
              <div class="input-field">
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
              <div class="form-group has-feedback" ng-class="{'has-success' : hasInviteAlraedy ,'has-warning' : hasInviteYet }">
                <label>ผู้แนะนำ :</label>
                <label class="control-label" ng-if="hasInviteAlraedy">มีผู้แนะนำที่ระบุ</label>
                <label class="control-label" ng-if="hasInviteYet">ไม่มีผู้แนะนำที่ระบุ</label>
                <input type="text" name="invite" class="form-control" ng-model="formRegister.invite" placeholder="ผู้แนะนำ" title="ผู้แนะนำ" aria-describedby="inputSuccess2Status" ng-blur="checkInvite()">
                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" ng-if="hasInviteAlraedy"></span>
                <span id="inputSuccess2Status" class="sr-only" ng-if="hasInviteAlraedy">(success)</span>
                <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true" ng-if="hasInviteYet"></span>
                <span id="inputWarning2Status" class="sr-only" ng-if="hasInviteYet">(warning)</span>
              </div>
              <button type="submit" class="btn btn-default btn-lg btn-block">ลงทะเบียน</button>
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
                <ol>
                  <li>ผู้ใช้บริการยอมรับว่าการกระทำการใดๆ ที่ผ่านบริการ mydtac ไม่ว่ากรณีใดๆ หากได้กระทำโดยการใช้หมายเลขโทรศัพท์เคลื่อนที่และรหัสผ่าน (OTP) ของผู้ใช้บริการ ไม่ว่าจะเป็นการกระทำโดยผู้ใช้บริการเอง หรือผู้รับมอบอำนาจของผู้ใช้บริการ หรือผู้ที่ผู้ใช้บริการอนุญาตให้นำหมายเลขโทรศัพท์เคลื่อนที่และรหัสผ่าน (OTP) ของผู้ใช้บริการไปใช้ หรือผู้ที่แอบอ้างนำหมายเลขโทรศัพท์เคลื่อนที่และรหัสผ่าน (OTP) ของผู้ใช้บริการไปใช้ ไม่ว่าด้วยความจงใจหรือความประมาทเลินเล่อของผู้ใช้บริการ ให้ถือว่าการทำธุรกรรมดังกล่าวถูกต้องสมบูรณ์มีผลผูกพันผู้ใช้บริการทันทีเสมือนว่าผู้ใช้บริการได้กระทำการดังกล่าวด้วยตนเอง หากเป็นการทำธุรกรรมที่มีการคิดค่าบริการ ค่าธรรมเนียม หรือค่าใช้จ่าย ตลอดจนมีความเสียหายเกิดขึ้นจากการทำธุรกรรมดังกล่าวไม่ว่ากรณีใดๆ ผู้ใช้บริการในฐานะเจ้าของหมายเลขโทรศัพท์เคลื่อนที่ และรหัสผ่าน (OTP) และ/หรือในฐานะผู้ใช้บริการหมายเลขโทรศัพท์เคลื่อนที่ของผู้ให้บริการตกลงรับผิดชอบในค่าบริการ ค่าธรรมเนียม หรือค่าใช้จ่ายรวมทั้งค่าเสียหายที่เกิดขึ้นดังกล่าวทั้งสิ้นทุกประการ โดยผู้ใช้บริการไม่จำเป็นต้องลงลายมือชื่อในเอกสารใดๆ เพื่อเป็นหลักฐานในการนั้นอีก</li>
                  <li>ผู้ใช้บริการมีหน้าที่ต้องรักษาหมายเลขโทรศัพท์เคลื่อนที่และรหัสผ่าน (OTP) ของผู้ใช้บริการไว้เป็นความลับ และไม่เปิดเผยต่อบุคคลอื่น</li>
                  <li>กรณีผู้ใช้บริการระบุหมายเลขโทรศัพท์เคลื่อนที่และรหัสผ่าน (OTP) ผิดเกินกว่าจำนวนครั้งที่ผู้ให้บริการกำหนด        ผู้ให้บริการมีสิทธิระงับการใช้บริการ mydtac เป็นการชั่วคราว หากผู้ใช้บริการประสงค์จะใช้บริการต่อไป ขอให้ดำเนินการติดต่อกับผู้ให้บริการผ่านทาง dtac call center หมายเลขโทรศัพท์ 1678 เพื่อทำการขอสิทธิในการเข้าใช้งาน mydtac อีกครั้ง</li>
                  <li>ผู้ใช้บริการยอมรับว่าการกระทำการใดๆ ผ่านบริการ mydtac นี้ เป็นไปเพื่อวัตถุประสงค์ในการใช้บริการต่างๆ กับหมายเลขโทรศัพท์เคลื่อนที่ของผู้ใช้บริการเท่านั้น หากผู้ใช้บริการได้กระทำละเมิดหรือก่อให้เกิดความเสียหายใดๆ แก่ผู้ให้บริการหรือบุคคลอื่น ผู้ใช้บริการจะต้องรับผิดทั้งในทางแพ่งและทางอาญา</li>
                  <li>ผู้ใช้บริการยอมรับว่าบันทึก หลักฐาน หรือเอกสารใดๆ ที่ผู้ให้บริการได้จัดทำและ/หรือบันทึกไว้ในระบบจัดเก็บข้อมูล เกี่ยวกับการใช้บริการต่างๆ ผ่าน mydtac ของผู้ใช้บริการนั้นมีความถูกต้องครบถ้วนสมบูรณ์ และสามารถใช้เป็นพยานหลักฐานได้</li>
                  <li>ผู้ใช้บริการตกลงว่าผู้ให้บริการไม่จำต้องรับผิดในความเสียหายใดๆ อันเกิดขึ้นแก่ผู้ใช้บริการไม่ว่าด้วยประการใดอันเนื่องมาจากการใช้บริการผ่านระบบ mydtac ทั้งนี้ รวมถึงแต่ไม่จำกัดเพียงกรณีระบบการติดต่อสื่อสาร ระบบคอมพิวเตอร์ ระบบไฟฟ้าขัดข้องเป็นเหตุให้ผู้ใช้บริการไม่สามารถใช้บริการ mydtac ได้</li>
                  <li>กรณีที่การใช้บริการ mydtac มีผลให้ต้องมีการหักเงินหรือเรียกเก็บเงินจากบัญชีเงินฝากธนาคาร และ/หรือบัญชีบัตรเครดิต และ/หรือบัญชีบัตรเดบิตของผู้ใช้บริการหรือของบุคคลอื่นใดที่ทำหนังสือยินยอมให้หักเงินจากบัญชีใดๆ ดังกล่าว เพื่อชำระค่าใช้บริการต่างๆ ให้แก่ผู้ให้บริการแล้ว ผู้ใช้บริการยินยอมให้ผู้ให้บริการดำเนินการดังกล่าวกับบัญชีเงินฝากธนาคารและ/หรือบัญชีบัตรเครดิต และ/หรือบัญชีบัตรเดบิตได้</li>
                  <li>ผู้ใช้บริการตกลงจะไม่ใช่เว็บไซต์นี้ เพื่อวัตถุประสงค์ทางการค้าอื่นๆ และ/หรือดำเนินการใดๆ ที่เป็นการกระทำที่ขัดต่อกฎหมาย และ/หรือศีลธรรมอันดีของประชาชนผ่านเว็บไซต์นี้ รวมถึงการไม่ส่งหรือเผยแพร่โปรแกรมไวรัส หรือโปรแกรมอื่นใดที่ออกแบบมาเพื่อขัดขวาง ทำลาย หรือทำให้เสียหาย ซึ่งโปรแกรมคอมพิวเตอร์ อุปกรณ์โทรคมนาคมและ/หรืออุปกรณ์อื่นๆ</li>
                  <li>ผู้ใช้บริการยินยอมให้ผู้ให้บริการนำข้อมูลเกี่ยวกับการใช้บริการของผู้ใช้บริการตามเว็บไซด์นี้ไปใช้ประโยชน์เพื่อปรับปรุงการให้บริการ หรือเพื่อส่ง หรือเผยแพร่ข่าวสาร สิทธิประโยชน์ต่างๆ เกี่ยวกับสินค้า บริการ โปรโมชั่นและข้อเสนอต่างๆได้</li>
                  <li>ผู้ใช้บริการเข้าใจและรับทราบว่าข้อมูลส่วนบุคคลที่ผู้ใช้บริการได้ให้ไว้กับ mydtac นี้ จะถูกส่งผ่านทางอินเทอร์เน็ตซึ่งเป็นเครือข่ายสาธารณะ โดยผู้ให้บริการจะใช้ความพยายาม ความระมัดระวังในการกำหนดมาตรการมิให้บุคคลภายนอกเข้าถึงข้อมูลส่วนบุคคลดังกล่าวได้ อย่างไรก็ตาม ผู้ให้บริการจะไม่รับผิดชอบต่อความเสียหายใดๆ (ไม่ว่าในทางตรง และทางอ้อม) ที่เกิดจากการที่บุคคลภายนอกได้เห็นและ/หรือใช้ข้อมูลดังกล่าวของผู้ใช้บริการ</li>
                  <li>ผู้ให้บริการขอสงวนสิทธิในการยกเลิกบริการนี้ หรือแก้ไขเปลี่ยนแปลงเงื่อนไขและข้อตกลงการใช้บริการ mydtac รวมถึงการเรียกเก็บค่าบริการ (ถ้ามี) ได้โดยไม่จำเป็นต้องแจ้งให้ผู้ใช้บริการทราบล่วงหน้า</li>
                  <li>การใช้บริการ mydtac ถูกควบคุมในประเทศไทย หากผู้ใช้บริการเข้าสู่ระบบหรือใช้บริการ mydtac นอกราชอาณาจักรไทย ผู้ใช้บริการตกลงและยินยอมให้บังคับตามกฎหมายไทย</li>
                  <li>ข้อมูลที่ปรากฎในการใช้บริการ mydtac นี้ รวมถึงเครื่องหมายการค้า เครื่องหมายบริการ เป็นต้น เป็นทรัพย์สินทางปัญญาของผู้ให้บริการ และผู้ให้บริการได้รับอนุญาตให้ใช้</li>
                  <li>ผู้ใช้บริการต้องไม่โอนหรือขายการใช้งานหรือการเข้าถึงการใช้บริการ mydtac ของผู้ใช้บริการนี้ ให้แก่บุคคลอื่น หากผู้ใช้บริการทราบว่ามีบุคคลอื่นนำหมายเลขโทรศัพท์ และ/หรือ รหัสผ่าน (OTP)  ของผู้ใช้บริการไปใช้โดยมิชอบ ผู้ใช้บริการต้องแจ้งมายังผู้ให้บริการทันที</li>
                  <li>ผู้ใช้บริการต้องดูแลรับผิดชอบมิให้ตัวแทน และผู้ที่ถือว่าอยู่ในความรับผิดชอบของผู้ใช้บริการกระทำการที่ถือเป็นความผิดตามที่ระบุไว้ท้ายนี้ หากมีการละเลย ฝ่าฝืน ผู้ใช้บริการต้องรับผิดชอบร่วมกับผู้กระทำความผิดนั้นตามกฎหมายที่เกี่ยวข้องทั้งทางแพ่งและอาญา
                    <ol>
                      <li>เปลี่ยนแปลง แก้ไขข้อมูลคอมพิวเตอร์โดยไม่ได้รับอนุญาตจากผู้ให้บริการ</li>
                      <li>ลักลอบนำข้อมูลคอมพิวเตอร์ไปเปิดเผย จำหน่าย จ่าย แจก แก่ผู้อื่น ไม่ว่าเพื่อประโยชน์ส่วนตัวหรือเพื่อผู้อื่นโดยไม่ได้รับอนุญาต หรือเป็นเหตุให้ผู้ให้บริการได้รับความเสียหาย</li>
                      <li>ประมาท เลินเล่อ ไม่ระมัดระวังการใช้งานระบบคอมพิวเตอร์ จนเป็นเหตุให้บุคคลอื่นสามารถลักลอบนำข้อมูลคอมพิวเตอร์ไปเปิดเผย จำหน่าย จ่าย แจก</li>
                      <li>ใช้รหัสของผู้อื่นในการเข้าถึงระบบคอมพิวเตอร์ เพื่อทำการอ่าน คัดลอก แก้ไข เปลี่ยนแปลง ลบทิ้ง ทำลายข้อมูลคอมพิวเตอร์ หรือทำธุรกรรมใดๆ ไม่ว่าเพื่อประโยชน์ส่วนตัวหรือเพื่อผู้อื่น</li>
                      <li>ก่อกวน หรือทำลายข้อมูลคอมพิวเตอร์ ระบบคอมพิวเตอร์ เพื่อสร้างความเสียหายแก่ผู้ให้บริการ หรือผู้อื่น</li>
                      <li>ลักลอบ เฝ้าดู ค้นหาเส้นทางหรือถอดรหัส ข้อมูลอิเล็กทรอนิกส์ โดยใช้เครื่องมือ หรือเทคโนโลยีอื่นใด เพื่อให้ได้มาซึ่งข้อมูลคอมพิวเตอร์ หรือความลับของผู้ให้บริการหรือผู้อื่น โดยจงใจก่อให้เกิดความเสียหายทั้งต่อผู้ให้บริการหรือผู้อื่น</li>
                      <li>ให้ความช่วยเหลือหรือร่วมมือกับผู้อื่น เพื่อเข้าถึงระบบคอมพิวเตอร์ หรือข้อมูลคอมพิวเตอร์ เพื่อทำการอ่าน คัดลอก แก้ไข เปลี่ยนแปลง ลบทิ้ง ทำลายข้อมูลคอมพิวเตอร์ หรือทำธุรกรรมใดๆ ไม่ว่าเพื่อประโยชน์ส่วนตัวหรือผู้อื่น</li>
                      <li>ลักลอบใช้รหัสในการเข้าถึงระบบคอมพิวเตอร์ และเป็นเหตุให้ผู้ให้บริการหรือผู้อื่นได้รับความเสียหาย</li>
                      <li>ประมาท เลินเล่อ ไม่ระมัดระวังการใช้รหัส หรือยินยอมให้บุคคลอื่นใช้รหัสของตนเองเข้าถึงระบบคอมพิวเตอร์</li>
                      <li>พยายามเข้าถึงระบบคอมพิวเตอร์ในส่วนที่ไม่มีสิทธิ์ หรือไม่ได้รับอนุญาตให้ใช้งาน</li>
                      <li>ติดตั้ง มีไว้ในครอบครอง หรือใช้งาน Software ประเภท Hacking Tools</li>
                      <li>เชื่อมต่ออุปกรณ์คอมพิวเตอร์ หรืออุปกรณ์อิเล็กทรอนิกส์อื่นใดเข้ากับระบบคอมพิวเตอร์โดยไม่ได้รับอนุญาตจากผู้ให้บริการ</li>
                      <li>ลักลอบเข้าถึงระบบคอมพิวเตอร์ ไม่ว่าด้วยวิธีการใดๆ โดยมิชอบ</li>
                      <li>กระทำความผิดใดๆ ตามฐานความผิดที่ระบุไว้ใน พระราชบัญญัติว่าด้วยการกระทำความผิดเกี่ยวกับคอมพิวเตอร์ พ.ศ. 2550 และกฎหมายอื่นที่เกี่ยวข้อง</li>
                      <li>ผู้ใช้บริการต้องเป็นผู้จัดหา และรับผิดชอบค่าใช้จ่ายในการเชื่อมต่ออินเทอร์เน็ต (Internet Connection) เพื่อเข้าสู่การใช้บริการ mydtac</li>
                      <li>กรณีมีเงื่อนไขกรณีหนึ่งกรณีใดในข้อตกลงนี้ขัดต่อกฎหมาย หรือไม่มีผลใช้บังคับ ให้ถือว่าเงื่อนไขนั้นๆ เป็นโมฆะเฉพาะส่วนที่ขัดต่อกฎหมาย หรือไม่มีผลใช้บังคับเท่านั้น โดยไม่มีผลกระทบต่อเงื่อนไขอื่นๆ ที่ยังคงความสมบูรณ์อยู่</li>
                      <li>ข้อตกลงและเงื่อนไขการใช้บริการที่ปรากฎบนบริการ mydtac ผ่านเว็บไซต์นี้ ให้ใช้บังคับและตีความตามกฎหมายไทย และให้ศาลไทยมีอำนาจโดยเด็ดขาดในการพิจารณาข้อพิพาทที่เกิดขึ้นเกี่ยวกับเงื่อนไขและข้อกำหนดนี้</li>
                    </ol>
                  </li>
                </ol>
              </div>
          </div>
            <br>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="text" ng-model="formTerm.agree" value="1" required>
                  ฉันอ่านเงื่อนไขและยอมรับ
                </label>
              </div>
              <button type="submit" class="btn btn-default btn-lg btn-block">ยอมรับ</button>
            </form> 
      </div>
      <div class="col-md-12 wow animated fadeInLeft" ng-if="saveMember.status === 'success'">
          <div class="box-register box-form">
            <form>
              <div class="input-field" align="center">
                <h1 class="white">ลงทะเบียนเสร็จสิ้น</h1>
              </div>
            </form> 
          </div>
      </div>
     
     <br>
  </div>
  </div>

      <div class="col-md-12 col-sm-12 col-xs-12 text-center wow animated zoomIn">
        <h2>&nbsp;</h2>
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