<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Neon | Advanced Plugins</title>
	

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img src="assets/images/logo@2x.png" width="120" alt="" />
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
			<li>
				<a href="index.html">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
				<ul>
					<li>
						<a href="index.html">
							<span>Dashboard 1</span>
						</a>
					</li>
					<li>
						<a href="dashboard-2.html">
							<span>Dashboard 2</span>
						</a>
					</li>
					<li>
						<a href="dashboard-3.html">
							<span>Dashboard 3</span>
						</a>
					</li>
					<li>
						<a href="skin-black.html">
							<span>Skins</span>
						</a>
						<ul>
							<li>
								<a href="skin-black.html">
									<span>Black Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-white.html">
									<span>White Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-purple.html">
									<span>Purple Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-cafe.html">
									<span>Cafe Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-red.html">
									<span>Red Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-green.html">
									<span>Green Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-yellow.html">
									<span>Yellow Skin</span>
								</a>
							</li>
							<li>
								<a href="skin-blue.html">
									<span>Blue Skin</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="highlights.html">
							<span>What's New</span>
							<span class="badge badge-success badge-roundless">v1.7</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="layout-api.html">
					<i class="entypo-layout"></i>
					<span>Layouts</span>
				</a>
				<ul>
					<li>
						<a href="layout-api.html">
							<span>Layout API</span>
						</a>
					</li>
					<li>
						<a href="layout-collapsed-sidebar.html">
							<span>Collapsed Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-fixed-sidebar.html">
							<span>Fixed Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-chat-open.html">
							<span>Chat Open</span>
						</a>
					</li>
					<li>
						<a href="layout-horizontal-menu-boxed.html">
							<span>Horizontal Menu Boxed</span>
						</a>
					</li>
					<li>
						<a href="layout-horizontal-menu-fluid.html">
							<span>Horizontal Menu Fluid</span>
						</a>
					</li>
					<li>
						<a href="layout-mixed-menus.html">
							<span>Mixed Menus</span>
						</a>
					</li>
					<li>
						<a href="layout-right-sidebar.html">
							<span>Right Sidebar</span>
						</a>
					</li>
					<li>
						<a href="layout-both-menus-right-sidebar.html">
							<span>Both Menus (Right Sidebar)</span>
						</a>
					</li>
					<li>
						<a href="layout-page-transition-fade.html">
							<span>Page Enter Transitions</span>
						</a>
						<ul>
							<li>
								<a href="layout-page-transition-fade.html">
									<span>Fade Scale</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-left-in.html">
									<span>Left In</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-right-in.html">
									<span>Right In</span>
								</a>
							</li>
							<li>
								<a href="layout-page-transition-fade-only.html">
									<span>Fade Only</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-boxed.html">
							<span>Boxed Layout</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="index.html" target="_blank">
					<i class="entypo-monitor"></i>
					<span>Frontend</span>
				</a>
			</li>
			<li>
				<a href="ui-panels.html">
					<i class="entypo-newspaper"></i>
					<span>UI Elements</span>
				</a>
				<ul>
					<li>
						<a href="ui-panels.html">
							<span>Panels</span>
						</a>
					</li>
					<li>
						<a href="ui-tiles.html">
							<span>Tiles</span>
						</a>
					</li>
					<li>
						<a href="forms-buttons.html">
							<span>Buttons</span>
						</a>
					</li>
					<li>
						<a href="ui-typography.html">
							<span>Typography</span>
						</a>
					</li>
					<li>
						<a href="ui-tabs-accordions.html">
							<span>Tabs &amp; Accordions</span>
						</a>
					</li>
					<li>
						<a href="ui-tooltips-popovers.html">
							<span>Tooltips &amp; Popovers</span>
						</a>
					</li>
					<li>
						<a href="ui-navbars.html">
							<span>Navbars</span>
						</a>
					</li>
					<li>
						<a href="ui-breadcrumbs.html">
							<span>Breadcrumbs</span>
						</a>
					</li>
					<li>
						<a href="ui-badges-labels.html">
							<span>Badges &amp; Labels</span>
						</a>
					</li>
					<li>
						<a href="ui-progress-bars.html">
							<span>Progress Bars</span>
						</a>
					</li>
					<li>
						<a href="ui-modals.html">
							<span>Modals</span>
						</a>
					</li>
					<li>
						<a href="ui-blockquotes.html">
							<span>Blockquotes</span>
						</a>
					</li>
					<li>
						<a href="ui-alerts.html">
							<span>Alerts</span>
						</a>
					</li>
					<li>
						<a href="ui-pagination.html">
							<span>Pagination</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="mailbox.html">
					<i class="entypo-mail"></i>
					<span>Mailbox</span>
					<span class="badge badge-secondary">8</span>
				</a>
				<ul>
					<li>
						<a href="mailbox.html">
							<i class="entypo-inbox"></i>
							<span>Inbox</span>
						</a>
					</li>
					<li>
						<a href="mailbox-compose.html">
							<i class="entypo-pencil"></i>
							<span>Compose Message</span>
						</a>
					</li>
					<li>
						<a href="mailbox-message.html">
							<i class="entypo-attach"></i>
							<span>View Message</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="opened active">
				<a href="forms-main.html">
					<i class="entypo-doc-text"></i>
					<span>Forms</span>
				</a>
				<ul>
					<li>
						<a href="forms-main.html">
							<span>Basic Elements</span>
						</a>
					</li>
					<li class="active">
						<a href="forms-advanced.html">
							<span>Advanced Plugins</span>
						</a>
					</li>
					<li>
						<a href="forms-wizard.html">
							<span>Form Wizard</span>
						</a>
					</li>
					<li>
						<a href="forms-validation.html">
							<span>Data Validation</span>
						</a>
					</li>
					<li>
						<a href="forms-masks.html">
							<span>Input Masks</span>
						</a>
					</li>
					<li>
						<a href="forms-sliders.html">
							<span>Sliders</span>
						</a>
					</li>
					<li>
						<a href="forms-file-upload.html">
							<span>File Upload</span>
						</a>
					</li>
					<li>
						<a href="forms-wysiwyg.html">
							<span>Editors</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="tables-main.html">
					<i class="entypo-window"></i>
					<span>Tables</span>
				</a>
				<ul>
					<li>
						<a href="tables-main.html">
							<span>Basic Tables</span>
						</a>
					</li>
					<li>
						<a href="tables-datatable.html">
							<span>Data Tables</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="extra-icons.html">
					<i class="entypo-bag"></i>
					<span>Extra</span>
					<span class="badge badge-info badge-roundless">New Items</span>
				</a>
				<ul>
					<li>
						<a href="extra-icons.html">
							<span>Icons</span>
							<span class="badge badge-success">3</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons.html">
									<span>Font Awesome</span>
								</a>
							</li>
							<li>
								<a href="extra-icons-entypo.html">
									<span>Entypo</span>
								</a>
							</li>
							<li>
								<a href="extra-icons-glyphicons.html">
									<span>Glyph Icons</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-portlets.html">
							<span>Portlets</span>
						</a>
					</li>
					<li>
						<a href="extra-google-maps.html">
							<span>Maps</span>
						</a>
						<ul>
							<li>
								<a href="extra-google-maps.html">
									<span>Google Maps</span>
								</a>
							</li>
							<li>
								<a href="extra-vector-maps.html">
									<span>Vector Maps</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-chat-api.html">
							<span>Chat API</span>
						</a>
					</li>
					<li>
						<a href="extra-calendar.html">
							<span>Calendar</span>
						</a>
					</li>
					<li>
						<a href="extra-notes.html">
							<span>Notes</span>
						</a>
					</li>
					<li>
						<a href="extra-lockscreen.html">
							<span>Lockscreen</span>
						</a>
					</li>
					<li>
						<a href="extra-login.html">
							<span>Login</span>
						</a>
					</li>
					<li>
						<a href="extra-register.html">
							<span>Register</span>
						</a>
					</li>
					<li>
						<a href="extra-invoice.html">
							<span>Invoice</span>
						</a>
					</li>
					<li>
						<a href="extra-members.html">
							<span>Members</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-gallery.html">
							<span>Gallery</span>
						</a>
						<ul>
							<li>
								<a href="extra-gallery.html">
									<span>Albums</span>
								</a>
							</li>
							<li>
								<a href="extra-gallery-single.html">
									<span>Single Album</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-profile.html">
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="extra-404.html">
							<span>404 Page</span>
						</a>
					</li>
					<li>
						<a href="extra-blank-page.html">
							<span>Blank Page</span>
						</a>
					</li>
					<li>
						<a href="extra-timeline.html">
							<span>Timeline</span>
						</a>
					</li>
					<li>
						<a href="extra-comments.html">
							<span>Comments</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-timeline-centered.html">
							<span>Timeline Centered</span>
						</a>
					</li>
					<li>
						<a href="extra-tocify.html">
							<span>Tocify</span>
						</a>
					</li>
					<li>
						<a href="ui-notifications.html">
							<span>Notifications</span>
						</a>
					</li>
					<li>
						<a href="extra-new-post.html">
							<span>New Post</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-settings.html">
							<span>Settings</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-scrollbox.html">
							<span>Scrollbox</span>
						</a>
					</li>
					<li>
						<a href="extra-image-crop.html">
							<span>Image Crop</span>
						</a>
					</li>
					<li>
						<a href="extra-search.html">
							<span>Search Page</span>
						</a>
					</li>
					<li>
						<a href="extra-language-selector.html">
							<span>Language Selector</span>
						</a>
					</li>
					<li>
						<a href="extra-nestable.html">
							<span>Nestable Lists</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-file-tree.html">
							<span>File Tree</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
					<li>
						<a href="extra-load-progress.html">
							<span>Load Progress</span>
							<span class="badge badge-secondary badge-roundless">New</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="charts.html">
					<i class="entypo-chart-bar"></i>
					<span>Charts</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="entypo-flow-tree"></i>
					<span>Menu Levels</span>
				</a>
				<ul>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.1</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.2</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Menu Level 1.3</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.1</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.2</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-cascade"></i>
											<span>Menu Level 3.1</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-branch"></i>
													<span>Menu Level 4.1</span>
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-cascade"></i>
											<span>Menu Level 3.2</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-parallel"></i>
									<span>Menu Level 2.3</span>
								</a>
							</li>
						</ul>
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
					<img src="assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
					Art Ramadani
				</a>
				
				<ul class="dropdown-menu">
					
					<!-- Reverse Caret -->
					<li class="caret"></li>
					
					<!-- Profile sub-links -->
					<li>
						<a href="extra-timeline.html">
							<i class="entypo-user"></i>
							Edit Profile
						</a>
					</li>
					
					<li>
						<a href="mailbox.html">
							<i class="entypo-mail"></i>
							Inbox
						</a>
					</li>
					
					<li>
						<a href="extra-calendar.html">
							<i class="entypo-calendar"></i>
							Calendar
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-clipboard"></i>
							Tasks
						</a>
					</li>
				</ul>
			</li>
		
		</ul>
				
		<ul class="user-info pull-left pull-right-xs pull-none-xsm">
			
			<!-- Raw Notifications -->
			<li class="notifications dropdown">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-attention"></i>
					<span class="badge badge-info">6</span>
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
		
		<li class="unread notification-secondary">
			<a href="#">
				<i class="entypo-heart pull-right"></i>
				
				<span class="line">
					<strong>Someone special liked this</strong>
				</span>
				
				<span class="line small">
					2 minutes ago
				</span>
			</a>
		</li>
		
		<li class="notification-primary">
			<a href="#">
				<i class="entypo-user pull-right"></i>
				
				<span class="line">
					<strong>Privacy settings have been changed</strong>
				</span>
				
				<span class="line small">
					3 hours ago
				</span>
			</a>
		</li>
		
		<li class="notification-danger">
			<a href="#">
				<i class="entypo-cancel-circled pull-right"></i>
				
				<span class="line">
					John cancelled the event
				</span>
				
				<span class="line small">
					9 hours ago
				</span>
			</a>
		</li>
		
		<li class="notification-info">
			<a href="#">
				<i class="entypo-info pull-right"></i>
				
				<span class="line">
					The server is status is stable
				</span>
				
				<span class="line small">
					yesterday at 10:30am
				</span>
			</a>
		</li>
		
		<li class="notification-warning">
			<a href="#">
				<i class="entypo-rss pull-right"></i>
				
				<span class="line">
					New comments waiting approval
				</span>
				
				<span class="line small">
					last week
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="#">View all notifications</a>
</li>				</ul>
				
			</li>
			
			<!-- Message Notifications -->
			<li class="notifications dropdown">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-mail"></i>
					<span class="badge badge-secondary">10</span>
				</a>
				
				<ul class="dropdown-menu">
					<li>
	<ul class="dropdown-menu-list scroller">
		<li class="active">
			<a href="#">
				<span class="image pull-right">
					<img src="assets/images/thumb-1.png" alt="" class="img-circle" />
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
		
		<li class="active">
			<a href="#">
				<span class="image pull-right">
					<img src="assets/images/thumb-2.png" alt="" class="img-circle" />
				</span>
				
				<span class="line">
					<strong>Salma Nyberg</strong>
					- 2 days ago
				</span>
				
				<span class="line desc small">
					Oh he decisively impression attachment friendship so if everything. 
				</span>
			</a>
		</li>
		
		<li>
			<a href="#">
				<span class="image pull-right">
					<img src="assets/images/thumb-3.png" alt="" class="img-circle" />
				</span>
				
				<span class="line">
					Hayden Cartwright
					- a week ago
				</span>
				
				<span class="line desc small">
					Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
				</span>
			</a>
		</li>
		
		<li>
			<a href="#">
				<span class="image pull-right">
					<img src="assets/images/thumb-4.png" alt="" class="img-circle" />
				</span>
				
				<span class="line">
					Sandra Eberhardt
					- 16 days ago
				</span>
				
				<span class="line desc small">
					On so attention necessary at by provision otherwise existence direction.
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="mailbox.html">All Messages</a>
</li>				</ul>
				
			</li>
			
			<!-- Task Notifications -->
			<li class="notifications dropdown">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-list"></i>
					<span class="badge badge-warning">1</span>
				</a>
				
				<ul class="dropdown-menu">
					<li class="top">
	<p>You have 6 pending tasks</p>
