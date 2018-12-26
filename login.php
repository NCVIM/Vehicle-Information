<!DOCTYPE HTML>
<?php
session_start();

include_once 'connection.php';

if( isset( $_POST['submit'] )){

	$Name=$_POST['username'];
	$PS=$_POST['pass'];
//	  $_SESSION['regName'] = $Name;

	$flag=0;
    //$conn=mysqli_connect("localhost","root","Y91zmCIUrAQBB94I","water_authority");

	$new="select mob,pass from log where mob=$Name AND pass=$PS ";

	$w=mysqli_query($conn, $new);
	while ($row = mysqli_fetch_array($w)) {



		if(($row['mob']==$Name)&&($row['pass']==$PS)) {
			$flag=1;
		}


	}



	If($flag==1)  {


		$s="select * from log where mob=$Name ";

		$k=mysqli_query($conn, $s);
		$num=mysqli_num_rows($k);

		If ($num >= 0)
		{


    //$a=mysqli_query("select AE_Name,AE_id from ae");
			while ($row = mysqli_fetch_array($k)) {


      // echo $row['emp_name'];

				$_SESSION['name'] =  $row['emp_name'];



				$_SESSION['type'] =  $row['O_Id'];



				switch ($row['O_Id']) {
					case '0':
					echo "<script type='text/javascript'> 
					window.location.href='admin.php';
					</script>";
					break;

					case '6':

					

					$m="select * from ae where AE_Name = '" . $row['emp_name'] . "'" ;
					$result=mysqli_query($conn,$m);
					$row = mysqli_fetch_assoc($result);


					$_SESSION['id'] =  $row['AE_Id']; 


					echo "<script type='text/javascript'> ;
					window.location.href='LOGINVIEW.PHP';
					</script>";
					break;

					case '5':
					

					$m="select * from axe where AXE_Name = '" . $row['emp_name'] . "'" ;
					$result=mysqli_query($conn,$m);
					$row = mysqli_fetch_assoc($result);


					$_SESSION['id'] =  $row['AXE_Id']; 


					echo "<script type='text/javascript'> ;
					window.location.href='LOGINVIEWN.PHP';
					</script>";
					break; 

					case '4':

					

					$m="select * from ee where EE_Name = '" . $row['emp_name'] . "'" ;
					$result=mysqli_query($conn,$m);
					$row = mysqli_fetch_assoc($result);


					$_SESSION['id'] =  $row['EE_Id']; 


					echo "<script type='text/javascript'> ;
					window.location.href='LOGINVIEWN.PHP';
					</script>";
					break; 

					case '3':

					

					$m="select * from se where SE_Name = '" . $row['emp_name'] . "'" ;
					$result=mysqli_query($conn,$m);
					$row = mysqli_fetch_assoc($result);


					$_SESSION['id'] =  $row['SE_Id']; 


					echo "<script type='text/javascript'> ;
					window.location.href='LOGINVIEWN.PHP';
					</script>";
					break; 



					case '2':
					
					$m="select * from ce where CE_Name = '" . $row['emp_name'] . "'" ;
					$result=mysqli_query($conn,$m);
					$row = mysqli_fetch_assoc($result);


					$_SESSION['id'] =  $row['CE_Id']; 


					echo "<script type='text/javascript'> ;
					window.location.href='LOGINVIEWN.PHP';
					</script>";
					break; 


					case '1':

					


					$_SESSION['id'] =  1; 


					echo "<script type='text/javascript'> ;
					window.location.href='LOGINVIEWN.PHP';
					</script>";
					break; 





					default:

					echo "<script type='text/javascript'> ;
					window.location.href='LOGINVIEWN.PHP';
					</script>";

					break;
				}


				exit();











				?>

				<label for="Superior"><?php echo $row['emp_name']; ?> </label>
				<?php

			}
		}



	} else {
		$message = "Username and/or Password incorrect.\\nTry again.";

		echo "<script type='text/javascript'>alert('$message');
		window.location.href='login.php';
		</script>";
		exit();
	}


}




?>

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

				<form class="login100-form validate-form" action="" method="POST">

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
								<button type="submit" name="submit"   class="login100-form-btn" id="btn">
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