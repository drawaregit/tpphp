<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="row">
    <div class="jumbotron">
<h2>La Bibiotheque est fermé bla  bla bla utilise notre service pour louer des livres bla bla bla!!!!</h2>
</div>
  <nav class="navbar navbar-expand-sm bg-light">
    <?php include 'c_chercher_livre_par_auteur.php';?>
    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        
      </ul>
    </div>
  
  </nav>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
        </div>
      
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="couvertures/1.jpg" alt="Los Angeles" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="couvertures/2.jpg" alt="Chicago" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="couvertures/3.jpg" alt="New York" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="couvertures/4.jpg" alt="New York" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="couvertures/5.jpg" alt="New York" class="d-block w-100">
          </div>
        </div>
      
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
</body>