</li>

<li>
	<ul class="dropdown-menu-list scroller">
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Procurement</span>
					<span class="percent">27%</span>
				</span>
			
				<span class="progress">
					<span style="width: 27%;" class="progress-bar progress-bar-success">
						<span class="sr-only">27% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">App Development</span>
					<span class="percent">83%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 83%;" class="progress-bar progress-bar-danger">
						<span class="sr-only">83% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">HTML Slicing</span>
					<span class="percent">91%</span>
				</span>
				
				<span class="progress">
					<span style="width: 91%;" class="progress-bar progress-bar-success">
						<span class="sr-only">91% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Database Repair</span>
					<span class="percent">12%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 12%;" class="progress-bar progress-bar-warning">
						<span class="sr-only">12% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Backup Create Progress</span>
					<span class="percent">54%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 54%;" class="progress-bar progress-bar-info">
						<span class="sr-only">54% Complete</span>
					</span>
				</span>
			</a>
		</li>
		<li>
			<a href="#">
				<span class="task">
					<span class="desc">Upgrade Progress</span>
					<span class="percent">17%</span>
				</span>
				
				<span class="progress progress-striped">
					<span style="width: 17%;" class="progress-bar progress-bar-important">
						<span class="sr-only">17% Complete</span>
					</span>
				</span>
			</a>
		</li>
	</ul>
