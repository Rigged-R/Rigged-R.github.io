<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="style.css">
	</head>
<body>

		<div class="reg">
			<form method="POST" action="">
				<div class="form-group">

				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required="required"/>
				</div>
                <div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" maxlength="12" name="password" required="required"/>
				</div>
                <div class="form-group">
					<label>Email <span id="XD">asd</span></label>
					<input type="email" class="form-control" name="email" required="required"/>
				</div>
				<p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
				<button class="btn btn-primary" id="register" name="register">Register</button>
				<a href="index.html">Already have an account!</a>
			</form>
		</div>
		<div class="reg">
		<?php
         include 'register.php'
         ?>
		</div>
	</div>
<script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>	
</body>
</html>