
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
     .navbar .nav-link {
            margin-right: 15px; 
            font-size: 1.25rem; 
        }
    </style>
    <title>Daily Green Challenge</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: #8ec78c">
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

   
    <section class="section">
        <div class="section__container">
          <div class="content">
            <p class="subtitle">HELLO</p>
            <h1 class="title">
              <span>Greetings from us</span>
            </h1>
            <p class="description">
              At the intersection of creativity and technology, we welcome you to explore our digital portfolio. This is where innovative ideas are transformed into beautifully crafted, responsive websites that captivate and engage users. With a deep passion for web development, we bring your vision to life with precision and expertise. Join us on this journey 
              of digital excellence and discover the art of web development. Let's create something extraordinary together.
            </p>
            <h1 class="title">
              <span>Team Green</span>
            </h1>
         
            <p class="description">
             Nazwa Nabila, Nazwa Yulianti <br>
             Muhamad Fatih, Muhamad Hanif <br>
             Muhamad Hazamy, Muhammad Rahardian <br>
            </p>
          </div>
      
          <div class="image">
            <img src="img/profile.jpg" alt="profile" />
          </div>
        </div>
      </section>
<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>Our Adventure Thus Far</h1>
    <center><p>Kita ingin membuat kegiatan hijau bukan sebagai satu hal ​yang “malass dan susah” untuk dikerjakan,
         tapi sebagai k​egiatan yang “keren dan seruu” untuk dilakukan!</p></center>
    <a href="/"><button class="btn">Start!</button></a>

</div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">
<div class="box-container">

    <div class="box">
        <i class="fas fa-users"></i>
        <h3>Menciptakan lingkungan yang asri</h3>
        <p>berarti menjaga dan memperbaiki kondisi lingkungan agar tetap hijau, bersih, dan sehat. Ini melibatkan tindakan seperti menanam pohon, merawat taman, mengurangi sampah, dan menjaga kebersihan udara serta air. Tujuannya adalah menciptakan area yang indah dan nyaman untuk dihuni, meningkatkan kualitas hidup, dan mendukung keberlanjutan lingkungan bagi generasi mendatang.</p>
    </div>

    <div class="box">
        <i class="fas fa-tree"></i>
        <h3>Support SDGs</h3>
        <p>Tujuan Pembangunan Berkelanjutan (SDGs) yang ditetapkan oleh PBB untuk mengakhiri kemiskinan, melindungi planet ini, dan memastikan kesejahteraan bagi semua pada tahun 2030. melibatkan upaya dalam berbagai bidang seperti pendidikan, kesehatan, air bersih, energi terjangkau, dan aksi iklim. Mendukung SDGs berarti berkontribusi pada pembangunan yang berkelanjutan di seluruh dunia.</p>
    </div>

</div>

</section>



<!-- custom js file link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="main.js"></script>

</body>
</html>