</li>

<li class="external">
	<a href="#">See all tasks</a>
</li>				</ul>
				
			</li>
		
		</ul>
	
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			
			<!-- Language Selector -->			<li class="dropdown language-selector">
				
				Language: &nbsp;
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
					<img src="assets/images/flag-uk.png" />
				</a>
				
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="#">
							<img src="assets/images/flag-de.png" />
							<span>Deutsch</span>
						</a>
					</li>
					<li class="active">
						<a href="#">
							<img src="assets/images/flag-uk.png" />
							<span>English</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="assets/images/flag-fr.png" />
							<span>François</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="assets/images/flag-al.png" />
							<span>Shqip</span>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="assets/images/flag-es.png" />
							<span>Español</span>
						</a>
					</li>
				</ul>
				
			</li>
			
			<li class="sep"></li>
			
						
			<li>
				<a href="#" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
					<i class="entypo-chat"></i>
					Chat
					
					<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
				</a>
			</li>
			
			<li class="sep"></li>
			
			<li>
				<a href="extra-login.html">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
		
	</div>
	
</div>

<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.html"><i class="entypo-home"></i>Home</a>
			</li>
					<li>
			
							<a href="forms-main.html">Forms</a>
					</li>
				<li class="active">
			
							<strong>Advanced Plugins</strong>
					</li>
					</ol>
			
