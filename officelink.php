<!DOCTYPE HTML>


<html>

<head>
	<title>OFFICE LINK</title>
  <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
  <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">



  <!-- <link rel="stylesheet" href="assets/css/mainn.css" />  -->

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
        OFFICE LINK
      </span>
    </div>
    <!-- Form for Adding details -->

    <form id="add"action="" method="post">


      <table style="width:100%">

        <!-- Selecting MD --> 
        <tr>
         <td><label for="Superior">Select Superior: </label></td>
         <?php

         $m="select * from office where O_Id=1";
         $result=mysqli_query($conn,$m);
         ?>

         <td> <select name="md" id="md"  style=" height: 50px; width: 150px;">
           <option value="">Select MD</option>
           <?php
           
           while($row=mysqli_fetch_array($result))
           {
            echo"<option value='". $row['O_Id']."'>" . $row['O_Name'] . "</option>";
          }

          echo "</select>"       
          ?>

        </td>

        <td><label for="District">Select District: </label></td>
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

    <!-- Selecting CE --> 
    <tr>
      <td><label for="ce">Select CE : </label></td>
      <td><select name="ce" id="ce" style=" height: 50px; width: 150px;">
       <option value="">Select MD first</option></td>

       <td><label for="taluk">Select Taluk : </label></td>
       <td><select name="taluk" id="taluk">
         <option value="">Select District first</option>

       </select>
     </td>

   </tr>

   <!-- Selecting SE --> 
   <tr>
    <td><label for="se">Select SE : </label></td>
    <td><select name="se" id="se" style=" height: 50px; width: 150px;">
     <option value="">Select CE first</option>
   </select>
 </td>

 <td><label for="panchayat">Select Panchayat : </label></td>
 <td>
  <div id="checkboxes">
   <input type="checkbox" name="check" ><br>
 </div></td>



</tr>

<!-- Selecting EE --> 
<tr>
  <td><label for="ee">Select EE : </label></td>
  <td><select name="ee" id="ee" style=" height: 50px; width: 150px;">
   <option value="">Select SE first</option>
 </select>
</td>

</tr>

<!-- Selecting AXE --> 
<tr>
  <td><label for="axe">Select AXE : </label></td>
  <td><select name="axe" id="axe" style=" height: 50px; width: 150px;">
   <option value="">Select EE first</option>
 </select>
</td>

</tr>


<!-- Selecting AE --> 
<tr>
  <td><label for="ae">Select AE : </label></td>
  <td>
    <select name="ae" id="ae" style=" height: 50px; width: 150px;">
     <option value="">Select AXE first</option>
   </select>
 </td>
 <td><input type="submit" value="ADD" name="submit" class="alt" /></td>

</tr>






</table>    
</form>






<!-- Scripts -->
			<!-- <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script></script> -->

      <script type="text/javascript" src="assets/js/jquery.min.js"></script>


      <script type="text/javascript">
        $(document).ready(function()
        {
          $(document).on('change', '#md', function()
          { 
            var mdID = $(this).val();
            if(mdID){
              $.ajax({
                type:'POST',
                url:'officelinkajax.php',
                data:'md_Id='+mdID,
                success:function(response){ 
                  $('#ce').html(response);

                }
              }); 
            }else{
              $('#ce').html('<option value="">Select MD</option>');
              $('#se').html('<option value="">Select SE</option>');
              $('#ee').html('<option value="">Select EE</option>');
              $('#axe').html('<option value="">Select AXE</option>');

            }
          });




          $(document).on('change', '#ce', function()
          { 
            var ce = $(this).val();
            if(ce){
              $.ajax({
                type:'POST',
                url:'officelinkajax.php',
                data:'CE='+ce,
                success:function(response){ 
                  $('#se').html(response);
                }
              }); 
            }else{
              $('#se').html('<option value="">Select SE</option>');
              $('#ee').html('<option value="">Select EE</option>');
              $('#axe').html('<option value="">Select AXE</option>');

            }
          });


          
          $(document).on('change', '#se', function()
          { 
            var se = $(this).val();
            if(se){
              $.ajax({
                type:'POST',
                url:'officelinkajax.php',
                data:'SE='+se,
                success:function(response){ 
                  $('#ee').html(response);
                }
              }); 
            }else{

              $('#ee').html('<option value="">Select EE</option>');
              $('#axe').html('<option value="">Select AXE</option>');

            }
          });


          $(document).on('change', '#ee', function()
          { 
            var ee = $(this).val();
            if(ee){
              $.ajax({
                type:'POST',
                url:'officelinkajax.php',
                data:'EE='+ee,
                success:function(response){ 
                  $('#axe').html(response);
                }
              }); 
            }else{

              $('#exe').html('<option value="">Select EE</option>');
              
            }
          });


          $(document).on('change', '#axe', function()
          { 
            var axe = $(this).val();
            if(axe){
              $.ajax({
                type:'POST',
                url:'officelinkajax.php',
                data:'AXE='+axe,
                success:function(response){ 
                  $('#ae').html(response);
                }
              }); 
            }else{

              $('#ae').html('<option value="">Select EE</option>');
              
            }
          });

          $(document).on('change', '#district', function(){ 
            var districtID = $(this).val();
            if(districtID){
              $.ajax({
                type:'POST',
                url:'officelinkajax.php',
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
             url:'officelinkajax.php',
             data:'Taluk_ID='+TalukID,
             success:function(html){
               console.log(html);
               $('#checkboxes').html(html);
             }
           }); 
          }else{
           $('#check').html('<option value="">Select Taluk first</option>'); 
         }
       });





          $('#add').submit(function(event) {

           event.preventDefault();
          //  $check = $('#check').val();
          //  console.log($check);
          //  if($check == null) {
          //   alert(" select Taluk first !");
          //   return;
          // }
          // $check = $('#check').val();
          // $check = $check.trim();
          // if( $ae.length < 1) {
          //   alert(" Select a valid Panchayat");
          //   return;
          // }
          
          $.ajax({
            type:'POST',
            url:'officelinkajax.php',
            data: $(this).serialize(),
            success:function(response){
              console.log(response);
              switch(parseInt(response.trim())) {
                case 1: 
                {
                  alert("data inserted successfully");
                  $('#md').val('');
                  $('#ce').val('');
                  $('#se').val('');
                  $('#ee').val('');
                  $('#axe').val('');
                  $('#ae').val('');

                  break;
                }
                case 2:
                {
                  alert("Duplicate entry");

                  break;
                }
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
