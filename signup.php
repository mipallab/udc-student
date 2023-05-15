<?php

	if(isset($_POST['submit'])) {

		//POST data
			$fullName 				= $_POST['full_name'] ;
		    $fatherName 			= $_POST['fathers_name'];
		    $motherName 			= $_POST['mothers_name'];
		    $address 				= $_POST['address'] ;
		    $dob 					= $_POST['date_of_birth'] ;
		    $old 					= $_POST['old'] ;
		    $occopation 			= $_POST['occopation'] ;
		    $phone 					= $_POST['phone'] ;
		   
		    $gender					= $_POST['gender'] ;
		    $email 					= $_POST['email'] ;
		    $username 				= $_POST['username'] ;
		    $new_password			= $_POST['new-password'] ;
		    $confarm_password		= $_POST['confarm-password'] ;
		    
		     echo "<pre>";
		     print_r($_POST);
		     echo "</pre>";


		$interested = $_POST['interested_sub'];
		$chk = '';
		foreach($interested as $chk1)  
	   	{  
	      $chk .= $chk1.", ";  
	   	}  

	   	$interested_sub = substr($chk,0,-2);

		echo "<br>". $interested_sub; 
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Form</title>
	
	
	<!-- bootstrap 5 -->
	<link href="./assects/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="./assects/css/cropper.min.css">
	<link rel="stylesheet" href="assects/css/style.css">
	<!-- Responsive css -->
	<link rel="stylesheet" href="./assects/css/responsive.css">

</head>
<body>
	<div class="container">
		<div class="header text-center my-5">
			<img class="" width="100px" height="100px" src="./assects/media/img/udichilogo.jpg" alt="Udhichi Logo">
			<h1 class="text-danger">Bangladesh Udichi Shilpigosthi</h1>
		</div>
	</div>
	
	<div class="container">
		<div class="reg-table ">
			<div class="regtable mx-auto">
				<div class="card my-5 shadow">
				<div class="card-header">
					<h3>Student Sign Up From</h3>
				</div>
				<div class="card-body">
					<form action="#" method="POST" enctype="multi-part/form-data">
						<!-- full name field -->
						<div class="fullNameField mb-3">
							<label class="form-label" for="fullname mt-2">Full Name</label> <br>
							<input class="px-2 form-control" id="fullname" type="text" required name="full_name">
							<span class="form-text">Must match NID or DOB card</span>
						</div>

						<!-- father name field -->
						<div class="fatherNameField mb-3">
							<label class="form-label" for="fathersname mt-2">Father's Name</label><br>
							<input class="px-2 form-control" id="fathersname" type="text" required name="fathers_name">
						</div>

						<!-- mother name filed -->
						<div class="motherNameField mb-3">
							<label class="form-label" for="mothersname mt-2">Mother's Name</label><br>
							<input class="px-2 form-control" id="mothersname" type="text" required name="mothers_name">
						</div>

						<!-- present address filed -->
						<div class="presentAddress mb-3">
							<label class="form-label" for="address mt-2">Present Address</label><br>
							<input class="px-2 form-control" id="address" type="address" required name="address">
						</div>
						
						<!-- Date of birth filed -->
						<div class="nameField mb-3">
							<label class="form-label" for="dofdate mt-2">Date of Birth</label><br>
							<input class="px-2 form-control" id="dofdate" onchange="ageCalculator()" type="date" required name="date_of_birth">
						</div>

						<!-- old field -->
						<div class="oldField mb-3">
							<label class="form-label" for="old mt-2">Your Old</label><br>
							<input class="px-2 form-control old"  id="old" type="text" required readonly name="old">
						</div>

						<!-- occopation field -->
						<div class="nameField mb-3">
							<label class="form-label" for="occopation mt-2">Occopation</label><br>
							<input class="px-2 form-control" id="occopation" type="text" required name="occopation">
						</div>

						<!-- phone filed -->
						<div class="nameField mb-3">
							<label class="form-label" for="nubmer mt-2">Phone Number</label><br>
							<input class="px-2 form-control" id="nubmer" type="tel" required name="phone">
						</div>

						<!-- interested subject -->
						<div class="nameField mb-3">			
							<fieldset class="border p-2">
								<legend class="w-auto float-none fs-6">The interested subject</legend>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="song" value="song" name="interested_sub[]">
									<label class="form-check-label" for="song">song</label>
							  	</div>
							  	<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="dance" value="dance" name="interested_sub[]">
									<label class="form-check-label" for="dance">dance</label>
							  	</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="recitation" value="recitation" name="interested_sub[]">
									<label class="form-check-label" for="recitation">Recitation(আবৃত্তি)</label>
							  	</div>
							  	<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="acting" value="acting" name="interested_sub[]">
									<label class="form-check-label" for="acting">acting</label>
							  	</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="tobol" value="tobol" name="interested_sub[]">
									<label class="form-check-label" for="tobol">tobol</label>
							  	</div>
							  	<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="ganeral-member" value="ganeral-member" name="interested_sub[]">
									<label class="form-check-label" for="ganeral-member"> ganeral member (সাধারণ সদস্য)</label>
							  	</div>
							</fieldset>
							<hr>
						</div>

						<!-- Gender -->
						<div class="gendreField mb-3">
							<fieldset class="border p-2">
								<legend  class="float-none w-auto p-2 fs-6">Gender</legend>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="male" value="male">
									<label class="form-check-label" for="male">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="female" value="female">
									<label class="form-check-label" for="female">Female</label>
								</div>
							 </fieldset>
						</div>

						<!-- email filed -->
						<div class="emailField mb-3">
							<label class="form-label" for="email mt-2">Email</label><br>
							<input class="px-2 form-control" id="email" type="email" name="email" required>
						</div>

						<!-- username -->
						<div class="userField mb-3">
							<label class="form-label" for="username mt-2">Username</label><br>
							<input class="px-2 form-control" id="username" type="text" name="username" required>
						</div>

						<!-- new password -->
						<div class="userPass mb-3">
							<label class="form-label" for="password">Password</label><br>
							<input class="px-2 form-control" id="password" type="password" name="new-password" required>
						</div>

						<!-- comfarm password -->
						<div class="userConPass mb-3">
							<label class="form-label" for="conpass">Comfarm Password</label><br>
							<input class="px-2 form-control" id="conpass" type="password" name="confarm-password" required>
							<div class="form-text">We'll never share your password with anyone else.</div>
						</div>

						<!-- photo upload -->
						<div class="fieldfile">
							<div class="row g-3 align-items-center">
							  	<div class="col-auto ">
							    	<label for="imgfile" class="col-form-label">Upload your Photo</label>
							  	</div>
							  	<div class="col-auto">
							    	<input type="file" id="imgfile" class=" image fileimg form-control" aria-describedby="fileHelpInline"name="photo" required>
							  	</div>
							  	<div class="col-auto">
							    	<span id="fileHelpInline" class="form-text">
							      image < 5MB
							    	</span>
							  	</div>
							</div>
							<div class="photo border m-3 p-3">
								<img class="livephoto  border" src="./assects/media/img/dammy.png" alt="Dammy Pic" >
							</div>
						</div>
						<input class="mt-3 btn btn-primary" type="submit" value="Sign up" name="submit">
					</form>


				</div>
				<div class="card-footer">
					<a href="./index.html">I've already account. Let me log.</a>
				</div>
				</div>
			</div>
		</div>
	</div>

	<!-- bootstrap 5 -->
	<script src="./assects/js/jquery-3.6.3.min.js"></script>
	<script src="./assects/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="./assects/js/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="./assects/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	<!-- main script -->
	<script type="text/javascript">


		//photo upload
			jQuery('.fileimg').change(function(e){
				let url = URL.createObjectURL(e.target.files[0]);
				jQuery(".livephoto").attr('src',url);
			});

		//age cal
			function ageCalculator() {  
			    let userinput = document.getElementById("dofdate").value;  			// get user date of birth
			    let dob = new Date(userinput);  									// convet a date
			    let currentDate = new Date().getFullYear();							// 
			    let userinputyear = dob.getFullYear();
			    if(currentDate < userinputyear) {  
			         document.getElementById("old").value = -1;   
			      return false;   
			    } else {  
			      
			    //calculate month difference from current date in time  
			    let month_diff = Date.now() - dob.getTime();  
			      
			    //convert the calculated difference in date format  
			    let age_dt = new Date(month_diff);   
			      
			    //extract year from date      
			    let year = age_dt.getUTCFullYear();  
			      
			    //now calculate the age of the user  
			    let age = Math.abs(year - 1970);  
			      
			    //display the calculated age  
			    return document.getElementById("old").value = age;   
			       
			    }  
			}  
	

	</script>

</body>
</html>