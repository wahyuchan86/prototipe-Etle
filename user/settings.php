<?php
include 'koneksi.php';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Tilang</title>
    <link rel="icon"  href="assets/images/logo-digital.png">
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/stylesetting.css">
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
                        <p>SETTINGS</p>
                    </label>
                </div>
                <div> </div>
                
            </div>
            <br>

            <!-- ================ Formulir Tilang ================= -->
            <div class="formtilang">
                <div class="inputdata">
                    <div class="cardHeader">
                    <form action="change-p.php" method="post">
                        <center><h3>Ubah Password</h3></center>
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
               
                        <?php if (isset($_GET['success'])) { ?>
                           <p class="success"><?php echo $_GET['success']; ?></p>
                       <?php } ?>

                       <br>
                        <label                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       >Password Lama</label>
                        <input type="password" name="op" placeholder="Masukan password lama Anda">
                        <br>
               
                        <label>Password Baru</label>
                        <input type="password" name="np" placeholder="Masukan password baru Anda">
                        <br>
               
                        <label>Konfirmasi Password Baru</label>
                        <input type="password" name="c_np" placeholder="Masukan password baru Anda">
                        <br>
               
                        <button type="submit">CHANGE</button>
                    </form>
                </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script srt="assets/js/randomnumber.js"></script>
    <script src="../assets/js/logout.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>