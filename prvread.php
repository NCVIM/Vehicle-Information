<?php

/**
 * @Author: indran
 * @Date:   2018-12-26 22:41:13
 * @Last Modified by:   indran
 * @Last Modified time: 2018-12-26 23:06:56
 */
?>
<?php

session_start();


include_once 'connection.php';


?>



<?php 





if ( isset($_POST['submit'])) {


	$ae = $_POST['ae'];

	?>

	<script type="text/javascript">
		alert(" process success ");
		location.href="nview.php?id=<?php echo $$ae; ?>";
	</script>


	<?php


}

?>

<html>
<head>
	<title>Transer</title>
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">



	<link rel="stylesheet" href="assets/css/mainn.css" />
	
</head>

<body>

	
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
						Transfer Complaint
					</span>
				</div>

				<form method="post" action="" >
					<table style="width:60%">

						<?php if($_SESSION['type' ] <=1 ): ?>


						<?php endif; ?>
						<?php ?>
						<?php ?>
						<?php ?>
						<?php ?>
						<?php if($_SESSION['type' ] <=1 ): ?>

							<tr>

								<td><label for="Complaint Id">Complaint Id:</label></td>
								<td><input type="text" name="Complaint_Id" readonly value="<?php echo $id; ?>"></td>
							</tr>
							<tr>
								<td colspan="2"><label for="To ">Transfer To</label></td>
							</tr>
							<!-- Selecting MD --> 
							<tr>
								<td><label for="Superior">Select Superior: </label></td>
								<?php

								$m="select * from office where O_Id=1";
								$result=mysqli_query($conn,$m);
								?>

								<td> <select  required  name="md" id="md"  style=" height: 50px; width: 150px;">
									<option value=""  disabled selected >Select MD</option>
									<?php

									while($row=mysqli_fetch_array($result))
									{
										echo"<option value='". $row['O_Id']."'>" . $row['O_Name'] . "</option>";
									}

									echo "</select>"       
									?>

								</td>



							</tr>


							<tr>
								<td><label for="ce">Select CE : </label></td>
								<td><select  required  name="ce" id="ce" style=" height: 50px; width: 150px;">
									<option value=""  disabled selected >Select MD first</option></td>



								</tr>

								<!-- Selecting SE --> 
								<tr>
									<td><label for="se">Select SE : </label></td>
									<td><select  required  name="se" id="se" style=" height: 50px; width: 150px;">
										<option value=""  disabled selected >Select CE first</option>
									</select>
								</td>





							</tr>

							<!-- Selecting EE --> 
							<tr>
								<td><label for="ee">Select EE : </label></td>
								<td><select  required  name="ee" id="ee" style=" height: 50px; width: 150px;">
									<option value=""  disabled selected >Select SE first</option>
								</select>
							</td>

						</tr>

						<!-- Selecting AXE --> 
						<tr>
							<td><label for="axe">Select AXE : </label></td>
							<td><select  required  name="axe" id="axe" style=" height: 50px; width: 150px;">
								<option value=""  disabled selected >Select EE first</option>
							</select>
						</td>

					</tr>


					<!-- Selecting AE --> 
					<tr>
						<td><label for="ae">Select AE : </label></td>
						<td>
							<select  required   required name="ae" id="ae" style=" height: 50px; width: 150px;">
								<option value=""  disabled selected  disabled selected >Select AXE first</option>
							</select>
						</td>


					</tr>



				<?php endif; ?>

				<?php if($_SESSION['type' ] <=2): ?>



					<!-- Selecting EE --> 
					<tr>
						<td><label for="ee">Select EE : </label></td>
						<td><select  required  name="ee" id="ee" style=" height: 50px; width: 150px;">
							<?php





							$m="select * from ee WHERE SE_Id = ".$_SESSION['id']."";
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



							?>


						</select>
					</td>

				</tr>

				<!-- Selecting AXE --> 
				<tr>
					<td><label for="axe">Select AXE : </label></td>
					<td><select  required  name="axe" id="axe" style=" height: 50px; width: 150px;">
						<option value=""  disabled selected >Select EE first</option>
					</select>
				</td>

			</tr>


			<!-- Selecting AE --> 
			<tr>
				<td><label for="ae">Select AE : </label></td>
				<td>
					<select  required   required name="ae" id="ae" style=" height: 50px; width: 150px;">
						<option value=""  disabled selected  disabled selected >Select AXE first</option>
					</select>
				</td>


			</tr>

		<?php endif; ?>

		<?php if($_SESSION['type' ] <=3 ): ?>



			<!-- Selecting AXE --> 
			<tr>
				<td><label for="axe">Select AXE : </label></td>
				<td><select  required  name="axe" id="axe" style=" height: 50px; width: 150px;">
					

					<?php






					$m="select * from axe WHERE EE_Id = ".$_SESSION['id']."";
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



					?>


				</select>
			</td>

		</tr>


		<!-- Selecting AE --> 
		<tr>
			<td><label for="ae">Select AE : </label></td>
			<td>
				<select  required   required name="ae" id="ae" style=" height: 50px; width: 150px;">
					<option value=""  disabled selected  disabled selected >Select AXE first</option>
				</select>
			</td>


		</tr>


	<?php endif; ?>
	<?php if($_SESSION['type' ] <=5 ): ?>
		<!-- Selecting AE --> 
		<tr>
			<td><label for="ae">Select AE : </label></td>
			<td>
				<select  required   required name="ae" id="ae" style=" height: 50px; width: 150px;">


					<?php






					$m="select * from ae WHERE AXE_Id = ".$_SESSION['id']."";
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


					?>


				</select>
			</td>


		</tr>




	<?php endif; ?>

	<tr>
		<td><input type="submit" value="View" name="submit" class="alt" /></td>
		<td><input type="button" value="Back" name="back" class="alt"  onclick="location.href='unreadview.php?id=<?php echo $id; ?>';"     /></td>
	</tr>






</form>









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
				$('#ce').html('<option value=""  disabled selected >Select MD</option>');
				$('#se').html('<option value=""  disabled selected >Select SE</option>');
				$('#ee').html('<option value=""  disabled selected >Select EE</option>');
				$('#axe').html('<option value=""  disabled selected >Select AXE</option>');

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
				$('#se').html('<option value=""  disabled selected >Select SE</option>');
				$('#ee').html('<option value=""  disabled selected >Select EE</option>');
				$('#axe').html('<option value=""  disabled selected >Select AXE</option>');

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

				$('#ee').html('<option value=""  disabled selected >Select EE</option>');
				$('#axe').html('<option value=""  disabled selected >Select AXE</option>');

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

				$('#exe').html('<option value=""  disabled selected >Select EE</option>');

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

				$('#ae').html('<option value=""  disabled selected >Select EE</option>');

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
				$('#taluk').html('<option value=""  disabled selected >Select District</option>');

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
				$('#check').html('<option value=""  disabled selected >Select Taluk first</option>'); 
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