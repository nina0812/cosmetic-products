<?php
	//ZAŠTITA OD SQL INEKCIJE I SLICNIH NAPADA
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	function header_definition($title = "Stranica")
	{
		echo '
		<head>
			<meta charset="utf-8">
			<title>'.$title.'</title>
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			';
			//<!-- Latest compiled and minified CSS -->
			echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">';

			//<!-- jQuery library -->
			echo '
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
			
';

			echo '
			<link rel="stylesheet" href="css/index.css">
		</head>';
	}
	function header_definition_admin($title = "Stranica")
	{
		echo '
		<head>
			<meta charset="utf-8">
			<title>'.$title.'</title>
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			';
			//<!-- Latest compiled and minified CSS -->
			echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">';

			//<!-- jQuery library -->
			echo '
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
			
		';

			echo '
			<link rel="stylesheet" href="css/admin.css">
			<script src="js/script.js"></script>
		</head>';
	}
	function header_definition_login($title = "Stranica")
	{
		echo '
		<head>
			<meta charset="utf-8">
			<title>'.$title.'</title>
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			';
			//<!-- Latest compiled and minified CSS -->
			echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">';

			//<!-- jQuery library -->
			echo '
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
			
		';

			echo '
			<link rel="stylesheet" href="css/login.css">
			<script src="js/login-script.js"></script>
		</head>';
	}

	function footer()
	{
		echo '<footer class="page-footer sticky-bottom">
		<div id="footer">
		 <div class="container">
		  <div class="row">
			  <div class="col-8">
				  <h5>AMELIE D.O.O.</h5>
				  <p>Kontakt: 021/411-568</p>
				  <p>Radno vrijeme: radnim danima 7h-22h</p>
			  </div>
			  <div class="col-4">
			  <h6 style="color:black;">
			  Zastupamo:
			  </h6>
			  <img src="images/brands.png" class="img-responsive" style="width:100%;max-width:200px;">
			  </div>
		  </div>
		</div>

		</div></footer>';
	}
	

?>