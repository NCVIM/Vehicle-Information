<!DOCTYPE HTML>


<html>

<head>
	<title>SUPERINTENDENT ENGINEER</title>
  <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">



  <link rel="stylesheet" href="assets/css/mainn.css" />

</head>

<body>
  <?php


  include_once 'connection.php';
  $id=3;
  ?>


  <!-- Header -->

  <header id="header">

    <div class="inner">

      <a href="index.php" class="logo">water hole</a>


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
        Add SUPERINTENDENT ENGINEER
      </span>
    </div>
    <!-- Form for Adding details -->

    <form action="" method="post">


      <table style="width:80%">

        <!-- Selecting MD --> 
        <tr>
         <td><label for="Superior">Select Superior: </label></td>
         <?php

         $m="select * from office where O_Id=1";
         $result=mysqli_query($conn,$m);
         ?>

         <td> <select name="Superior" id="md" >
           <option value="">Select MD</option>
           <?php
           echo"<option value='1'>1</option>";
           while($row=mysqli_fetch_array($result))
           {
            echo"<option value='". $row['O_Id']."'>" . $row['O_Name'] . "</option>";
          }

          echo "</select>"       
          ?>

        </td>

      </tr>

      <!-- Selecting CE --> 
      <tr>
        <td><label for="ce">Select CE : </label></td>
        <td><select name="ce" id="ce">
         <option value="">Select MD first</option></td>

       </tr>


       <!-- Adding OFFICE NAME -->
       <tr>


        <td><label for="se">Office Name:</label></td>
        <td><input type="text" name="se" placeholder="Enter Office Name:"></td>
      </tr>
      <tr>

       <!-- Adding MOBILE NO -->
       <tr>


        <td><label for="Mobile">Mobile No:</label></td>
        <td><input type="text" name="Mobile" placeholder="Enter Mobile No:"></td>
        <td><input type="submit" value="ADD" name="submit" class="alt" /></td>
      </tr>
      <tr>
      </table>    






      <!-- Scripts -->
			<!-- <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script></script> -->

      <script type="text/javascript" src="assets/js/jquery.min.js"></script>


      <script type="text/javascript">
        $(document).ready(function(){
          $(document).on('change', '#md', function(){ 
            var mdID = $(this).val();
            if(mdID){
              $.ajax({
                type:'POST',
                url:'seajax.php',
                data:'md_Id='+mdID,
                success:function(response){ 
                  $('#ce').html(response);

                }
              }); 
            }else{
              $('#ce').html('<option value="">Select MD</option>');

            }
          });


          $('#add-new-se').submit(function(event) {
           event.preventDefault();
           $ce = $('#ce').val();
           if($ce == null) {
            alert(" select CE first !");
            return;
          }
          $se = $('#se').val();
          $se = $se.trim();
          if( $se.length < 1) {
            alert(" enter a valid SE");
            return;
          }

          $.ajax({
            type:'POST',
            url:'seajax.php',
            data: $(this).serialize(),
            success:function(response){
              console.log(response);
              switch(parseInt(response.trim())) {
                case 1: 
                alert("data inserted successfully");
                $('#se').val('');
                break;

                case 2:
                alert("Duplicate entry");

                break;

                default:
                alert(" Errror from server");
              }

            }
          }); 




        });


        });
      </script>




    </body>
    </html>
