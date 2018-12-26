<?php 


session_start();
?>
<?php


include_once 'connection.php';

?>
<?php 


$id = 0;

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	?>
	<script type="text/javascript">
		location.href="unread.php";
	</script>

	<?php

}





if ( isset($_POST['submit'])) {



	$m="select * from complaint where C_Id = " . $id;
	$result=mysqli_query($conn,$m);
	$row = mysqli_fetch_assoc($result);


	$m=" UPDATE complaint SET  status = 2   WHERE C_Id = " . $id ;
	$result=mysqli_query($conn,$m);




	$m=" INSERT INTO pending ( C_Id, AE_Id, Reason	 ) VALUES ( $id, " . $_SESSION['id'] ."  , '". $_POST['Reason'] ."'   );  "  ;
	$result=mysqli_query($conn,$m);



	?>

	<script type="text/javascript">
		alert(" process success ");
		location.href="unread.php?id=<?php echo $id; ?>";
	</script>


	<?php


}

?>

<html>
<head>
	<title>Pending</title>
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">



	<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>


	
	<!-- Header -->

	<header id="header">

		<div class="inner">

			<a href="index.php" class="logo">Aqua Loom</a>


			<nav id="nav">

				<a href="index.php">Home</a>

				<a href="login.php">logout</a>

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
						Pending Complaint
					</span>
				</div>

				<form method="post" action="">
					<table style="width:60%">

						<tr>

							<td><label for="Complaint Id">Complaint Id:</label></td>
							<td><input type="text" name="Complaint_Id" value="<?php echo $id; ?>" readonly></td>
						</tr>
						<tr>
							<td><label for="Reason ">Reason for Pending:</label></td>
							<td><input type="text" name="Reason" required ></td>
							<tr>
								<td><input type="submit" value="Transfer" name="submit" class="alt" /></td>
								<td><input type="button" value="Back" name="back" class="alt"  onclick="location.href='unreadview.php?id=<?php echo $id; ?>';"     /></td>
							</tr>

						</form>

					</body>
					</html>