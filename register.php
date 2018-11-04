<!DOCTYPE HTML>


<html>
	
<head>
	<title>Register</title>
		<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
		

		
<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>
<?php


include_once 'connection.php';
?>

	
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
        Register Complaint
      </span>
    </div>
    <!-- Form for Adding details -->

    <form action="" method="post" id="addcomp">

      <table style="width:80%">
        <!-- Selecting District --> 

       <tr>
         <td><label for="District">Select District : </label></td>
         <?php

         $m="select * from district";
         $result=mysqli_query($conn,$m);
         ?>

         <td> <select name="District"  id="district" style=" height: 50px; width: 180px;">
           <option value="" >Select District</option>
           <?php
           $District=$_POST['District'];
           while($row=mysqli_fetch_array($result))
           {
            echo"<option value='". $row['District_Id']."'>" . $row['District_Name'] . "</option>";
          }

          echo "</select>"
          ?>

        </td>

      </tr>


      <!-- Selecting Taluk -->  
      <tr>
       <td><label for="taluk">Select Taluk : </label></td>
       <td><select name="taluk" id="taluk" style=" height: 50px; width: 180px;">
         <option value="">Select District first</option></td>

       </tr>


		   <tr>

		    <td><label for="PANCHAYAT">PANCHAYAT :</label></td>
		    <td><select name="Panchayat" id="panchayat" style=" height: 50px; width: 180px;">
			<option value="">Select Taluk First</option>
			</select></td>
		  </tr>
	 
		  <tr>
		    <td><label for="CATEGORY">CATEGORY :</label></td>
		    <td><select name="Category" id="category" style=" height: 50px; width: 180px;">
        <option value="Select Category">SELECT Category</option>
			<option value="WATER LEAK">WATER LEAK</option>
			<option value="NO WATER">NO WATER</option>
			<option value="OTHERS">OTHERS</option></select></td>
		

			<td><label for="Others ">OTHERS:</label></td>
			<td><input type="text"  style=" height: 50px; width: 150px; " name="Others" id="others" selected disabled /></td>


		<tr>
			<td><label for="DESCRIPTION ">DESCRIPTION</label></td>
			<td><textarea name="Description" rows="3" cols="1" ></textarea></td> 
		</tr>

        <tr>
			<td><label for="MOBILE NUMBER ">MOBILE NO:</label></td>
			<td><input type="text" style=" height: 50px; width: 150px;" name="Mobile_No" id="Mobile_No" /></td>
										
			<td><input type="submit" value="REGISTER" name="submit" class="alt" /></td>

		</tr>

		</table>
							
							



</form>

      <!-- Scripts -->
  <!--     <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script> -->

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('change', '#district', function(){ 
      var districtID = $(this).val();
      if(districtID){
        $.ajax({
          type:'POST',
          url:'ajaxData.php',
          data:'district_id='+districtID,
          success:function(response){ 
            $('#taluk').html(response);

          }
        }); 
      }else{
        $('#taluk').html('<option value="">Select District</option>');

      }
    });
$(document).on('change','#taluk',function(){
           var TalukID = $(this).val();
           if(TalukID){
            $.ajax({
             type:'POST',
             url:'registerajax.php',
             data:'Taluk_ID='+TalukID,
             success:function(html){
               console.log(html);
               $('#panchayat').html(html);
             }
           }); 
          }else{
           $('#panchayat').html('<option value="">Select Panchayat</option>'); 
         }
       });

      

  });
      </script>






<body>

</html>
