<?php
include "koneksi.php";

if( isset($_POST['submit']) ){
    $kode           = $_POST['kode'];
    $nama           = $_POST['nama'];
    $jk             = $_POST['jeniskelamin'];
    $nopol          = $_POST['nopol'];
    $kendaraan      = $_POST['jeniskendaraan'];
    $alamat         = $_POST['alamat'];
    $pekerjaan      = $_POST['pekerjaan'];
    $nosim          = $_POST['nosim'];
    $nohp           = $_POST['nohp'];
    $bukti          = $_POST['bukti'];

    $ekstensi_diperbolehkan	= array('png','jpg');
    $bukti = $_FILES['bukti']['nama'];
    $x = explode('.', $bukti);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['bukti']['size'];
    $file_tmp = $_FILES['bukti']['tmp_name'];	
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, 'bukti'.$bukti);
        }
      }
      
      if($nama=="")
    {
      // echo "NAMA kosong belum diisi, ";
      echo "<script>alert('Nama Belum Diisi'); window.location = 'admin/forminputdata.php'</script>";
    }
    if($jk=="")
    {
      echo "<script>alert('Jenis Kelamin Belum Dipilih'); window.location = 'admin/forminputdata.php'</script>";
    }
    if($nopol=="")
    {
      echo "<script>alert('No Polisi Belum Diisi'); window.location = 'admin/forminputdata.php'</script>";
    }
    if($kendaraan=="")
    {
      echo "<script>alert('Jenis Kendaraan Belum Dipilih'); window.location = 'admin/forminputdata.php'</script>";
    }
    if($alamat=="")
    {
      echo "<script>alert('Alamat Belum Diisi'); window.location = 'admin/forminputdata.php'</script>";
    }
    if($pekerjaan=="")
    {
      echo "<script>alert('Pekerjaan Belum Diisi'); window.location = 'admin/forminputdata.php'</script>";
    }
    if($nosim=="")
    {
      echo "<script>alert('No SIM Belum Diisi'); window.location = 'admin/forminputdata.php'</script>";
    }
    if($nohp=="")
    {
      echo "<script>alert('No HP Belum Diisi'); window.location = 'admin/forminputdata.php'</script>";
    }

      else
    {
     
    /* cek input apakah sudah ada nopol yang digunakan */
       $pilih="SELECT * FROM formulir WHERE nopol='$nopol'";
       $cek=mysqli_query($conn, $pilih);
     
       $jumlah_data = mysqli_num_rows($cek);
       if ($jumlah_data >= 1 ) 
       {
     
      echo "<script>alert('No Polisi yang sama sudah digunakan'); window.location = 'admin/forminputdata.php'</script>";
        }
       else
    {
     
    // query untuk insert data 
       $query="INSERT INTO formulir SET kode='$kode', nama='$nama',jeniskelamin='$jk',nopol='$nopol',jeniskendaraan='$kendaraan',alamat='$alamat',pekerjaan='$pekerjaan',nosim='$nosim',nohp='$nohp',bukti='$bukti'";
    mysqli_query($conn, $query);
     
    // echo " Input Data yang anda masukkan sukses berhasil";
     
    echo "<script>alert('Data yang anda Input sukses');window.location='admin/form.php'</script>";
        }
     }
}
?>

