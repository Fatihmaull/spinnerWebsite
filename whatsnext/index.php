<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whats Next</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar-nav .nav-link {
            margin-right: 15px; 
            font-size: 1.25rem; 
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
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
     <!-- NAVBAR BERES -->
    <!-- CONTENT 1 -->
    <div class="card-list" style="margin-bottom: 50px; padding-bottom: 0;">
        <div class="card-item">
            <img src="images/pl.jpg" alt="Gambar Kartu">
            <span class="developer">Teknologi</span>
            <h3>Our UrbanTech Initiative</h3>
            <p>Write a couple of sentences describing your plans for the coming year</p>
            <button class="arrow" onclick="tampilkanPopup('popup-pengembang')">
                Selengkapnya
            </button>
            <div id="popup-pengembang" class="popup-info">
                <div class="popup-content">
                    <h2 class="category">Berita</h2>
                    <p class="post-description">Tentu, berikut adalah deskripsi yang lebih panjang untuk "Our UrbanTech Initiative":

                        "Melalui Inisiatif UrbanTech kami, kami mendorong inovasi teknologi di lingkungan perkotaan untuk menciptakan kota-kota yang lebih cerdas, berkelanjutan, dan inklusif. Dengan fokus pada solusi berbasis teknologi untuk transportasi, energi, infrastruktur, dan keberlanjutan lingkungan, kami membangun jembatan antara sektor publik, swasta, dan masyarakat sipil. Tujuan kami adalah menghadirkan solusi yang dapat mengoptimalkan penggunaan sumber daya, meningkatkan kualitas hidup, dan menciptakan lingkungan perkotaan yang ramah lingkungan serta responsif terhadap kebutuhan penduduknya."
                        
                        Jika ada yang perlu disesuaikan atau diperinci lebih lanjut, silakan beritahu saya.</p>
                    <button class="close-popup-btn" onclick="tutupPopup('popup-pengembang')"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>
        <div class="card-item">
            <img src="images/kk.jpg" alt="Gambar Kartu">
            <span class="designer">Perubahan positif</span>
            <h3>Nurturing Tomorrow's Changemakers.</h3>
            <p>Membina pemimpin masa depan untuk perubahan positif</p>
            <button class="arrow" onclick="tampilkanPopup('popup-desainer')">
                Selengkapnya
            </button>
            <div id="popup-desainer" class="popup-info">
                <div class="popup-content">
                    <h2 class="category">perubahan positif</h2>
                    <p class="post-description">Membina para pembawa perubahan masa depan melalui pendidikan holistik, pelatihan keterampilan, dan pemberdayaan komunitas. Kami berkomitmen untuk menghadirkan generasi yang tidak hanya berpengetahuan luas tetapi juga dilengkapi dengan nilai-nilai keberlanjutan dan kepemimpinan. Dengan menyediakan platform untuk kolaborasi lintas budaya dan disiplin ilmu, kami menginspirasi dan mempersiapkan mereka untuk menghadapi tantangan global, memimpin inovasi, dan mempromosikan perubahan positif yang berkelanjutan di seluruh dunia.</p>
                    <button class="close-popup-btn" onclick="tutupPopup('popup-desainer')"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>
        <div class="card-item">
            <img src="images/aa.jpg" alt="Gambar Kartu">
            <span class="editor">Lingkungan</span>
            <h3>Growing Roots for a Greener Future.</h3>
            <p>Tumbuh akar, Hijaukan masa depan</p>
            <button class="arrow" onclick="tampilkanPopup('popup-editor')">
                Selengkapnya
            </button>
            <div id="popup-editor" class="popup-info">
                <div class="popup-content">
                    <h2 class="category">Growing Roots for a Greener Future</h2>
                    <p class="post-description">Bersama kita tumbuhkan akar untuk masa depan yang lebih hijau. Melalui inisiatif dan aksi nyata, kita dapat menciptakan lingkungan yang lebih sehat dan berkelanjutan bagi generasi mendatang. Dengan menanam pohon, mengurangi jejak karbon, dan memperjuangkan konservasi alam, kita menumbuhkan akar-akar perubahan yang kokoh. Mari bergandengan tangan dalam misi ini, karena masa depan yang hijau dimulai dari langkah kecil kita hari ini. Setiap pohon yang kita tanam, setiap langkah yang kita ambil, adalah investasi untuk dunia yang lebih baik.</p>
                    <button class="close-popup-btn" onclick="tutupPopup('popup-editor')"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT 1 BERES -->
     <!-- Button link -->
    <div class="text-center mb-4">
        <a href="../spinner/index.php" class="btn btn-primary btn-lg">Go to Spinner Page</a>
    </div>
    <!-- JavaScript -->
    <script>
        function tampilkanPopup(popupId) {
            document.getElementById(popupId).style.display = 'flex';
        }

        function tutupPopup(popupId) {
            document.getElementById(popupId).style.display = 'none';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