<h2>Advanced Form Elements</h2>
<br />


<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Multi Select Box
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Multi-Select List</label>
						
						<div class="col-sm-7">
							<select multiple="multiple" name="my-select[]" class="form-control multi-select">
								<option value="elem_1">elem 1</option>
								<option value="elem_2">elem 2</option>
								<option value="elem_3">elem 3</option>
								<option value="elem_4">elem 4</option>
								<option value="elem_5">elem 5</option>
								<option value="elem_6">elem 6</option>
								<option value="elem_7">elem 7</option>
								<option value="elem_8" selected>Selected element</option>
								<option value="elem_9" selected>Selected element 2</option>
							</select>
						</div>
					</div>
					
				</form>
			
			</div>
		
		</div>
		
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Date Range Picker
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
			
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Range Picker</label>
						
						<div class="col-sm-5">
							
							<input type="text" class="form-control daterange" />
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Selected Date Range</label>
						
						<div class="col-sm-5">
							
							<input type="text" class="form-control daterange" data-format="YYYY-MM-DD" data-start-date="2013-08-02" data-end-date="2013-08-15" data-separator="," />
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Disabled Date Range</label>
						
						<div class="col-sm-5">
							
							<input type="text" class="form-control daterange" data-min-date="03-22-2014" data-max-date="04-02-2014" />
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Range Callback</label>
						
						<div class="col-sm-5">
							
							<input type="text" class="form-control daterange" data-callback />
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Range with Timepicker</label>
						
						<div class="col-sm-5">
							
							<input type="text" class="form-control daterange" data-time-picker="true" data-time-picker-increment="5" data-format="MM/DD/YYYY h:mm A" />
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Range Inline</label>
						
						<div class="col-sm-5">
							
														<div class="daterange daterange-inline" data-format="MMMM D, YYYY" data-start-date="March 13, 2014" data-end-date="March 27, 2014">
								<i class="entypo-calendar"></i>
								<span>March 13, 2014 - March 27, 2014</span>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Range w/ Predefined Ranges</label>
						
						<div class="col-sm-5">
							
														<div class="daterange daterange-inline add-ranges" data-format="MMMM D, YYYY" data-start-date="March 18, 2014" data-end-date="April 3, 2014">
								<i class="entypo-calendar"></i>
								<span>March 18, 2014 - April 3, 2014</span>
							</div>
							
						</div>
					</div>
					
				</form>
			
			</div>
			
		</div>
	
	</div>
</div>





