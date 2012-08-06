<? php doctype("html5"); ?>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Teacher's Substitution Admin - Login</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/stylesheets/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>/stylesheets/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>/stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>/stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url()?>/stylesheets/login.css" type="text/css" media="screen" title="no title" />
	<!-- END CSS -->
</head>

<body>

<div id="login">
	<div class=""  style="float:left">
		<h1>Dashboard</h1>
	</div>

	<div class=""  style="float:left">
		<div id="login_panel">
		<form action="<?php echo base_url();?>index.php/substitution" method="post" accept-charset="utf-8">		
			<div class="login_fields">
				<div class="field">
					<label for="email">Username</label>
					<input type="text" name="email" value="" id="email" tabindex="1" placeholder="email@example.com" />		
				</div>
				
				<div class="field">
					<label for="password">Password <small></small></label>
					<input type="password" name="password" value="" id="password" tabindex="2" placeholder="password" />			
				</div>
			</div> <!-- .login_fields -->
			
			<div class="login_actions">
				<button type="submit" class="btn btn-primary" tabindex="3">Login</button>
			</div>
		</form>
		</div> <!-- #login_panel -->		

	</div>
	
	
</div> <!-- #login -->


<script src="<?php echo base_url()?>/javascripts/all.js"></script>
</body>
</html>