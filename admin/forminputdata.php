<?php
include "koneksi.php";

// If the admin is not logged in redirect to the login page... (agar auto ke index saat blm login)
if($_SESSION['level'] !='admin'){
    header("location:../index.php");    
}

//fungsi untuk menggenerate kode acak baru.
function generateRandomString() {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    do{
        //mengenerate string acak dengan panjang 8 karakter.
        $randomString ="";
        for ($i=0; $i < 8 ; $i++) { 
            # code...
            $index=rand(0,strlen($characters)-1);
            $randomString.=substr($characters,$index,1);    
        }
        
      	//cek apakah sudah ada session atau belum.
      	if(isset($_SESSION['kode_acak']) && $_SESSION['kode_acak'] == $randomString){
        	continue;
      	}else{
          	break;
        }        
    }while(true);

  	$_SESSION['kode_acak'] = $randomString;

    return strtoupper($randomString);
}
$kode = generateRandomString();

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
                    </div>
                    
                    <form action="../aksiinput.php" method="POST" enctype="multipart/form-data" name="input-data">
                      <p align="right">No Formulir : <strong><?php echo generateRandomString(); ?></strong>
                      </p>
                      <div class="main-user-info">
                        <div class="user-input-box">
                          <label for="nama">Nama Pelanggar</label>
                          <input type="text" id="nama" name="nama" placeholder="Masukan Nama Pelanggar"/>
                        </div>
                        <div class="user-input-box">
                          <label for="jeniskelamin">Jenis Kelamin</label>
                          <select name="jeniskelamin" id="jk" required>
                            <option>Pilih</option>
                            <option>Laki - Laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                        <div class="user-input-box">
                          <label for="Nopol Kend">Nomor Polisi Kendaraan</label>
                          <input type="text" id="nopol" name="nopol" placeholder="Masukan Nomor Polisi Kendaraan"/>
                        </div>
                        <div class="user-input-box">
                          <label for="jeniskendaraan">Jenis Kendaraan</label>
                          <select name="jeniskendaraan" id="kendaraan" required>
                            <option>Pilih</option>
                            <option>Sepeda Motor</option>
                            <option>Mobil</option>
                            <option>Bus</option>
                            <option>Truk</option>
                          </select>
                        </div>
                        <div class="user-input-box">
                          <label for="Alamat">Alamat</label>
                          <input type="text" id="alamat" name="alamat" placeholder="Masukan Alamat Pelanggar"/>
                        </div>
                        <div class="user-input-box">
                          <label for="pekerjaan">Pekerjaan</label>
                          <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan"/>
                        </div>
                        <div class="user-input-box">
                          <label for="nosim">Nomor SIM</label>
                          <input type="text" id="nosim" name="nosim" placeholder="Masukan No Handphone"/>
                        </div>
                        <div class="user-input-box">
                          <label for="nohp">No Handphone</label>
                          <input type="text" id="nohp" name="nohp" placeholder="Masukan No Handphone"/>
                        </div>
                        <div class="user-input-box">
                          <label for="bukti">Bukti Foto</label>
                          <input type="file" id="bukti" name="bukti">
                        </div>
                      </div>
                      <div class="form-submit-btn">
                        <input type="submit" name="submit" value="Kirim">
                      </div>
                    </form>
                </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script srt="ässets/js/randomnumber.js"></script>
    <script src="../assets/js/logout.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>