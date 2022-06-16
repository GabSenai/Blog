<?php 
include "config/connection.php"; 

$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<link rel="stylesheet" href="css/style.css">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/From.jpg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Página Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quem Somos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nossos Produtos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Acessórios</a></li>
            <li><a class="dropdown-item" href="#">Plushies</a></li>
            <li><a class="dropdown-item" href="#">Jogos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Notícias</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>