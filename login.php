<!DOCTYPE HTML>


<html>
	
<head>
	<title>Login </title>
		<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
		

		
<link rel="stylesheet" href="assets/css/mainnn.css" />
	
</head>

<body>

	
	<!-- Header -->
			
<header id="header">
				
<div class="inner">
					
<a href="index.php" class="logo">Aqua Loom</a>

					
<nav id="nav">
						
<a href="index.php">Home</a>
						
<a href="login.php">login</a>
						
<a href="#####">contact us</a>
					
</nav>
				
</div>
			
</header>
			
<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

	
	<!-- Main -->
			

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" action="LOGINVIEW.php" method="POST">

				<div>
						<div class="container-login100-form-btn">	
							
					</div>
			
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Username is required">
							<span class="label-input100">username</span>
							<input class="input100" type="text" value="" name="username" placeholder="Enter username">
							<span class="focus-input100"></span>
						</div>

					
					<div>
						<div class="container-login100-form-btn">	
							<br>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" value="" name="pass" placeholder="Enter password">
							<span class="focus-input100"></span>
						</div>

						
	

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

			</section>


<?php
include_once 'connection.php';


if(isset($_POST['btn']))
 {
	 $Name=$_POST['username'];
      $OTP=$_POST['pass'];
	  
	  
	  
      
	  $s="select AXE_id,AE_id,Password from ae where Password=OTP";
	  mysqli_query($conn, $s);
	  
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row['AE_id']; ?></td> 
            <td><?php echo $row['AXE_id']; ?></td> 
           
        </tr>
        <?php
    }
}
}
?>
        
</BODY>    
</HTML>