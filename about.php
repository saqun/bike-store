<?php require_once('private/initialize.php'); ?>
<!doctyp html>
<html lang="eng">
<head>
	<meta content="charset=utf-8">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway|Poppins" />
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css">
	<style>
		body {
			background-image: url("images/bike1-small3.jpg");
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
		$("#about").addClass("active");
	});
	</script>
</head>

<body>
	<?php include('header.php'); ?>
	<div id="content_about">
		<h1 style="color:white"> About </h1>
	</div>
	<?php include('footer.php'); ?>

</body>
</html>

