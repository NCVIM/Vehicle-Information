<html>
    <head>
		<title>Rectified</title>
		<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
		

		
<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>
<?php


include_once 'connection.php';
$id=2;
?>

	
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
                    Rectified Complaint
					</span>
                    </div>

                    <form method="post" action="">
                    <table style="width:60%">

                <tr>
          
                    <td><label for="Complaint Id">Complaint Id:</label></td>
                    <td><input type="text" name="Complaint_Id" ></td>
                </tr>
                <tr>
                    <td><label for="Overseer ">Overseer:</label></td>
                    <td><input type="text" name="Overseer" ></td>
                 <tr>
                 <tr>
                    <td><label for="Contractor ">Contractor:</label></td>
                    <td><input type="text" name="Contractor" ></td>
                 <tr>
                    <td><input type="submit" value="Rectified" name="submit" class="alt" /></td>
                    <td><input type="submit" value="Back" name="back" class="alt" /></td>
                </tr>

                </form>

</body>
</html>