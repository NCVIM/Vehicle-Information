<?php


include_once 'connection.php'; 


if(isset($_POST['ee'])) {




  $sql="select * from ee WHERE MD_Id = ".$_POST['md']." AND CE_Id = ".$_POST['ce']." AND SE_Id = ".$_POST['se']." AND EE_Name = '".$_POST['ee']."'";

  $query =mysqli_query($conn,$sql);

  if(mysqli_num_rows($query) > 0 ) {

    echo "2";

  } else {


    // $sql = "INSERT INTO se (MD_Id,CE_Id,SE_Id,SE_Name,Mobile_Number)VALUES ('".$_POST["md"]."', '".$_POST["ce"]."', '".$_POST["se"]."', '".$_POST["ee"]."', '".$_POST["Mobile"]."')";  

    $sql = "INSERT INTO se (MD_Id,CE_Id,SE_Name,Mobile_Number)VALUES ('".$_POST["md"]."', '".$_POST["ce"]."',  '".$_POST["ee"]."', '".$_POST["Mobile"]."')";

    // echo $sql;

    if (mysqli_query($conn, $sql)) {
     echo "1";
   } else {
     echo "0";
   }
   $conn->close();


 }










} else  if(isset($_POST["md_Id"]) && !empty($_POST["md_Id"]))
{


  $m="select * from ce WHERE MD_Id = ".$_POST['md_Id']."";
    //echo $m;
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display Taluk list
  if($rowCount > 0)
  {
    echo '<option value="" selected disabled>Select CE</option>';
    while($row = $query->fetch_assoc()){ 
      echo '<option value="'.$row['CE_Id'].'">'.$row['CE_Name'].'</option>';
    }
  }
  else
  {
    echo '<option value="" selected disabled>CE not available</option>';
  }
}

else  if(isset($_POST["CE"]) && !empty($_POST["CE"]))
{


  $m="select * from se WHERE CE_Id = ".$_POST['CE']."";
    //echo $m;
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display Taluk list
  if($rowCount > 0)
  {
    echo '<option value="" selected disabled>Select SE</option>';
    while($row = $query->fetch_assoc()){ 
      echo '<option value="'.$row['SE_Id'].'">'.$row['SE_Name'].'</option>';
    }
  }
  else
  {
    echo '<option value="" selected disabled>SE not available</option>';
  }
}


?>