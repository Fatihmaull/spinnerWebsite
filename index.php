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
        .custom-font-title {
            font-family: "Playwrite NL", cursive;
        }
        .custom-font-text {
            font-family: 'Roboto', sans-serif;
        }
        .custom-margin {
            margin-top: 5rem;
        }
        .btn-capsule {
            border-radius: 50px; 
        }
        .btn-spacing {
            margin-right: 25px; 
        }
        .footer {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem; 
        }
        .card {
            width: 18rem;
            height: 100%; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100%; 
        }
    </style>
    <title>Homepage</title>
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
            </ul>
          </div>
        </div>
    </nav>
    <!-- NAVBAR BERES -->

    <!-- CONTENT 1 -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Assets/welcome.jpg" class="d-block mx-auto img-fluid" alt="welcome">
          </div>
        </div>
        <div class="text-center mt-4">
            <p class="fs-1 custom-font-title mt-4 mb-4" ><strong>
                ⁠Welcome to your daily green challange
            <strong></p>
         <div class="custom-margin">
        <a href="../login/index.php">
         <button type="button" class="btn btn-warning btn-lg text-success mb-4 btn-capsule btn-spacing">Join now!</button>
        </a>
         </div>
         <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Assets/bellow.jpg" class="d-block mx-auto img-fluid" alt="welcome">
            </div>
          </div>
    </div>
    <!-- CONTENT 1 BERES -->

      <!-- FOOTER -->
    <div class="footer container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <div class="card border-warning h-100"> <!-- Menambahkan kelas h-100 untuk tinggi penuh -->
                    <div class="card-header">Step 1 >>></div>
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <p class="card-text">Start your journey from here!</p>
                        <a href="../login/index.php">
                            <button type="button" class="btn btn-warning btn-sm text-success mb-4">Join Now!</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-warning h-100"> 
                    <div class="card-header">Step 2 >>></div>
                    <div class="card-body">
                        <h5 class="card-title">Make Your Own Activities</h5>
                        <p class="card-text">Start with something easy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-warning h-100"> 
                    <div class="card-header">Step 3 >>></div>
                    <div class="card-body">
                        <h5 class="card-title">Spin To Get the Challenge</h5>
                        <p class="card-text">Do the daily tasks and get the reward</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card border-warning h-100"> 
                    <div class="card-header">Step 4</div>
                    <div class="card-body">
                        <h5 class="card-title">Make Impact!</h5>
                        <p class="card-text">Share challenge and wins, for you and for the nature</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER BERES -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>