<!DOCTYPE html>
<html lang="en">


<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
			<style type="text/css">
			body { background: url(backend/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2 style="color: blue; text-align: center;">Login to your account</h2>
					<form class="form-horizontal" style="text-align: center; color: maroon; font-size: 20px;" action="{{'/admin_login_action'}}" method="post">
						<fieldset>
							{{csrf_field()}}
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<p>Admin Email:</p>
								<input class="input-large span10" style="font-size: 20px;" name="admin_email" id="admin_email" type="text" placeholder="Type email here"/>
							</div>
							<div class="clearfix"></div>
								<p>Admin Password:</p>
							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span15" style="font-size: 20px;" name="admin_password" id="admin_password" type="password" placeholder="Type password here"/>
							</div>
							<div class="clearfix"></div>
							<br>
							<p style="color: red"><?php $b= Session::get('message'); echo $b;Session::put('message',NULL);?></p>
							<div class="button-login">	
								<button type="submit" style="font-size: 20px;" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>

				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->

	
</body>

</html>
