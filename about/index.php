<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NL:wght@100..400&display=swap" rel="stylesheet">
    <style>
        .navbar-nav .nav-link {
            margin-right: 15px; 
            font-size: 1.25rem; 
        }
        .carousel-item img {
            max-width: 100%;
            max-height: 500px; 
            object-fit: cover; 
        }
        .content-container {
            margin-top: 20px;
        }
        .content-image {
            max-width: 100%;
            height: auto;
        }
        .content-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 20px;
        }
        .content-text h5 {
            font-size: 2rem; 
            font-family: "Playwrite NL", cursive; 
            margin-bottom: 40px;
        }
        .content-text p {
            font-size: 1.2rem;
        }
    </style>
    <title>About</title>
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Assets/foto2.jpg" class="d-block w-100" alt="hai" style="height: 300px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Transforming communities through innovation</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Assets/foto00.jpg" class="d-block w-100" alt="haii" style="height: 300px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Always aiming for tomorrow's possibilities</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- CONTENT 1 BERES -->

    <!-- CONTENT 2 -->
    <div class="container content-container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="Assets/konten1.jpg" class="img-fluid rounded content-image" alt="konten 1">
            </div>
            <div class="col-md-6 content-text">
                <h5><strong>Our National Goals</strong></h5>
                <p>Explore the areas where we’re making a difference, ​connecting communities, and creating an impact ​through our sustainable projects and partnerships.</p>
            </div>
        </div>
    </div>
    <!-- CONTENT 2 BERES -->

    <!-- CONTENT 3 -->
    <div class="container content-container">
        <div class="row align-items-center">
            <div class="col-md-6 content-text">
                <h5><strong>Our Passion Project</strong></h5>
                <p>Empowering change through environmental awareness and practical initiatives, ensuring a sustainable future for generations to come.</p>
            </div>
            <div class="col-md-6">
                <img src="Assets/konten2.jpg" class="img-fluid rounded content-image" alt="konten 2">
            </div>
        </div>
    </div>
    <!-- CONTENT 3 BERES -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>