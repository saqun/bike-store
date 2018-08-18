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
			background-image: url("images/bike1-small3.jpg");
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
			background-image:linear-gradient(to right, white, #00ffff, blue);
		}
		
		#content_view_bikes_available {
			padding-top: 30px;
		}
		#bikes_table {
			margin-top: 50px;
			background-color: white;
			border-collapse: collapse;
			margin: 0 auto;
		}
		#bikes_table tr th, #bikes_table tr td {
			padding: 10px;
			border: 2px solid black;
			text-align: center;
		}
		#bikes_table tr:first-child {
			background-color: black;
			color: white;
			padding-top:5px;
			padding-bottom: 5px;
		}
		#bikes_table tr:first-child th {
			border-right: 2px solid white;
		}
		#content_vba_bla {
			padding: 10px;
			width: 85%;
			margin: auto;
			background-color: white;
			margin-bottom: 20px;
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
					<li><a href="index.php"> Home </a></li>
					<li><a class="active" href="bicycles.php">View Bikes Available</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="about.php">About Us</a></li>
				  </ul>
				</nav>
	</div>
	<div id="content_view_bikes_available">
	<div id="content_vba_bla">
		<h1> List of bikes available </h1>
		<p> Rows and columns are dynamically created from CSV file </p>
		<p> First line of CSV file contains the labels of the table </p>
	</div>
		<?php 
			$parser = new ParseCSV('private/bikes_list.csv');
			$data   = $parser->parse();
			$header = $parser->get_header();
		?>
			
		<table id="bikes_table">
		<tr>
		
		<?php
			foreach ($header as $val) {
				$normalize = ucfirst($val); // first character to capital
				echo "<th>" . $normalize . "</th>";
			}
		?>
		</tr>
		
		<?php
			foreach ($data as $arr) {
				echo "<tr>";
				
				foreach ($arr as $val) {
					echo "<td>" . $val . "</td>";
				}
				echo "</tr>";
			}
		?>
		</table>
	</div>
</body>
</html>

<?php //$super_hero_image = 'AdobeStock_18040381_xlarge.jpeg'; ?>

<?php //include(SHARED_PATH . '/public_footer.php'); ?>