<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Date Picker
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
			
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Picker (inline)</label>
						
						<div class="col-sm-5">
							
							<div class="datepicker"></div><!-- add class "no-border" to remove the outline it -->
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Picker (popup)</label>
						
						<div class="col-sm-3">
							<div class="input-group">
								<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
								
								<div class="input-group-addon">
									<a href="#"><i class="entypo-calendar"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Picker (start/end date)</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control datepicker" data-start-date="-2d" data-end-date="+1w">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Date Picker (disabled days Mo, We)</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control datepicker" data-disabled-days="1,3">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">2 Clicks Date Select</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control datepicker" data-start-view="1">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">3 Clicks Date Select</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control datepicker" data-start-view="2">
						</div>
					</div>
					
				</form>
				
			</div>
			
		</div>
	
	</div>
</div>




<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Time Picker
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Time Picker (Simple)</label>
						
						<div class="col-sm-2">
							<div class="input-group minimal">
								<div class="input-group-addon">
									<i class="entypo-clock"></i>
								</div>
								<input type="text" class="form-control timepicker" />
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Time Picker (Dropdown)</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control timepicker" data-template="dropdown" data-show-seconds="true" data-default-time="11:25 AM" data-show-meridian="true" data-minute-step="5" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Time Picker (input-group)</label>
						
						<div class="col-sm-2">
							<div class="input-group">
								<input type="text" class="form-control timepicker" data-template="dropdown" data-show-seconds="true" data-default-time="11:25 AM" data-show-meridian="true" data-minute-step="5" data-second-step="5" />
								
								<div class="input-group-addon">
									<a href="#"><i class="entypo-clock"></i></a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Time &amp; Date Picker</label>
						
						<div class="col-sm-3">
							
							<div class="date-and-time">
								<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
								<input type="text" class="form-control timepicker" data-template="dropdown" data-show-seconds="true" data-default-time="11:25 AM" data-show-meridian="true" data-minute-step="5" data-second-step="5" />
							</div>
						</div>
					</div>
				</form>
				
			</div>
			
		</div>
	
	</div>
</div>





<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Color Picker
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Color Picker (Simple)</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control colorpicker" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Color Picker (RGBA)</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control colorpicker" data-format="rgba" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Color Picker (Horizontal)</label>
						
						<div class="col-sm-3">
							<input type="text" class="form-control colorpicker" data-horizontal="true" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Color Picker Droplet</label>
						
						<div class="col-sm-2">
							<div class="input-group">
								<div class="input-group-addon">
									<a href="#"><i class="entypo-droplet"></i></a>
								</div>
								
								<input type="text" class="form-control colorpicker" data-format="hex" />
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Color Picker Color Preview</label>
						
						<div class="col-sm-2">
							<div class="input-group">
								<input type="text" class="form-control colorpicker" data-format="hex" value="#5a3d3d" />
								
								<div class="input-group-addon">
									<i class="color-preview"></i>
								</div>
							</div>
						</div>
					</div>
				
				</form>
				
			</div>
			
		</div>
	
	</div>
</div>





<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Selectbox Replacement
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<strong>Select2 Plugin</strong>
					<br />
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Select2</label>
						
						<div class="col-sm-5">
							
							<select name="test" class="select2" data-allow-clear="true" data-placeholder="Select one city...">
								<option></option>
								<optgroup label="United States">
									<option value="1">Alabama</option>
									<option value="2">Boston</option>
									<option value="3">Ohaio</option>
									<option value="4">New York</option>
									<option value="5">Washington</option>
								</optgroup>
							</select>
							
						</div>
					</div>
				
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Select2 Multiple</label>
						
						<div class="col-sm-5">
							
							<select name="test" class="select2" multiple>
								<option value="3" >Ohaio</option>
								<option value="2" >Boston</option>
								<option value="5" >Washington</option>
								<option value="1" >Alabama</option>
								<option value="4" >New York</option>
								<option value="12" >Bostons</option>
								<option value="11" >Alabama</option>
								<option value="13" >Ohaio</option>
								<option value="14" >New York</option>
								<option value="15" >Washington II</option>
							</select>
							
						</div>
					</div>
					
				</form>
				
			</div>
			
			<div class="panel-body">	
			
				<form role="form" class="form-horizontal form-groups-bordered">	
					
					<strong>SelectBoxIt Plugin</strong>
					<br />
					
					<div class="form-group">
						<label class="col-sm-3 control-label">SelectBoxIt</label>
						
						<div class="col-sm-5">
							
							<select name="test" class="selectboxit">
								<optgroup label="United States">
									<option value="1">Alabama</option>
									<option value="2">Boston</option>
									<option value="3">Ohaio</option>
									<option value="4">New York</option>
									<option value="5">Washington</option>
								</optgroup>
							</select>
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">SelectBoxIt (No first-option)</label>
						
						<div class="col-sm-5">
							
							<select name="test" class="selectboxit" data-first-option="false">
								<option>Select city</option>
								<option value="1">Alabama</option>
								<option value="2">Boston</option>
								<option value="3">Ohaio</option>
								<option value="4">New York</option>
								<option value="5">Washington</option>
							</select>
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">SelectBoxIt (native)</label>
						
						<div class="col-sm-5">
							
							<select name="test" class="selectboxit" data-native="true" data-text="Select city (+attribute placeholder)">
								<option value="1">Alabama</option>
								<option value="2">Boston</option>
								<option value="3">Ohaio</option>
								<option value="4">New York</option>
								<option value="5">Washington</option>
							</select>
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">SelectBoxIt (Icons)</label>
						
						<div class="col-sm-5">
							
							<select name="test" class="selectboxit">
								<option value="SelectBoxIt themes:" data-iconurl="http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-5/256/themes-icon.png">SelectBoxIt themes:</option>
								<option value="Twitter Bootstrap" data-iconurl="http://blog.getbootstrap.com/public/ico/apple-touch-icon-144-precomposed.png">Twitter Bootstrap</option>
								<option value="jQuery UI" data-iconurl="http://c747925.r25.cf2.rackcdn.com/blog/wp-content/uploads/2010/09/jquery-ui-logo.png">jQuery UI</option>
								<option value="jQuery Mobile" data-iconurl="https://twimg0-a.akamaihd.net/profile_images/2633978789/80508321d8ce3ba8aa264380bb7eba33.png">jQuery Mobile</option>
							</select>
							
						</div>
					</div>
				
				</form>	
				
			</div>
			
		</div>
	
	</div>
