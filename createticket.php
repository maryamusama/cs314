<!DOCTYPE html>
<html lang="en">

<head>
	<title>Compound Help Desk System - Signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="controller/viewallticket.php">
					<span class="login100-form-title">
						New Ticket
					</span>

					<label for="fname">Unit:</label>
					<input class="input100" type="text" name="unit" placeholder="Unit" required>

					<label for="fname">Title:</label><br>
					<input class="input100" type="text" name="title" placeholder="Title" required>

					<label for="lname">Description:</label><br>
					<input class="input100" type="text" name="description" placeholder="Description" required>

					<label for="myfile">Select a file:</label>
					<input type="file" id="myfile" name="myfile"><br><br>

					<label for="myfile">Choose your services:</label><br>
					
					<input type="checkbox" id="landscaping">
					<label> Landscaping</label><br>
					<input type="checkbox" id="housekeeping">
					<label> housekeeping</label><br>
					<input type="checkbox" id="pesticide">
					<label> pesticide</label><br>
					<input type="checkbox" id="trimmer">
					<label> trimmer</label><br>
					<input type="checkbox" id="garden">
					<label> garden</label><br>
					<input type="checkbox" id="cleaning">
					<label> cleaning</label><br>
					<input type="checkbox" id="laundry">
					<label> laundry</label><br>
					<input type="checkbox" id="catering">
					<label> catering</label><br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onClick="createticket()">
							Create
						</button>
					</div><br>

					<!--
					<label for="email">E_mail:</label>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your email">
						<input class="input100" type="email" name="e_mail" placeholder="E_mail" required>
						<span class="focus-input100"></span>
					</div>

					<form action="" method="post">             
						<textarea name="msg" placeholder="Enter your comment..."></textarea>     	      
					</form>
					
					<form action="create.php" method="post">
        				<input type="text" name="title" placeholder="Title" id="title" required>
        				<input type="email" name="email" placeholder="johndoe@example.com" id="email" required>
        				<textarea name="msg" placeholder="Enter your message here..." id="msg" required></textarea>
        			
    				</form>
					-->

					<div class="flex-col-c p-b-40">
						<span class="txt1 p-b-9">
							Want to cancel?
						</span>

						<a href="viewallticket.php" class="txt3" onClick="cancelticket()">
							Cancel
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function cancelticket() {
		alert("Your Ticket has been canceled");
	}
	/*
	function createticket() {
		alert("Your Ticket has been created");
	}
	*/
</script>
<style type="text/css">
	#pesticide
	{
		display: none;
	}
	#trimmer
	{
		display: none;
	}
	#garden
	{
		display: none;
	}	

	#landscaping:checked~#pesticide
	{
		display: block;
	}
	#landscaping:checked~#trimmer
	{
		display: block;
	}
	#landscaping:checked~#garden
	{
		display: block;
	}
	
	#cleaning
	{
		display: none;
	}
	#laundry
	{
		display: none;
	}
	#catering
	{
		display: none;
	}	

	#housekeeping:checked~#cleaning	
	{
		display: block;
	}
	#housekeeping:checked~#laundry
	{
		display: block;
	}
	#housekeeping:checked~#catering
	{
		display: block;
	}
</style>

</html>