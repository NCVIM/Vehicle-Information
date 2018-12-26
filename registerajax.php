<?php


include_once 'connection.php'; 
if(isset($_POST['panchayat'])) {




  $sql="select * from panchayat WHERE District_Id = ".$_POST['District']." AND Taluk_Id = ".$_POST['taluk']." AND Panchayt_Name = '".$_POST['panchayat']."'";

  $query =mysqli_query($conn,$sql);

  if(mysqli_num_rows($query) > 0 ) {

    echo "2";

  } else {


    $sql = "INSERT INTO panchayat (Panchayt_Name, Taluk_Id, District_Id )VALUES ('".$_POST["panchayat"]."', '".$_POST["taluk"]."', '".$_POST["District"]."')";



    if (mysqli_query($conn, $sql)) {
     echo "1";
   } else {
     echo "0";
   }
   $conn->close();


 }


} 


if(isset($_POST['Mobile_No'])) {
 $m="select AE_Id from panchayat where Panchayt_Id='".$_POST["Panchayat"]."'";
 $query =mysqli_query($conn,$m);

 $AE_Id = mysqli_fetch_assoc($query);

 $m =  $AE_Id['AE_Id'];


 $othr = "";
 if(isset( $_POST["Others"]))
  $othr = $_POST["Others"];

$sql="insert into complaint(district,taluk,panchayath,AE_Id,type,Others,Description,Landmark,name,Mobile_Number)
values('".$_POST["District"]."','".$_POST["taluk"]."','".$_POST["Panchayat"]."','$m','".$_POST["Category"]."',
'".$othr."','".$_POST["Description"]."','".$_POST["landmark"]."','".$_POST["name"]."',
'".$_POST["Mobile_No"]."')";




if (mysqli_query($conn, $sql)) {
 echo "1";
} else {
 echo "0";
}
$conn->close();



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

  $m="select * from panchayat WHERE Taluk_Id = ".$_POST['Taluk_ID']."  ";
     // echo $m;
  $query =mysqli_query($conn,$m);

    //Count total number of rows
  $rowCount = mysqli_num_rows($query);

    //Display Taluk list
  if($rowCount > 0){ 
    echo '<option value="" selected disabled>Select Panchayat</option>';
    while($row = $query->fetch_assoc()){ 
      echo '<option value="'.$row['Panchayt_Id'].'">'.$row['Panchayt_Name'].'</option>'; }
    }else{
      echo '<option value="" selected disabled>Panchayat not available</option>'; }
    }





    ?>