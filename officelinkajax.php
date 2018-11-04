
<?php


include_once 'connection.php'; 


if(isset($_POST['check'])) {




 $sql="select * from panchayat WHERE Taluk_Id = ".$_POST['taluk']."  ";
 
 $query =mysqli_query($conn,$sql);
 
 if(mysqli_num_rows($query) > 0 ) {

   echo "2";

 } else
 {

  $sqll="select AE_Id from ae WHERE Taluk_Name = ".$_POST['ae']."  ";
  $queryy =mysqli_query($conn,$sql);
  foreach($check as $val)
  {
    $sql = "INSERT INTO pancahayat(AE_Id)VALUES ('".$_POST["$val"]."')";

      //echo $sql;

    if (mysqli_query($conn, $sql)) {
     echo "1";
   } else {
     echo "0";
   }
   // $conn->close();

 }
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

else  if(isset($_POST["SE"]) && !empty($_POST["SE"]))
{


 $m="select * from ee WHERE SE_Id = ".$_POST['SE']."";
     //echo $m;
 $query =mysqli_query($conn,$m);
 
     //Count total number of rows
 $rowCount = mysqli_num_rows($query);
 
     //Display Taluk list
 if($rowCount > 0)
 {
   echo '<option value="" selected disabled>Select EE</option>';
   while($row = $query->fetch_assoc()){ 
     echo '<option value="'.$row['EE_Id'].'">'.$row['EE_Name'].'</option>';
   }
 }
 else
 {
   echo '<option value="" selected disabled>EE not available</option>';
 }
}

else  if(isset($_POST["EE"]) && !empty($_POST["EE"]))
{


 $m="select * from axe WHERE EE_Id = ".$_POST['EE']."";
     //echo $m;
 $query =mysqli_query($conn,$m);
 
     //Count total number of rows
 $rowCount = mysqli_num_rows($query);
 
     //Display Taluk list
 if($rowCount > 0)
 {
   echo '<option value="" selected disabled>Select AXE</option>';
   while($row = $query->fetch_assoc()){ 
     echo '<option value="'.$row['AXE_Id'].'">'.$row['AXE_Name'].'</option>';
   }
 }
 else
 {
   echo '<option value="" selected disabled>AXE not available</option>';
 }
}

else  if(isset($_POST["AXE"]) && !empty($_POST["AXE"]))
{


 $m="select * from ae WHERE AXE_Id = ".$_POST['AXE']."";
     //echo $m;
 $query =mysqli_query($conn,$m);
 
     //Count total number of rows
 $rowCount = mysqli_num_rows($query);
 
     //Display Taluk list
 if($rowCount > 0)
 {
   echo '<option value="" selected disabled>Select AE</option>';
   while($row = $query->fetch_assoc()){ 
     echo '<option value="'.$row['AE_Id'].'">'.$row['AE_Name'].'</option>';
   }
 }
 else
 {
   echo '<option value="" selected disabled>AE not available</option>';
 }
}



else  if(isset($_POST["district_id"]) && !empty($_POST["district_id"])){
     //Get all Taluk data

 $m="select * from taluk WHERE District_Id = ".$_POST['district_id']."";
     // echo $m;
 $query =mysqli_query($conn,$m);
 
     //Count total number of rows
 $rowCount = mysqli_num_rows($query);
 
     //Display Taluk list
 if($rowCount > 0){
   echo '<option value="" selected disabled>Select Taluk</option>';
   while($row = $query->fetch_assoc()){ 
     echo '<option value="'.$row['Taluk_Id'].'">'.$row['Taluk_Name'].'</option>';
   }
 }else{
   echo '<option value="" selected disabled>Taluk not available</option>';
 }
}



else  if(isset($_POST["Taluk_ID"]) && !empty($_POST["Taluk_ID"])){
     //Get all Taluk data

 $m="select * from panchayat WHERE Taluk_Id = ".$_POST['Taluk_ID']." AND AE_Id = 0  ";
      // echo $m;
 $query =mysqli_query($conn,$m);
 
     //Count total number of rows
 $rowCount = mysqli_num_rows($query);
 
     //Display Taluk list
 if($rowCount > 0){ 
  // echo '<input type="checkbox" name="panchayat" value="0" style="display: none;" />  <br>'; 

  while($row = $query->fetch_assoc()){ 
    echo '<input type="checkbox" class="panchayat" name="panchayat[]" value="'.$row['Panchayt_Id'].'"  /> '.$row['Panchayt_Name'].' <br>'; 
  }
}else{
 echo '<div  >Panchayat not available</div>';
}
}



if (isset( $_POST['panchayat'])) {


 //  $ae = 0;

 //  $sqll="select AE_Id from ae WHERE Taluk_Name = ".$_POST['ae']."  ";
 //  $queryy =mysqli_query($conn,$sql);
 //  foreach($check as $val)   {
 //   $ae = $check['AE_Id'];
 // }

  $results = 1;
  $ae = $_POST['ae'];

  if (is_array($_POST['panchayat'])) {

    foreach ($_POST['panchayat'] as $key => $value) {


      $sql = " UPDATE panchayat SET AE_Id = $ae WHERE Panchayt_Id = $value  ;";


      if (mysqli_query($conn, $sql)) {

      } else {

        $results = 0;
      }



    }
  # code...

    echo   $results;
  } 


}




?>