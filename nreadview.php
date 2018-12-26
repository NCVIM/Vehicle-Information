
<?php


$id = 0;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    ?>
    <script type="text/javascript">
        location.href="unread.php";
    </script>

    <?php

}


?>

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
                  UnRead Complaint
              </span>
          </div>
          <form action="" method="post">


            <?php    $m="select * from complaint where C_Id = " . $id;
            $result=mysqli_query($conn,$m);
            $row = mysqli_fetch_assoc($result);
            ?>
            <?php  if( $row ):  ?>



                <?php 

        // $m=" UPDATE complaint SET status = 1 WHERE C_Id = " . $id ;
        // $result=mysqli_query($conn,$m);


                ?>

                <table style="width:60%">

                    <tr>

                        <th><label for="Complaint Id">Complaint Id:</label></th>
                        <td><input readonly type="text" name="Complaint_Id" value="<?php echo $row['C_Id']; ?>" ></td>
                    </tr>
                    <tr>

                      <th><label for="Date and Time">Date and Time:</label></th>
                      <td><input readonly type="text" name="Date_and_Time"   value="<?php echo $row['Date']; ?>"></td>
                  </tr>
                  <tr>

                      <th><label for="Panchayat">Panchayat:</label></th>
                      <td><input readonly type="text" name="Panchayat"  value="<?php echo $row['panchayath']; ?>" ></td>
                  </tr>
                  <tr>

                      <th><label for="Category">Category:</label></th>
                      <td><input readonly type="text" name="Category"   value="<?php echo $row['C_Id']; ?>"></td>
                  </tr>

                  <tr>

                   <th><label for="Others">Others:</label></th>
                   <td><input readonly type="text" name="Others"   value="<?php echo $row['C_Id']; ?>"></td>
               </tr>

               <tr>

                <th><label for="Description">Description:</label></th>
                <td><input readonly type="text" name="Description"   value="<?php echo $row['C_Id']; ?>"></td>
            </tr>

            <tr>

                <th><label for="Landmark">Landmark:</label></th>
                <td><input readonly type="text" name="Landmark"   value="<?php echo $row['C_Id']; ?>"></td>
            </tr>

            <tr>

                <th><label for="Name">Name:</label></th>
                <td><input readonly type="text" name="Name"   value="<?php echo $row['C_Id']; ?>"></td>
            </tr>

            <tr>

                <th><label for="Mobile Number">Mobile Number:</label></th>
                <td><input readonly type="text" name="Mobile"  value="<?php echo $row['C_Id']; ?>" ></td>
            </tr>

            <tr>

                <th><label for="Transfer Status">Transfer Status:</label></th>
                <td><input readonly type="text" name="Transfer"   value="<?php echo $row['Transfer_Status'] ? "YES" : "NO" ; ?>"></td>
            </tr>                

            <tr>

                <td> <input readonly type="button" onclick="location.href='nview.php';" value="Back" name="back" class="alt" /></td>
            </tr>


        </table>
    <?php endif; ?>
</form>

</body>
</html>
