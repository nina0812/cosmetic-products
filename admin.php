<?php
	session_start();
	session_regenerate_id();
	require_once('configs/definicije.php');
	require_once('configs/proizvodi.php');
	require_once('contents/dialogs.php');
	header_definition_admin("ADMIN PANEL");
	if(!isset($_SESSION['Logiran']))
	{
		header('Location: login.php');
		exit;
	}
	else {
		if(isset($_GET['action']))
		{
			if($_GET['action'] == "logout")
			{
				session_destroy();
				header('Location: login.php');
				exit;

			}
			else if($_GET['action'] == "delete_artikal") { /* brisanje proizvoda: link = admin.php?action=delete_artikal&id={id} */
				if(isset($_GET['id']))
				{
					$_SESSION['success'] = "Uspjesno ste obrisali proizvod";
					DeleteProduct($_GET['id']); /* configs/proizodi.php */
				}
				header('Location: admin.php');
				exit;
			}
			else if($_GET['action'] == "add_artikal") { // forma action="admin.php?action=add_artikal"
				if (isset($_POST['artikal_add'])) {
					//
					$ime = test_input($_POST["Naziv"]);
					$marka = test_input($_POST["Brend"]);
					$opis = test_input($_POST["Opis"]);
					$cijena = test_input($_POST["Cijena"]);
					//
					$target_path = './uploads/'; // zasmjestatslike
					$targetfile = $target_path.$_FILES["Slika"]["name"];

					if($ime == ""|| $marka = "" || $opis = "" || $cijena == "")
					{
						$_SESSION['warning'] = "Niste unijeli sve potrebne podatke.";
					}
					else {
						if($cijena <= 10000 && $cijena >= 1)
						{			
							if (move_uploaded_file($_FILES["Slika"]["tmp_name"],$target_path.$_FILES["Slika"]["name"])) { // primisti sliku u upload
									$_SESSION['success'] = sprintf("Uspijesno ste dodali:<br>
									<b>Naziv artikla:</b> %s (%d HRK)<br>
									<b>Brend:</b> %s <br>
									<b>Opis:</b> %s", $ime, $cijena, $_POST["Brend"], $_POST["Opis"]);

									AddProduct($ime, $cijena, $_POST["Brend"], $_POST["Opis"], $targetfile); /* configs/proizvodi.php */
							}
							else 
							{
									$_SESSION['warning'] = "Niste uploadali sliku.";
							}
						}
						else {
							$_SESSION['warning'] = "Raspon cijene moze biti izmedu 1 HRK - 10000 HRK.";
						}
					}
					header('Location: admin.php');
					exit;
				}
			}
		}
	}

echo '
<body>
	'.dialogAdd().'
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top navigacija">
		<div class="container">
			<a class="navbar-brand" href="#">Dobrodosli '.$_SESSION['Logiran'].'</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="admin.php?action=logout">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid py-4">';
		  if(isset($_SESSION['warning'])) { 
			echo '<div id="porukica" class="alert alert-warning" role="alert">
			  '. $_SESSION['warning'] .' </div>';
			  unset($_SESSION['warning']);
		  }
		  if(isset($_SESSION['success'])) { 
				echo '<div id="porukica" class="alert alert-success" role="alert">
				  '. $_SESSION['success'] .' </div>';
				  unset($_SESSION['success']);
		  }
		echo '
		<div class="row">
			<div class="col-4 ">
				<h2>Prozivodi</h2>
			</div>
			<div class="col-8 botun">
				<a class="btn btn-primary btn-lg add-proizvod" href="#">Dodaj novi proizvod</a>
			</div>
		</div>
	</div>
	<div class="container-fluid py-4">
		<div class="row">'.generateProductsAdmin().'</div> 
	</div>
</body>'; /* Ispis proizvoda - generateProductsAdmin() -> configs/proizvodi.php */
?>

