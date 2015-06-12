<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title></title>
	

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
<body class="page-body login-page login-form-fall" data-url="#">


<!-- This is needed when you send requests via Ajax --><script type="text/javascript">
var baseurl = '<?php echo base_url(); ?>';
</script>

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="#" class="logo">
				<img src="${assets}/images/logo.png?v1.0.0" width="120" alt="" />
			</a>
			
			<p class="description">Web Administrator Power by TH SCTIPT</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Check Username and password.</p>
			</div>
			
			<form method="post" role="form" id="form_login">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>
				
				<!-- Implemented in v1.1.4 -->				<div class="form-group">
					<em>- or -</em>
				</div>
				
				
					
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="extra-forgot-password.html" class="link">Forgot your password?</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
		</div>
		
	</div>
	
</div>


	<!-- Bottom Scripts -->
	<script src="${assets}js/gsap/main-gsap.js"></script>
	<script src="${assets}js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="${assets}js/bootstrap.js"></script>
	<script src="${assets}js/joinable.js"></script>
	<script src="${assets}js/resizeable.js"></script>
	<script src="${assets}js/neon-api.js"></script>
	<script src="${assets}js/jquery.validate.min.js"></script>
	<script src="${assets}js/neon-login.js"></script>
	<script src="${assets}js/neon-custom.js"></script>
	<script src="${assets}js/neon-demo.js"></script>

</body>
</html>