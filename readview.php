<html>
    <head>
		<title>Read View</title>
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
						Read Complaint
					</span>
                    </div>
                    <form action="" method="post">
			
            <table style="width:60%">

                <tr>
          
                    <td><label for="Complaint Id">Complaint Id:</label></td>
                    <td><input type="text" name="Complaint_Id" ></td>
                </tr>
                <tr>
          
                      <td><label for="Date and Time">Date and Time:</label></td>
                      <td><input type="text" name="Date_and_Time" ></td>
                </tr>
                <tr>
          
                      <td><label for="Panchayat">Panchayat:</label></td>
                      <td><input type="text" name="Panchayat" ></td>
                </tr>
                <tr>
          
                      <td><label for="Category">Category:</label></td>
                      <td><input type="text" name="Category" ></td>
                </tr>

                <tr>
          
                     <td><label for="Others">Others:</label></td>
                     <td><input type="text" name="Others" ></td>
                </tr>

                <tr>
          
                    <td><label for="Description">Description:</label></td>
                    <td><input type="text" name="Description" ></td>
                </tr>

                <tr>
          
                    <td><label for="Landmark">Landmark:</label></td>
                    <td><input type="text" name="Landmark" ></td>
                </tr>

                <tr>
          
                    <td><label for="Name">Name:</label></td>
                    <td><input type="text" name="Name" ></td>
                </tr>

                <tr>
          
                    <td><label for="Mobile Number">Mobile Number:</label></td>
                    <td><input type="text" name="Mobile" ></td>
                </tr>

                <tr>
          
                    <td><label for="Transfer Status">Transfer Status:</label></td>
                    <td><input type="text" name="Transfer" ></td>
                </tr>                

                <tr>
                     
                     <td><input type="submit" value="Rectified" name="rect" class="alt" /></td>

                    <td><input type="submit" value="Transfer" name="trans" class="alt" /></td>
                
                    <td><input type="submit" value="Pending" name="pend" class="alt" /></td>
               
                    <td><input type="submit" value="Back" name="back" class="alt" /></td>
                </tr>
                </form>

</body>
</html>