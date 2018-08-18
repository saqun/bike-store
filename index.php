<?php require_once('private/initialize.php'); ?>

<?php //include(SHARED_PATH . '/public_header.php'); 
?>

<!doctyp html>
<html lang="eng">
<head>
	<meta content="charset=utf-8">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway|Poppins" />

	<style>

		body {
		/*	background-image: url("images/bike1-small3.jpg"); */
		/*font-family: 'Trebuchet MS', Arial, sans-serif; */
			font-family: 'Poppins',sans-serif; 
			padding: 0px;
			margin: 0px;	
		}

		#info_bar {
			padding-top: 15px;
			width: 100%;
			height: 40px;
			background-color:#e6007a;
			/*display:table; */
			color: #ffffff; 
			font-size: 16px; 
			font-weight: 600; 
		}
		#info_bar span {
			margin-left: 10px;
		}
		nav {
			margin-right: 5px;
			background-color: white;
			overflow: hidden;
		}

		#menu {
			float: right;
			list-style-type: none;  /* remove "." before the line */
			margin-right: 10px;
		}

		#menu li {
			float: left;
			/*text-align:center; */
			border-right: 4px solid gray;
			padding-right:5px;
		}
		#menu li a {
			display: block;
			text-decoration: none; /* remove underline */
			color: black;
			padding: 10px;
			font-weight: 1000; 
		}
		
		nav li a.active {
			background-color:gray;
			font-weight: bold;
		}
		#menu li a:hover:not(.active) {
			background-color: #ddd;
		}
	
		#home_text {
			margin:10px;
			padding: 10px;
			background-color: white;
		}
		#home_text img {
			float: left;
			margin-right: 10px;
		}
</style>
</head>

<body>
    <div id="header">
			    <div id="info_bar"> 
					<span class="contactinfo"> <i class="far fa-clock"></i> Mon-Fri: 9AM-5PM </span>
					<span class="contactinfo"> <i class="fas fa-phone"></i> <?php echo PRIVATE_TELEPHONE; ?> </span>
					<span class="contactinfo"> <i class="fas fa-envelope"></i><?php echo PRIVATE_EMAIL; ?></span>
				</div>	
				<nav>
				  <ul id="menu">
					<li><a class="active" href="index.php"> Home </a></li>
					<li><a href="bicycles.php">View Bikes Available</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="about.php">About Us</a></li>
				  </ul>
				</nav>
	</div>
	<div id="home_text">
	    <img src="images/bike1-small3.jpg">
		<h1> Welcome to our bike store on line </h1>
		<h2> This website uses CSV file to display bikes available. </h1>
	</div>
</body>
</html>

<?php //$super_hero_image = 'AdobeStock_18040381_xlarge.jpeg'; ?>

<?php //include(SHARED_PATH . '/public_footer.php'); ?>
