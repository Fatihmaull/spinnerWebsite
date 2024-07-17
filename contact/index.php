<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Centered Content</title>
    <style>
        .navbar-nav .nav-link {
            margin-right: 15px; 
            font-size: 1.25rem; 
        }
        .content-center {
            height: 100vh; /* Full height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .custom-font-title {
            font-family: 'Playfair Display', serif;
        }
        .custom-margin {
            margin-bottom: 30px;
        }
        .social-icons i {
            font-size: 2em;
            margin: 0 15px;
            color: #ffc107;
        }
        .img-small {
            width: 250px; 
            height: auto; 
        }
    </style>
</head>
<body>
   <!-- NAVBAR -->
   <nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: #8ec78c;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>Daily Green Challange</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../home/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../about/index.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../whatsnext/index.php">What's Next?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contact/index.php">Contact</a>
              </li>
              <?php
                session_start();
                if (isset($_SESSION['user_id'])) {
                    // User is logged in, show logout link
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../service/logout.php">Logout</a>
                    </li>
                <?php
                } else {
                    // User is not logged in, show login link
                ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="../login/index.php">Login</a>
                    </li> -->
                <?php
                }
                ?>
            </ul>
      </div>
    </div>
</nav>
<!-- NAVBAR BERES -->
    <!-- CONTENT 1 -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="text-center mt-4">
            <p class="fs-1 custom-font-title mt-4 mb-4" ><strong>Forging a path to a greener, brighter world</strong></p>
            <div class="social-icons mb-4">
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
            </div>
            <p class="fs-3 text-success mt-4 mb-4" ><strong>kelompok4@gmail.com</strong></p>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Assets/tangan.jpg" class="d-block mx-auto img-fluid" alt="welcome">
            </div>
        </div>
    </div>
    <!-- CONTENT 1 BERES -->

     <!-- CONTENT 2 -->
     <div class="container content-container mt-5">
      <div class="row">
          <div class="col-12 text-center">
              <h2 class="custom-font-title">Salam Hangat dari Kelompok Kami</h2>
              <p class="fs-4 mt-4">Web ini kita persembahkan dengan penuh suka cita, meski mendesak dan buat sesak tapi beres yakkk</p>
          </div>
      </div>
      <div class="row mt-5">
          <div class="col-md-4 text-center">
              <img src="Assets/fatih.jpg" class="img-fluid img-small" alt="Member 1">
              <p><a href="https://www.instagram.com/fatihmaull/" target="_blank">@fatihmaull</a></p>
          </div>
          <div class="col-md-4 text-center">
              <img src="Assets/haqi.jpg" class="img-fluid img-small" alt="Member 2">
              <p><a href="https://www.instagram.com/rhrdianbaihaqi/" target="_blank">@rhrdianbaihaqi</a></p>
          </div>
          <div class="col-md-4 text-center">
              <img src="Assets/hazamy.jpg" class="img-fluid img-small" alt="Member 3">
              <p><a href="https://www.instagram.com/_m0h.zam/" target="_blank">@_m0h.zam</a></p>
          </div>
          <div class="col-md-4 text-center">
            <img src="Assets/hanif.jpg" class="img-fluid img-small" alt="Member 4">
            <p><a href="https://www.instagram.com/fathurrohman_hanif/" target="_blank">@fathurrohman_hanif</a></p>
        </div>
        <div class="col-md-4 text-center">
          <img src="Assets/awa.jpg" class="img-fluid img-small" alt="Member 5">
          <p><a href="https://www.instagram.com/nazway_/" target="_blank">@nazway_</a></p>
      </div>
      <div class="col-md-4 text-center">
        <img src="Assets/nanas.jpg" class="img-fluid img-small" alt="Member 6">
        <p><a href="https://instagram.com/nzwnblla_/" target="_blank">@nzwnblla_</a></p>
    </div>
      </div>
  </div>
  <!-- CONTENT 2 BERES -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
