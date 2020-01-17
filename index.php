<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	include 'php/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#282C38">
	<meta name="msapplication-navbutton-color" content="#282C38">
	<meta name="apple-mobile-web-app-status-bar-style" content="#282C38">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Omni AI</title>
	<link rel="shortcut icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/frontuiux.css">
	<link rel="stylesheet" type="text/css" href="css/omni.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/omni.js"></script>
</head>
<body>

	<?php
		$view = "";
		if (isset($_GET['view'])) {
			$view = $_GET['view'];
		}
		switch ($view) {
			case 'welcome':
				# code...
				include_once 'views/welcome.php';
				break;
			 
			default:
				# code...
				include_once 'views/home.php';
				break;
		}
	?>

</body>
</html>