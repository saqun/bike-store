<?php require_once('private/initialize.php'); ?>
<!doctyp html>
<html lang="eng">
<head>
	<meta content="charset=utf-8">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway|Poppins" />
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css">
	<style type="text/css">
		body {
			background-image: url("images/bike1-small3.jpg");
		}
		
		#content_contact {
			width: 80%;
			margin: 0 auto;
			background-color: black;
		}
		form {
			width: 80%;
			margin: auto;
			padding-bottom: 25px;
		}
		/* Contact form */
		input[type=text], textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
		}

		input[type=submit] {
			background-color: #e6007a; //#4CAF50;
			color: white;
			width: 100px;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-botton:16px; 
			margin-top:16px; 

		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
		label {
			color: white;
			font-weight: 300;
			/*margin-top:20px; */
		}
		h1 {
			margin-left:120px;
		}

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#contact").addClass("active");
			
			$("#email").focusout(function() {
				 if (!check()) {
					 $("#email").css('background-color', 'red');
					 $("#email").css('color', 'white');
				 } else {
					 $("#email").css('background-color', 'white');
					 $("#email").css('color', 'green');				
				}
			});
		
		});

		function check() {
				var elem = document.getElementById("email");
				if (elem.value.indexOf("@") == -1) {
					elem.style.color = "red";
					elem.focus();
					return false;
				}
				elem.style.color = "green";
				return true;
		}
	</script>
</head>

<body>
	<?php include('header.php'); ?>
	<div id="content_contact">
		<h1 style="color:white"> Contact Form</h1>
		<form onSubmit="return check();" method="post" action="contact_email.php">
				<label for="fname">First Name</label> <br>
					<input type="text" id="fname" name="first_name" placeholder="Your name.."> <br>
				<label for="lname">Last Name</label> <br>
					    <input type="text" id="lname" name="last_name" placeholder="Your last name.."> <br>
				<label for="email">Email</label> <br>
					    <input type="text" id="email" name="email_address" placeholder="Your email.."> <br>
				<label for="subject">Subject</label> <br>
						<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> <br>
				<input type="submit" value="Submit"> <br>
		</form>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>

