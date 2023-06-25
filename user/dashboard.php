<?php
include "koneksi.php";
// If the user is not logged in redirect to the login page... (agar auto ke index saat blm login)
if($_SESSION['level'] !='user'){
    header("location:../index.php");    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tilang</title>
    <link rel="icon"  href="assets/images/logo-digital.png">
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="logo">
                            <img src="assets/images/logo-digital.png">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="cektilang.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Cek Tilang</span>
                    </a>
                </li>

                <li>
                    <a href="settings.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="../logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <p>Selamat Datang <?php echo $_SESSION ['username']?></p>
                    </label>
                </div>
                <div> </div>
            
            </div>
            <br>

            
            <!-- ================ Formulir Tilang ================= -->
            <br>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Jumlah Pelanggar</div>
                    </div>
                </div>
            </div>
            

            <div class="formtilang">
                <div class="inputdata">
                    <div class="cardHeader">
                        <h2></h2>
                    </div>
                    <br>
                    <div class="content-data">
                        <p>Aturan untuk penindakan pelanggaran di jalan dengan alat elektronik ini diatur dalam Pasal 272 UU Nomor 22 Tahun 2009 yang menyebutkan bahwa untuk mendukung kegiatan penindakan 
                            pelanggaran lalu lintas dan angkutan jalan dapat digunakan peralatan eleketronik, dan hasilnya dapat digunakan sebagai alat bukti di pengadilan.
                        </p>
                    </div>
                   
                    <table>     
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Alamat</td>
                                <td>Status</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>$110</td>
                                <td>Due</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>$620</td>
                                <td>Due</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            
                        </tbody>
                    </table>
                </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>