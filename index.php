<?php include('nav.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog :: Gabriel Vitor</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<!-- css link -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/FromSoft.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/DarkSouls.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Sekiro2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Aqui vão os cards -->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
      <div class="card text-bg-dark mb-3">
      <img src="images/DarkSouls1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dark Souls</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
      <div class="card text-bg-dark mb-3">
      <img src="images/DarkSouls2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dark Souls 2</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
      <div class="card text-bg-dark mb-3">
      <img src="images/DarkSouls3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dark Souls 3</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col ">
      <div class="card text-bg-dark mb-3">
      <img src="images/Bloodborne.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bloodborne</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col ">
      <div class="card text-bg-dark mb-3">
      <img src="images/Sekiro.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sekiro</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col ">
      <div class="card text-bg-dark mb-3">
      <img src="images/EldenRing.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Elden Ring</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>
  <?php include('footer.php'); ?>
</body>
</html> 