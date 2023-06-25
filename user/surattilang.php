<?php
include 'koneksi.php';
// If the user is not logged in redirect to the login page... (agar auto ke index saat blm login)
if($_SESSION['level'] !='user'){
    header("location:../index.php");
}  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Surat Tilang</title>
  <link rel="icon"  href="assets/images/logo-digital.png">
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.5;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .content {
      max-width: 600px;
      margin: 0 auto;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h2 {
      font-size: 18px;
      margin: 0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
	  text-align: center;
    }
	p {
		font-size: 20px;
	}
  </style>
</head>
<body>
  <div class="content">
    <div class="header">
		<center>
			<table>
				<tr>
					<td><img src="assets/images/logo-digital.png" width="90" height="90"></td>
					<td>
					<center>
						<font size="4">LEMBAGA PENGAWASAN KETERTIBAN JALAN</font><br>
						<font size="5"><b>PANTAU DIGITAL</b></font><br>
						<font size="2">Bidang Humas - Teknologi informasi dan Komunikasi</font><br>
						<font size="2"><i>Jl. Panjang Jangan Lupa Pulang No. 99 Kode Pos : 68173 Telp./Fax (0331)758005 Jawa Tengah</i></font>
					</center>
					</td>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>
    <table>
		<strong><p>Detail Informasi Tilang </p></strong>
      <br>
      <tr>
        <td>Nama</td>
        <td>Nama Pelanggar</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>Laki - Laki</td>
      </tr>
      <tr>
        <td>No Polisi Kendaraan</td>
        <td>112asss</td>
      </tr>
      <tr>
        <td>Jenis Kendaraan</td>
        <td>Motor</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>aaxxxx</td>
      </tr>
	  <tr>
        <td>Pekerjaan</td>
        <td>aaxxxx</td>
      </tr>
      <tr>
        <td>No SIM</td>
        <td>aaxxxx</td>
      </tr>
      <tr>
        <td>No HP</td>
        <td>0821111010</td>
      </tr>
      <tr>
        <td>Denda</td>
        <td>Besaran denda</td>
      </tr>
	  <tr>
        <td>Bukti</td>
        <td></td>
      </tr>
    </table>
	<br>
	<button onclick="window.print();return false"; title="Click to print this page">Cetak Bukti</a></button>
  </div>
</body>

</html>