</div>





<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Tags Input
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
			
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Tags Input</label>
						
						<div class="col-sm-5">
							
							<input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" class="form-control tagsinput" />
							
						</div>
					</div>
				
				</form>
			
			</div>
			
		</div>
	
	</div>
</div>





<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Typeahead Auto Complete
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered">
				
					<div class="form-group">
						<label class="col-sm-3 control-label">Autosuggest (Local)</label>
						
						<div class="col-sm-5">
							<div class="input-group">
								<span class="input-group-addon"><i class="entypo-user"></i></span>
								<input type="text" name="typeahead_local" class="form-control typeahead" data-local="arlind,art,laborator,simon,dean,frank,quintin,walker,emily,jonnatan,huston,miley,kate,lisa,tim" />
							</div>
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Autosuggest (Pre-fetched)</label>
						
						<div class="col-sm-5">
							<div class="input-group">
								<input type="text" name="typeahead_prefetch" class="form-control typeahead" data-prefetch="data/countries.json" placeholder="Countries" />
								<span class="input-group-addon"><i class="entypo-globe"></i></span>
							</div>
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Autosuggest (Remote-Query)</label>
						
						<div class="col-sm-5">
							<input type="text" name="typeahead_remote" class="form-control typeahead" data-remote="data/autosuggest-remote.php?q=%QUERY" placeholder="Randomized Output" />
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Autosuggest (Custom Structure)</label>
						
						<div class="col-sm-5">
							<input type="text" name="typeahead_custom" class="form-control typeahead" data-remote="data/autosuggest-custom.php?q=%QUERY" data-template="<div class='thumb-entry'><span class='image'><img src='{{img}}' width=40 height=40 /></span><span class='text'><strong>{{value}}</strong><em>{{desc}}</em></span></div>" placeholder="Thumbnails Included" />
						</div>
					</div>
					
				</form>
				
			</div>
			
		</div>
	
	</div>
</div>


<br />

<div class="row">
	<div class="col-md-12">
		<h2>
			<span class="label label-warning">New in 1.1.4</span> iCheck - Custom checkbox and radio buttons
		</h2>
	</div>
</div>

<br />

