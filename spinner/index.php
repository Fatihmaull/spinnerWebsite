<?php   
include "../service/auth.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
 ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roda Putar</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #69ad6c;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            flex-direction: column;
        }

        .spinner-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 500px;
            height: 500px;
            background-color: #ccc;
            border-radius: 50%;
            border: 15px solid #dde;
            position: relative;
            overflow: hidden;
            transition: transform 5s cubic-bezier(0.1, 0.57, 0.1, 1);
        }

        .container div {
            height: 50%;
            width: 100%;
            position: absolute;
            clip-path: polygon(50% 100%, 0 0, 100% 0);
            transform-origin: 50% 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
            color: #fff;
        }

        .container .one {
            background-color: #3f51b5;
            transform: rotate(0deg);
        }

        .container .two {
            background-color: #ff9800;
            transform: rotate(72deg);
        }

        .container .three {
            background-color: #e91e63;
            transform: rotate(144deg);
        }

        .container .four {
            background-color: #4caf50;
            transform: rotate(216deg);
        }

        .container .five {
            background-color: #009688;
            transform: rotate(288deg);
        }

        .arrow {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
        }

        .arrow::before {
            content: "\1F817";
            font-size: 50px;
        }

        #spin {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            background-color: #e2e2e2;
            text-transform: uppercase;
            border: 8px solid #fff;
            font-weight: bold;
            font-size: 20px;
            color: #a2a2a2;
            width: 90px;
            height: 90px;
            font-family: sans-serif;
            border-radius: 50%;
            cursor: pointer;
            outline: none;
            letter-spacing: 1px;
        }

        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="spinner-container">
        <button id="spin">Putar</button>
        <span class="arrow"></span>
        <div class="container">
            <div class="one">Membuang<br/>sampah</div>
            <div class="two">Bawa botol<br/>minum sendiri</div>
            <div class="three">Menghemat<br/>energi</div>
            <div class="four">Bawa katong<br/>belanja sendiri</div>
            <div class="five">Membersihkan<br/>lingkungan</div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="resultModal" class="modal">
        <div class="modal-content">
            <!-- <span class="close">&times;</span> -->
            <table>
                <thead>
                    <tr>
                        <th>Tugas</th>
                    </tr>
                </thead>
                <tbody id="resultBody">
                    <!-- Hasil akan ditambahkan di sini -->
                </tbody>
            </table>

            <div style="margin-top:20px;">
                 <a href="../home2/index.php" style="background: green; padding: 5px; margin: 5px;color: white; text-decoration:none;">Kembali</a>
    </div>
        </div>
    </div>

    <script>
        let container = document.querySelector(".container");
        let btn = document.getElementById("spin");
        let modal = document.getElementById("resultModal");
        let closeModal = document.querySelector(".close");
        let resultBody = document.getElementById("resultBody");
        let angle = 0;
        let spinCount = 0;
        const tasks = [
            "Membuang sampah", 
            "Bawa botol minum sendiri<", 
            "Menghemat energi", 
            "Bawa katong belanja sendiri", 
            "Membersihkan lingkungan"
        ];

        btn.onclick = function () {
            let number = Math.ceil(Math.random() * 360) + 720; // Memastikan setidaknya 2 putaran penuh
            angle += number;
            container.style.transform = "rotate(" + angle + "deg)";
            container.addEventListener("transitionend", showResult, { once: true });
        }

        // closeModal.onclick = function () {
        //     modal.style.display = "none";
        // }

        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }

       function showResult() {
    spinCount++;
    let result = (360 - (angle % 360)) % 360;
    let sectionIndex = Math.floor(result / 72);
    let selectedTask = tasks[sectionIndex];

    let newRow = document.createElement("tr");
    let cell2 = document.createElement("td");

    cell2.textContent = selectedTask;

    newRow.appendChild(cell2);

    resultBody.appendChild(newRow);

    modal.style.display = "block";

   window.location.href = "spin_db.php?data="+selectedTask;
}
    </script>
    <?php 
  

    function sudahSpinHariIni() {
    include "../service/connection.php";
    $today = date("Y-m-d");
    $sql = "SELECT * FROM spin WHERE tanggal = '$today' AND userid = '".$_SESSION['user_id']."'";
    $result = $conn->query($sql);

    // Memeriksa apakah ada hasil spin hari ini
    $hasResults = $result->num_rows > 0;

    // Menyiapkan array untuk menyimpan jumlah baris dan hasil
    $data = array();
    $data['num_rows'] = $result->num_rows;

    // Jika ada hasil, tambahkan hasil ke dalam array
    if ($hasResults) {
        $data['results'] = array();
        while ($row = $result->fetch_assoc()) {
            $data['results'][] = $row;
        }
    }

    return $data;
}

$tes = sudahSpinHariIni();

if($tes['num_rows'] > 0){
    echo '<script>
    modal.style.display = "flex";
    let newRow = document.createElement("tr");
    let cell2 = document.createElement("td");

    cell2.textContent = "'.$tes['results'][0]['dataspin'].'";

    newRow.appendChild(cell2);

    resultBody.appendChild(newRow);</script>';
    
}
    
    ?>
</body>
</html>