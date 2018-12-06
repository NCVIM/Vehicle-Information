<html>
    <head>
		<title>Pending View</title>
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
						Pending Complaint
					</span>
                    </div>

                    <form method="post" action="">
                    <table style="width:100%">
                    
				<th>Complaint Id</th>
				<th>Date and Time</th>
				<th>Panchayat</th>
				<th>Category</th>
				<th>Name</th>
				<th>Mobile Number</th>
				<th>Reason for Pending</th>
                 <tr>
                    <br>
                    <br>
                    <td><input type="submit" value="Back" name="back" class="alt" /></td>
                </tr>
                </table>

                </form>

</body>
</html>