<!-- iCheck - Custom checkbox and radio buttons --><div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					iCheck Examples
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<div class="row">
					<div class="col-sm-6">
						
						<ul class="icheck-list">
						    <li>
						        <input tabindex="5" type="checkbox" class="icheck" id="minimal-checkbox-1">
						        <label for="minimal-checkbox-1">Checkbox 1</label>
						    </li>
						    <li>
						        <input tabindex="6" type="checkbox" class="icheck" id="minimal-checkbox-2" checked>
						        <label for="minimal-checkbox-2">Checkbox 2</label>
						    </li>
						    <li>
						        <input type="checkbox" class="icheck" id="minimal-checkbox-disabled" disabled>
						        <label for="minimal-checkbox-disabled">Disabled</label>
						    </li>
						    <li>
						        <input type="checkbox" class="icheck" id="minimal-checkbox-disabled-checked" checked disabled>
						        <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
						    </li>
						</ul>
						
					</div>
					
					<div class="col-sm-6">
						<ul class="icheck-list">
						    <li>
						        <input tabindex="7" class="icheck" type="radio" id="minimal-radio-1" name="minimal-radio">
						        <label for="minimal-radio-1">Radio button 1</label>
						    </li>
						    <li>
						        <input tabindex="8" class="icheck" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
						        <label for="minimal-radio-2">Radio button 2</label>
						    </li>
						    <li>
						        <input type="radio" class="icheck" id="minimal-radio-disabled" disabled>
						        <label for="minimal-radio-disabled">Disabled</label>
						    </li>
						    <li>
						        <input type="radio" class="icheck" id="minimal-radio-disabled-checked" checked disabled>
						        <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
						    </li>
						</ul>
						
					</div>
				</div>
				
			</div>
			
			<div class="panel-body">
				
				<div class="row">
					<div class="col-md-12">
						<strong>Skins &amp; Styles</strong>
						<br />
						<br />
					</div>
					
					<div class="col-sm-6">
						
						<ul class="icheck-list">
						    <li>
						        <input tabindex="5" type="checkbox" class="icheck-2" id="minimal-checkbox-1-2">
						        <label for="minimal-checkbox-1-2">Checkbox 1</label>
						    </li>
						    <li>
						        <input tabindex="6" type="checkbox" class="icheck-2" id="minimal-checkbox-2-2" checked>
						        <label for="minimal-checkbox-2-2">Checkbox 2</label>
						    </li>
						    <li>
						        <input type="checkbox" class="icheck-2" id="minimal-checkbox-disabled-2" disabled>
						        <label for="minimal-checkbox-disabled-2">Disabled</label>
						    </li>
						    <li>
						        <input type="checkbox" class="icheck-2" id="minimal-checkbox-disabled-checked-2" checked disabled>
						        <label for="minimal-checkbox-disabled-checked-2">Disabled &amp; checked</label>
						    </li>
						</ul>
						
					</div>
					
					<div class="col-sm-6">
						
						<ul class="icheck-list">
						    <li>
						        <input class="icheck-2" type="radio" id="minimal-radio-1-2" name="minimal-radio">
						        <label for="minimal-radio-1-2">Radio button 1</label>
						    </li>
						    <li>
						        <input tabindex="8" class="icheck-2" type="radio" id="minimal-radio-2-2" name="minimal-radio" checked>
						        <label for="minimal-radio-2-2">Radio button 2</label>
						    </li>
						    <li>
						        <input type="radio" class="icheck-2" id="minimal-radio-disabled-2-2" disabled>
						        <label for="minimal-radio-disabled-2-2">Disabled</label>
						    </li>
						    <li>
						        <input type="radio" class="icheck-2" id="minimal-radio-disabled-checked-2" checked disabled>
						        <label for="minimal-radio-disabled-checked-2">Disabled &amp; checked</label>
						    </li>
						</ul>
						
					</div>
				</div>
				
				<div class="row">
				
					<div class="col-md-6">
						<br />
						<br />
						<strong>Select Skin</strong>
						
						<div class="icheck-skins">
							<a href="#" data-color-class=""></a>
							<a href="#" data-color-class="red"></a>
							<a href="#" data-color-class="green"></a>
							<a href="#" class="current" data-color-class="blue"></a>
							<a href="#" data-color-class="aero"></a>
							<a href="#" data-color-class="grey"></a>
							<a href="#" data-color-class="orange"></a>
							<a href="#" data-color-class="yellow"></a>
							<a href="#" data-color-class="pink"></a>
							<a href="#" data-color-class="purple"></a>
						</div>
						
					</div>
					
					<div class="col-md-6">
						
						<br />
						<br />
						<strong>Select Style</strong>
						<br />
						
						<div class="row">
							<div class="col-sm-6">
								<select id="icheck-style" class="selectboxit">
									<option value="minimal">Minimal</option>
									<option value="square">Square</option>
									<option value="flat">Flat</option>
									<option value="futurico">Futurico</option>
									<option value="polaris">Polaris</option>
								</select>
							</div>
						</div>
						
					</div>
				
				</div>
			
			</div>
			
			<div class="panel-body">
				<a href="forms-icheck.html" class="btn btn-default">
					More iCheck Examples
					<i class="entypo-right"></i> 
				</a>
			</div>
		</div>
		
	</div>
</div>


<script type="text/javascript">
jQuery(document).ready(function($)
{
	$('input.icheck').iCheck({
		checkboxClass: 'icheckbox_minimal',
		radioClass: 'iradio_minimal'
	});
	
	$('input.icheck-2').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue'
	});
});


jQuery(document).ready(function($)
{
	var icheck_skins = $(".icheck-skins a");
	
	icheck_skins.click(function(ev)
	{
		ev.preventDefault();
		
		icheck_skins.removeClass('current');
		$(this).addClass('current');
		
		updateiCheckSkinandStyle();
	});
	
	$("#icheck-style").change(updateiCheckSkinandStyle);
});
	
function updateiCheckSkinandStyle()
{
	var skin = $(".icheck-skins a.current").data('color-class'),
		style = $("#icheck-style").val();
	
	var cb_class = 'icheckbox_' + style + (skin.length ? ("-" + skin) : ''),
		rd_class = 'iradio_' + style + (skin.length ? ("-" + skin) : '');
	
	if(style == 'futurico' || style == 'polaris')
	{
		cb_class = cb_class.replace('-' + skin, '');
		rd_class = rd_class.replace('-' + skin, '');
	}
	
	$('input.icheck-2').iCheck('destroy');
	$('input.icheck-2').iCheck({
		checkboxClass: cb_class,
		radioClass: rd_class
	});
}
</script>




