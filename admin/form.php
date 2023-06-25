<?php
include "koneksi.php";
// If the admin is not logged in redirect to the login page... (agar auto ke index saat blm login)
if($_SESSION['level'] !='admin'){
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
                    <a href="form.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Form Tilang</span>
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
                        <p>FORMULIR TILANG</p>
                    </label>
                </div>

                <div> </div>
            
            </div>
            <br>

            <!-- ================ Formulir Tilang ================= -->
            <div class="formtilang">
                <div class="inputdata">
                    <div class="cardHeader">
                        <h2></h2>
                        <a href="forminputdata.php" class="btn">Tambah</a>
                    </div>

                    <table>
                        
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Jenis Kelamin</td>
                                <td>No Polisi</td>
                                <td>No SIM</td>
                                <td>Denda</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
        
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM formulir WHERE 1");
                            while ($data = mysqli_fetch_assoc($sql)) {
                        ?>
                            <tr>
                                
                                <td><?= $data["nama"] ?></td>
                                <td><?= $data["jeniskelamin"] ?></td>
                                <td><?= $data["nopol"] ?></td>
                                <td><?= $data["nosim"] ?></td>
                                <td><?= $data["denda"] ?></td>
                                <td>
                                    <button><a href="" class="btn">Update</a></button>
                                    <button><a href="" class="btn">Delete</a></button>
                                </td>
                            <?php
                            }
                            ?>
                            
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