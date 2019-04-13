<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
	<body> 
		<div class="container" style="margin-top:10%">
			<div class="col-md-4 offset-md-4">
				<form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
				
				
					<h2 class="form-signin-heading">Please sign in</h2>
					<?php echo $this->session->flashdata('msg');?>
					<label for="username" class="sr-only">Username</label>
					<input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
					<label for="password" class="sr-only">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required>
					<div class="checkbox">
						<label>
						<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				</form>
			</div>
		</div> <!-- /container -->
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</html>