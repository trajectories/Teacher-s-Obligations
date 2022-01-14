<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
</head>
<body>
	<?php
	include("../includes/header.php");
	include("../includes/conn.php");

//include "$_SERVER[DOCUMENT_ROOT]/hms/includes/header.php";


	?>

	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2" style="margin-left: -30px;">
					
					<?php
					include("sidenav.php");
					?>


				</div>
				<div class="col-md-10" style="margin-left: 30px">
					<h4 class="my-2">Admin Dashboard</h4>
					<div class="col-md-12 my-2">
						<div class="row">
							<div class="col-md-3 bg-success mx-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										<?php
										$ad = mysqli_query($conn, "SELECT * FROM admin");
										$num = mysqli_num_rows($ad);
										?>
										<div class="col-md-9">
											<h5 class="my-2 text-white" style="font-size: 30px;">
												<?php
												echo $num;
												?>
											</h5>
											<h5 class="my-2 text-white" >Total</h5>
											<h5 class="my-2 text-white">Admin</h5>
											
										</div>
										<div class="col-md-3">
											<a href="admin.php"><i class="fa fa-users-cog fa-2x my-3" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 bg-info mx-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										
										<div class="col-md-9">
											<h5 class="my-2 text-white" style="font-size: 30px;">
												
												
											</h5>
											<h5 class="my-2 text-white" style="font-size: 30px;">
												0
											</h5>
											<h5 class="my-2 text-white" >Total</h5>
											<h5 class="my-2 text-white">Doctors</h5>
											
										</div>
										<div class="col-md-3">
											<a href="admin.php"><i class="fa fa-user-md fa-2x my-3" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 bg-warning mx-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										
										<div class="col-md-9">
											<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
											<h5 class="my-2 text-white" >Total</h5>
											<h5 class="my-2 text-white">Patient</h5>
											
										</div>
										<div class="col-md-3">
											<a href="#"><i class="fa fa-procedures fa-2x my-3" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										
										<div class="col-md-9">
											<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
											<h5 class="my-2 text-white" >Total</h5>
											<h5 class="my-2 text-white">Report</h5>
											
										</div>
										<div class="col-md-3">
											<a href="#"><i class="fa fa-flag fa-2x my-3" style="color: white;"></i></a>
										</div>
									</div>
								</div>

							</div>
							<div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										
										<div class="col-md-9">
											<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
											<h5 class="my-2 text-white" >Total</h5>
											<h5 class="my-2 text-white">Job Request</h5>
											
										</div>
										<div class="col-md-3">
											<a href="#"><i class="fa fa-book-open fa-2x my-3" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 bg-success mx-2 my-2" style="height: 130px;">
								<div class="col-md-12">
									<div class="row">
										
										<div class="col-md-9">
											<h5 class="my-2 text-white" style="font-size: 30px;">0</h5>
											<h5 class="my-2 text-white" >Total</h5>
											<h5 class="my-2 text-white">Income</h5>
											
										</div>
										<div class="col-md-3">
											<a href="#"><i class="fa fa-money-check-alt fa-2x my-3" style="color: white;"></i></a>
										</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>