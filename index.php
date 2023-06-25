<?php
	require_once('configs/definicije.php');
	require_once('configs/proizvodi.php');
	
	header_definition("Pocetna"); /* configs/definicije.php*/
?>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="position:absolute;">
  <div class="container">
    <a class="navbar-brand" href="#">Amelie <h5 style="
    color: white;
    position: absolute;
    top: 25px;
    font-size: 12px;
    right: 0;">Cosmetics</h5></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item active">
          <a class="nav-link" href="">Home</a>
        </li>
	<li class="nav-item">
          <a class="nav-link" href="#proizvodi">Products</a>
        </li>
	</ul>
   </div>
</div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/wallpaper.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Beauty Products & Makeup</h5>
      </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="images/wallpaper2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Skin Care</h5>
        </div>
    </div>
    <div class="carousel-item">
          <img class="d-block w-100" src="images/wallpaper3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Luxury makeup brands</h5>
          </div>
    </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="proizvodi" class="container" style="margin-top:15px; margin-bottom:15px;">
  <div class="row">
  <?php echo generateProductsPage(); /* configs/proizvodi.php */?>
	</div>
</div>
<?php footer(); /* configs/definicije.php*/
?>
</body>