<br />

<div class="row">
	<div class="col-md-12">
		<h2>
			<span class="label label-warning">New in 1.1.4</span> Input Spinner
		</h2>
	</div>
</div>

<br />

<!-- Implementation of Spinner Input --><div class="row" id="spinners">
	<div class="col-md-12">
		
		<div class="panel panel-primary" data-collapsed="0">
		
			<div class="panel-heading">
				<div class="panel-title">
					Spinner
				</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			
			<div class="panel-body">
				
				<form role="form" class="form-horizontal form-groups-bordered">
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Spinner</label>
						
						<div class="col-sm-5">
							
							<!-- Spinner Markup -->							<div class="input-spinner">
								<button type="button" class="btn btn-default">-</button>
								<input type="text" class="form-control size-1" value="1" />
								<button type="button" class="btn btn-default">+</button>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Spinner Min-Max Values</label>
						
						<div class="col-sm-5">
						
							<div class="input-spinner">
								<button type="button" class="btn btn-default">-</button>
								<input type="text" class="form-control size-1" value="1" data-min="-5" data-max="5" />
								<button type="button" class="btn btn-default">+</button>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Spinner Width</label>
						
						<div class="col-sm-5">
							
							<div class="input-spinner">
								<button type="button" class="btn btn-default" data-step="-3">-</button>
								<input type="text" class="form-control size-2" value="0" />
								<button type="button" class="btn btn-default" data-step="3">+</button>
							</div>
							
							<br />
							
							<div class="input-spinner">
								<button type="button" class="btn btn-default" data-step="-2">-</button>
								<input type="text" class="form-control size-3" value="-1" />
								<button type="button" class="btn btn-default" data-step="1">+</button>
							</div>
							
							<br />
							
							<div class="input-spinner">
								<button type="button" class="btn btn-default" data-step="-5">-</button>
								<input type="text" class="form-control size-4" value="5" />
								<button type="button" class="btn btn-default" data-step="10">+</button>
							</div>
							
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Spinner Styles &amp; Sizes</label>
						
						<div class="col-sm-5">
						
							<div class="input-spinner">
								<button type="button" class="btn btn-success btn-sm">-</button>
								<input type="text" class="form-control size-1 input-sm" value="1" />
								<button type="button" class="btn btn-success btn-sm">+</button>
							</div>
						
							<br />
						
							<div class="input-spinner">
								<button type="button" class="btn btn-info">-</button>
								<input type="text" class="form-control size-1" value="2" />
								<button type="button" class="btn btn-info">+</button>
							</div>
							
							<br />
							
							<div class="input-spinner">
								<button type="button" class="btn btn-danger btn-lg">-</button>
								<input type="text" class="form-control size-1 input-lg" value="3" />
								<button type="button" class="btn btn-danger btn-lg">+</button>
							</div>
							
						</div>
					</div>
				
				</form>
				
			</div>
		
		</div>
	
	</div>
</div><!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
	
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
	<div class="chat-inner">
	
		
		<h2 class="chat-header">
			<a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>
			
			<i class="entypo-users"></i>
			Chat
			<span class="badge badge-success is-hidden">0</span>
		</h2>
		
		
		<div class="chat-group" id="group-1">
			<strong>Favorites</strong>
			
			<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
		</div>
		
		
		<div class="chat-group" id="group-2">
			<strong>Work</strong>
			
			<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
			<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
		</div>
		
		
		<div class="chat-group" id="group-3">
			<strong>Social</strong>
			
			<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
		</div>
	
	</div>
	
	<!-- conversation template -->
	<div class="chat-conversation">
		
		<div class="conversation-header">
			<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
			
			<span class="user-status"></span>
			<span class="display-name"></span> 
			<small></small>
		</div>
		
		<ul class="conversation-body">	
		</ul>
		
		<div class="chat-textarea">
			<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
		</div>
		
	</div>
	
</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">
	<li>
		<span class="user">Art Ramadani</span>
		<p>Are you here?</p>
		<span class="time">09:00</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>This message is pre-queued.</p>
		<span class="time">09:25</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>Whohoo!</p>
		<span class="time">09:26</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Catherine J. Watkins</span>
		<p>Do you like it?</p>
		<span class="time">09:27</span>
	</li>
</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>I am going out.</p>
		<span class="time">08:21</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>Call me when you see this message.</p>
		<span class="time">08:27</span>
	</li>
</ul>	
	</div>



	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/icheck/skins/minimal/_all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/icheck/skins/square/_all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/icheck/skins/flat/_all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/icheck/skins/futurico/futurico.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/icheck/skins/polaris/polaris.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-api.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/typeahead.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.multi-select.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/icheck/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/neon-demo.js"></script>

</body>
</html>