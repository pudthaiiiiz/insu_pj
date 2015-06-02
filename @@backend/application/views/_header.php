<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Pudthai Admin Panel" />
	<meta name="author" content="พิเชษฐ์ ขุนใจ" />
	
	<title>BackEnd | Controller System</title>
	

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pudthai-core.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pudthai-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pudthai-forms.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>

</head>
<body class="page-body" data-url="http://localhost">

<div class="page-container">
	<div class="sidebar-menu" style=" font-family: 'DBMomentXRegular'; font-size:23px;">
		<header class="logo-env">
			<div class="logo" >
				<a href="#">
					<img src="<?php echo base_url(); ?>assets/images/logo.png" width="160" alt="" />

				</a>
				
			</div>
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation">
					<i class="entypo-menu"></i>
				</a>
			</div>
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation">
					<i class="entypo-menu"></i>
				</a>
			</div>
		</header>
		<ul id="main-menu" class="">
			<li class="opened">
				<a href="#"><i class="entypo-layout"></i><span>Badcat Panel</span></a>
				<ul>
					<li>
						<a href="<?php echo base_url(); ?>badcat/createcode"><span>Create Code Prepaid</span></a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>badcat/viewcode"><span>View Code Prepaid</span></a>
					</li>
					<li>
						<a href="#"><span>Active Code Prepaid</span></a>
					</li>
				</ul>
			</li>
			<li class="opened">
				<a href="#"><i class="entypo-tools"></i><span>Badcat Setting</span></a>
				<ul>
					<li>
						<a href="<?php echo base_url(); ?>setting/slide"><span>เพิ่มรูป Slide</span></a>
					</li>
				
				</ul>
			</li>
			<li>
				<a href="#"><i class="entypo-monitor"></i><span>ระบบสมาชิก</span></a>
				<ul>
					<li>
						<a href="<?php echo base_url(); ?>member/log">
							<span>ประวัติใช้งาน</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="entypo-monitor"></i><span>ระบบจัดการรับชม</span></a>
				<ul>
					<li>
						<a href="#">
							<span>เมนู1</span>
						</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="#"><i class="entypo-newspaper"></i><span>ระบบจัดการรูปภาพ</span></a>
			</li>
			
		</ul>

				
	</div>	

	<div class="main-content">
	<div class="row">
		<div class="col-md-6 col-sm-8 clearfix">
			<ul class="user-info pull-left pull-none-xsm">
				<li class="profile-info dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url(); ?>assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
						Administrator
					</a>
					<ul class="dropdown-menu">
						<li class="caret"></li>
						<li>
							<a href="#">
								<i class="entypo-mail"></i>
								Inbox
							</a>
						</li>
						<li>
							<a href="#">
								<i class="entypo-calendar"></i>
								Calendar
							</a>
						</li>
					</ul>
				</li>
			</ul>
					
			<ul class="user-info pull-left pull-right-xs pull-none-xsm">
				<li class="notifications dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="entypo-attention"></i>
						<span class="badge badge-info">1</span>
					</a>
					<ul class="dropdown-menu">
						<li class="top">
							<p class="small">
								<a href="#" class="pull-right">Mark all Read</a>
								You have <strong>3</strong> new notifications.
							</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller">
								<li class="unread notification-success">
									<a href="#">
										<i class="entypo-user-add pull-right"></i>
										
										<span class="line">
											<strong>New user registered</strong>
										</span>
										
										<span class="line small">
											30 seconds ago
										</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="external">
							<a href="#">View all notifications</a>
						</li>				
					</ul>
					
				</li>
				
				<!-- Message Notifications -->
				<li class="notifications dropdown">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="entypo-mail"></i>
						<span class="badge badge-secondary">1</span>
					</a>
					
					<ul class="dropdown-menu">
						<li>
							<ul class="dropdown-menu-list scroller">
								<li class="active">
									<a href="#">
										<span class="image pull-right">
											<img src="<?php echo base_url(); ?>assets/images/thumb-1.png" alt="" class="img-circle" />
										</span>
										
										<span class="line">
											<strong>Luc Chartier</strong>
											- yesterday
										</span>
										
										<span class="line desc small">
											This ain’t our first item, it is the best of the rest.
										</span>
									</a>
								</li>
						
							</ul>
						</li>
						<li class="external">
							<a href="#">All Messages</a>
						</li>				
					</ul>
					
				</li>
		</div>
		
		<!-- Raw Links -->
		<div class="col-md-6 col-sm-4 clearfix hidden-xs">
			
			<ul class="list-inline links-list pull-right">
				<li class="sep"></li>
				
				<li>
					<a href="<?php echo base_url(); ?>auth/logout">
						Log Out <i class="entypo-logout right"></i>
					</a>
				</li>
				<li class="sep"></li>
			</ul>
			
		</div>
		
	</div>

	<hr />