<!DOCTYPE HTML>


<html>

<head>
	<title>Panchayat</title>
<!--   <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">



  <link rel="stylesheet" href="assets/css/mainn.css" /> -->
</head>

<body>
  <?php


  include_once 'connection.php';
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
        Add Panchayat/Municipality/Corporation
      </span>
    </div>
    <!-- Form for Adding details -->

    <form action="" method="post" id="add-new-p">

      <table style="width:90%">
        <!-- Selecting District --> 

        <tr>
         <td><label for="District">Select District : </label></td>
         <?php

         $m="select * from district";
         $result=mysqli_query($conn,$m);
         ?>

         <td> <select name="District"  id="district" style=" height: 50px; width: 150px;">
           <option value="" selected disabled>Select District</option>
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
       <td><select name="taluk" id="taluk">
         <option value="">Select district first</option></td>

       </tr>

       <!-- Adding PANCHAYAT/ MUNICIPALITY/CORPORATION  -->
       <tr>

        <td><label for="PANCHAYAT">PANCHAYAT/
          MUNICIPALITY/
        CORPORATION: </label></td>
        <td><input type="text" name="panchayat" id="panchayat" required minlength="2" placeholder="Enter new P/D/T"></td>
        <td><input type="submit" value="ADD" name="submit" class="alt" /></td>
      </tr>
      <tr>
      </table>    






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

          // $('#taluk').on('change',function(){
          //   var TalukID = $(this).val();
          //   if(sTalukID){
          //     $.ajax({
          //       type:'POST',
          //       url:'ajaxData.php',
          //       data:'Taluk_ID='+TalukID,
          //       success:function(html){
          //         $('#panchayat').html(html);
          //       }
          //     }); 
          //   }else{
          //     $('#panchayat').html('<option value="">Select state first</option>'); 
          //   }
          // });

          $('#add-new-p').submit(function(event) {
           event.preventDefault();
           $taluk = $('#taluk').val();
           if($taluk == null) {
            alert(" select taluk first !");
            return;
          }
          $panchayat = $('#panchayat').val();
          $panchayat = $panchayat.trim();
          if( $panchayat.length < 1) {
            alert(" enter a valid panchayat");
            return;
          }

          $.ajax({
            type:'POST',
            url:'ajaxData.php',
            data: $(this).serialize(),
            success:function(response){
              console.log(response);
              switch(parseInt(response.trim())) {
                case 1: 
                alert("data inserted successfully");
                $('#panchayat').val('');
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
