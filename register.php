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

    <form id="addcomp" action="" method="post" >

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
         <td><textarea name="Description" id="description" rows="3" cols="1" ></textarea></td> 
       </tr>
       <tr>
         <td><label for="Landmark ">Landmark:</label></td>
         <td><input type="text" style=" height: 50px; width: 150px;" name="landmark" id="landmark" /></td>
        </tr>
        <tr>
         <td><label for="Name ">Name:</label></td>
         <td><input type="text" style=" height: 50px; width: 150px;" name="name" id="name" /></td>
        </tr>
        

       

       <tr>
         <td><label for="MOBILE NUMBER ">MOBILE NO:</label></td>
         <td><input type="text" style=" height: 50px; width: 150px;" name="Mobile_No" id="mobile" /></td>

         <td><input type="submit" value="REGISTER" name="submit" id="submt"class="alt" /></td>

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
          $(document).on('change', '#category', function(){ 
            var districtID = $(this).val();
            $('#others').prop('disabled', true);
            if($(this).val() == 'OTHERS'){
              $('#others').prop('disabled', false);
            }
          });
          $(document).on('change', '#district', function(){ 
            var districtID = $(this).val();
            if(districtID){
              $.ajax({
                type:'POST',
                url:'registerajax.php',
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
               //console.log(html);
               $('#panchayat').html(html);
             }
           }); 
          }else{
           $('#panchayat').html('<option value="">Select Panchayat</option>'); 
         }
       });

       $('#addcomp').submit(function(event) 
       {

        event.preventDefault();
        $category = $('#category').val();

        $mobile = $('#mobile').val();
          $mobile = $mobile.trim();
          if( $mobile.length < 1) {
            alert(" enter a valid number");
            return;
          }
          


console.log("hello");
$.ajax({
 type:'POST',
 url:'registerajax.php',
 data: $(this).serialize(),
 success:function(response){
   console.log(response);
   switch(parseInt(response.trim())) {
     case 1: 
     {
     alert("data inserted successfully");
     $('#district').val('');
     $('#taluk').val('');
     $('#panchayat').val('');
     $('#category').val('');
     $('#others').val('');
     $('#landmark').val('');
     $('#description').val('');
     $('#name').val('');
     $('#mobile').val('');
     break;
     }
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
      






      <body>

        </html>