
<html>
<?php

include_once 'connection.php';

{

    $Name=$_POST['username'];
      $PS=$_POST['pass'];
//	  $_SESSION['regName'] = $Name;
	  
      $flag=0;
    //$conn=mysqli_connect("localhost","root","Y91zmCIUrAQBB94I","water_authority");

      $new="select mob,pass from log where mob=$Name AND pass=$PS ";
      
      $w=mysqli_query($conn, $new);
       while ($row = mysqli_fetch_array($w)) {
        
        
        
if(($row['mob']==$Name)&&($row['pass']==$PS))
{
    $flag=1;
}

    
    }

	 
	  
	  
	  If($flag==1)
      {
      

	  $s="select emp_name,mob from log where mob=$Name ";
      
	  $k=mysqli_query($conn, $s);
  $num=mysqli_num_rows($k);
 
If ($num >= 0)
	{
	

    //$a=mysqli_query("select AE_Name,AE_id from ae");
    while ($row = mysqli_fetch_array($k)) {
        
        
        
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
}


}
?>
    <head>	<title>Profile</title>
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
						Profile
					</span>
				</div>

                           <table style="width:100%">

                  <!-- Adding Image Buttons -->
                    <tr> 
                
                        <form class="login100-form validate-form" action="unread.php" method="GET">
                               
    <input type="hidden" name="varname" value=<?php echo $Name?>>
    

                         <td><input type="image" src="images/unread1.jpg" alt="Submit" name="Submit" width="100" height="100">
                        </td> </form>
                     
                        <form class="login100-form validate-form" action="read.php">
						 <input type="hidden" name="varname" value=<?php echo $Name?>>

                        <td> <input type="image" src="images/blue1.jpg" alt="Submit" width="100" height="100" ></td>
                        
                        </td>


                    </form>
                   
                        <form class="login100-form validate-form" action="pending.php">
						
                    
                        <td> <input type="image" src="images/violet.png" alt="Submit" width="100" height="100" >
                        </td></form>  
                        <form class="login100-form validate-form" action="complete.php">
                            <input type="hidden" name="varname" value=<?php echo $Name?>>

                        <td> <input type="image" src="images/green1.jpg" alt="Submit" width="100" height="100">
						<!---<input type="text" name="regName" value="">  -->
                        </td></form>     
                    </tr>
                                
                            
                        </div>
                    </div>
                </div>
            
                        </section>
            



</body>









</HTML>