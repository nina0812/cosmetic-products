<?php
	session_start();
	require_once('configs/definicije.php');
    require_once('configs/proizvodi.php');
	header_definition_login("LOGIN");
    if(isset($_SESSION['Logiran']))
	{
			header('Location: admin.php');
			exit;
	}
	else {
        if (isset($_POST['login'])) {
            $name = test_input($_POST["username"]);
            $password = test_input($_POST["password"]);
            if($name == "" || $password == "")
            {
                $_SESSION['warning'] = "Niste unijeli sve potrebne podatke.";
            }
            else {
                  if(!checkUserExists($name, $password))
                  {
                    $_SESSION['warning'] = "Unijeli ste krive podatke.";
                  }
                  else {
                    $_SESSION['Logiran'] = $name;
                    header('Location: admin.php');
                    exit;
                  }
            }
            header('Location: login.php');
            exit;
        }
    }
?>
<div class="wrapper">
    <div id="form-content">
    <h3>ADMIN PANEL</h3>
        <?php
		  if(isset($_SESSION['warning'])) 
		  { 
			echo '<div id="porukica" class="alert alert-warning" role="alert">
			  '. $_SESSION['warning'] .' </div>';
			  unset($_SESSION['warning']);
		  }
		?>
        <form method="post" action="login.php"> 
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="Username" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary mb-1" value="LOGIN" name="login">
            </div>
        </form>
    </div>
    </div>
</body>