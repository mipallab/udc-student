<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Profile</title>
	
	<!-- bootstrap 5 -->
	<link href="../assects/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../assects/css/style.css">
	<link rel="stylesheet" href="../assects/css/responsive.css">

</head>
<body>
	
	<!-- <div class="container">
		<div class="header text-center my-5">
			<img class="" width="100px" height="100px" src="../assects/media/img/udichilogo.jpg" alt="Udhichi Logo">
			<h1 class="text-danger">Bangladesh Udichi Shilpigosthi</h1>
			<h4 class="text-boler my-3"><strong>Monohardi Shakha, Norshingdi</strong></h4>
		</div>
	</div>

 -->

<nav class="navbar navbar-expand-lg navbar-light shadow py-4" style="background-color: #fff;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../assects/media/img/udichilogo.jpg" alt="" width="47" height="47" class="d-inline-block align-text-top"><strong>Bangladesh Udichi Shilpigosthi</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./signup.php">Signup Student</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="./table.php">All Students List</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="./edit.php">Edit Student Profile</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="./profile.php">View Student Profile</a>
        </li>
      </ul>
	    <div class="d-flex">
	        <img class="rounded-circle" src="../assects/media/img/dammy.jpg" width="30" height="30" alt="">
	    </div>
    </div>
  </div>
</nav>

 	<div class="container">
		<div class="card my-5 shadow">
			<div class="card-header">
				<h1>My Profile</h1>
			</div>
			<div class="card-body">
				<div class="profile-head bg-light border" style='background-image: url("../assects/media/img/users/userBG.jpg")'>
					<div class="user-pic">
						<div class="pic">
							<img width="250px" height="250px" class="profile-pic shadow border border-light border-5 rounded-circle" src="../assects/media/img/dammy.png" alt="Dammy">
							<h2 class="text-center my-2">Majadul Islam Pallab</h2>
						</div>
					</div>
				</div>
				
				<div class="user-info-table">
					<div class="table-responsive">
						<form action="" method="POST">
							<table class="table table-bordered">
							  <tbody>
							    <tr>
							      	<th scope="row">Full Name</th>
							      	<td><input class="form-control" type="text" value="Majadul Islam Pallab"></td>
							    </tr>
							    <tr>
							      	<th scope="row">Father's Name</th>
							      	<td><input class="form-control" type="text" value="Mahfuzul Islam"></td>
							    </tr>
							    <tr>
							      	<th scope="row">Mother's Name</th>
							      	<td><input class="form-control" type="text" value="Roushonara"></td>
							    </tr>
								<tr>
									<th scope="row">Present Address</th>
									<td><input class="form-control" type="address" value="Vill: Chandadnbari, Post:Monohardi, Pouroshova: Monohardi, Thana: Monohardi, Upozila: Monohardi, Dis: Narshindi, Dhaka"></td>
								</tr>
								<tr>
									<th scope="row">Date of Birth</th>
									<td><input class="form-control" type="date" value=""></td>
								</tr>
								<tr>
									<th scope="row">Old</th>
									<td><input class="form-control" type="num" value="20"></td>
								</tr>
								<tr>
									<th scope="row">Occopation</th>
									<td><input class="form-control" type="text" value="sutdent"></td>
								</tr>
								<tr>
									<th scope="row">Phone Number</th>
									<td><input class="form-control" type="tel" value="+880 1713 564842"></td>
								</tr>
								<tr>
									<th scope="row">Interested Subject</th>
									<td>
										<fieldset class="border p-2">
											<legend class="w-auto float-none fs-6"></legend>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="song" value="song" name="interested_sub">
												<label class="form-check-label" for="song">song</label>
										  	</div>
										  	<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="dance" value="dance" name="interested_sub">
												<label class="form-check-label" for="dance">dance</label>
										  	</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="recitation" value="recitation" name="interested_sub">
												<label class="form-check-label" for="recitation">Recitation(আবৃত্তি)</label>
										  	</div>
										  	<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="acting" value="acting" name="interested_sub">
												<label class="form-check-label" for="acting">acting</label>
										  	</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="tobol" value="tobol" name="interested_sub">
												<label class="form-check-label" for="tobol">tobol</label>
										  	</div>
										  	<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="ganeral-member" value="ganeral-member" name="interested_sub">
												<label class="form-check-label" for="ganeral-member"> ganeral member (সাধারণ সদস্য)</label>
										  	</div>
										</fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">Gender</th>
									<td>										
										<fieldset class="border p-2">
											<!-- <legend  class="float-none w-auto p-2 fs-6"></legend> -->
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gender" id="male" value="male">
												<label class="form-check-label" for="male">Male</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gender" id="female" value="female">
												<label class="form-check-label" for="female">Female</label>
											</div>
										 </fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">Email</th>
									<td><input class="form-control" type="email" value="pallab@gmail.com"></td>
								</tr>
								<tr>
									<th scope="row">Username</th>
									<td><input class="form-control" type="text" value="pallab"></td>
								</tr>
								<tr>
									<th scope="row">Password</th>
									<td><input class="form-control" type="password" readonly value="Pallab"> </td>
								</tr>
							  </tbody>

							</table>
							<button class="btn btn-sm btn-secondary">+ add filed</button> <br>
							<input class="btn btn-primary my-3" type="submit" value="Update">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
	
	  <svg viewBox="0 -20 700 110" width="100%" height="110" preserveAspectRatio="none">
	    <path transform="translate(0, -20)" d="M0,10 c80,-22 240,0 350,18 c90,17 260,7.5 350,-20 v50 h-700" fill="red" />
	    <path d="M0,10 c80,-18 230,-12 350,7 c80,13 260,17 350,-5 v100 h-700z" fill="#E6E7E9" />
	  </svg>

	</footer>




	<!-- bootstrap 5 -->
	<script src="../assects/js/jquery-3.6.3.min.js"></script>
	<script src="../assects/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="../assects/js/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="../assects/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>