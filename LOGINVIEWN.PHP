<?php 


session_start();
?>
<html>

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


        <form class="login100-form validate-form" action="prvread.php">
         <input type="hidden" name="varname" value="<?php echo $_SESSION['name'];?>">

         <td> <input type="image" src="images/blue1.jpg" alt="Submit" width="100" height="100" ></td>

       </td>


     </form>

     <form class="login100-form validate-form" action="pendingview.php">


      <td> <input type="image" src="images/violet1.png" alt="Submit" width="100" height="100" >
      </td></form>  
      <form class="login100-form validate-form" action="completeview.php">
        <input type="hidden" name="varname" value="<?php echo $_SESSION['name'];?>">

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