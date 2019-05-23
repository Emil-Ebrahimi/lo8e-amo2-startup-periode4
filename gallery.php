<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="despriction" content="Zuwu provides you with royalty free pictures of beautifull flowers!">
<meta name="author" content="Emil Ebrahimi">
<meta name="keywords" content="Emil Ebrahimi, Flowers, Pictures">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- eindstylesheet t.b.v. bootstrap -->
<link rel="stylesheet" href="css/master.css">
<link rel="stylesheet" href="css/home.css">
<title>Zuwu | Royalty free flower pics</title>
</head>
<body>
    <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger static-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
            <img class="logo" src="images/logo.jpg" alt="">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="license.html">License</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle"
          type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
    Categories
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item" href="gallery.php">Flowers</a>
    <a class="dropdown-item" href="gallery-trees.html">Trees</a>
    <a class="dropdown-item" href="gallery-plant.html">Plant</a>
  </div>
</div>

<div class="container">



<div class="container gallery-container">

<h1 class="text-center">Flowers</h1>

<p class="page-description text-center">Click to open in new tab!</p>

<div class="tz-gallery">

    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card">
                <a class="lightbox" href="images/placeholder.png">
                <img src="images/placeholder.png" alt="Park" class="card-img-top">
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <a class="lightbox" href="images/placeholder.png">
                <img src="images/placeholder.png" alt="Park" class="card-img-top">
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <a class="lightbox" href="images/placeholder.png">
                <img src="images/placeholder.png" alt="Park" class="card-img-top">
                </a>
            </div>
        </div>
    </div>
      <div class="row">
        <div class="col-md-4">
            <div class="card">
                <a class="lightbox" href="images/placeholder.png">
                <img src="images/placeholder.png" alt="Park" class="card-img-top">
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <a class="lightbox" href="images/placeholder.png">
                <img src="images/placeholder.png" alt="Park" class="card-img-top">
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <a class="lightbox" href="images/placeholder.png">
                <img src="images/placeholder.png" alt="Park" class="card-img-top">
                </a>
            </div>
        </div>

    </div>

</div>

</div>
<hr class="my-4">
<div class="jumbotron">
  <div id="tekst">
  <h1 class="display-4">Upload your own artwork!</h1>
  <hr class="my-4">
  <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" role="button">Upload!</button>

  <!-- Modal -->
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        </div>
        <div id="form1">
         <form action="index.php" method="post" enctype="multipart/form-data">
             Select image to upload:
             <input type="file" name="fileToUpload" id="fileToUpload">


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Upload Image" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>



 <?php
    require_once 'dbconfig.php';
    $sqlQuery = "SELECT image FROM images";
    $result = $conn->query($sqlQuery);
    while($rows = $result->fetch_assoc()) {

      ?>
  <div class="item"><img src="uploads/<?php echo $rows['image']; ?>"</div>
 <?php } ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
