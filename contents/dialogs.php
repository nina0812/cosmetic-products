<?php

function dialogAdd() {
    $dialog1 = "";
    $dialog1 .= '
    <dialog id="window-add"><i class="fa fa-close ugasi-dialog"></i>
	<div class="unutar-dialoga">
		<form method="POST" enctype="multipart/form-data" action="admin.php?action=add_artikal"> 
				  <div class="form-group">
					<label for="Naziv">Naziv artikla</label>
					<input type="text" class="form-control naziv-iznos" id="Naziv" placeholder="npr. Kist" name="Naziv">
				  </div>
                  <div class="form-group">
					<label for="Naziv">Brend</label>
					<input type="text" class="form-control naziv-iznos" id="Brend" placeholder="npr. Maybelline" name="Brend">
				  </div>
				  <div class="form-group">
					<label for="Cijena">Cijena (HRK)</label>
					<input type="number" min="1" max="10000" name="Cijena" class="form-control cijena-iznos" id="Cijena" value="1">
				  </div>
				  <div class="form-group">
					<label for="Opis">Opis artikla</label>
					<textarea class="form-control" id="Opis" rows="3" name="Opis"></textarea>
				  </div>
				  <div class="form-group">
					<label for="Slika">Upload Slike</label>
					<input type="file" name="Slika" class="form-control" id="Slika">
				  </div>
				  <div class="form-group">
				  <center>
				  <input type="submit" class="btn btn-primary mb-1" name="artikal_add" id="artikal_add" value="Dodaj artikal">
				  </center>
				</div>
		</form>
	</div>
	</dialog>';
    return $dialog1;
}

?>