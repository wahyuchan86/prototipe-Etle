<!DOCTYPE html>
<?php

include 'koneksi.php';

$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if( isset($_POST['submit']) ){
        // menghilangkan backshlases
        $username       = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username       = mysqli_real_escape_string($conn, $username);
        $namalengkap    = stripslashes($_POST['namalengkap']);
        $namalengkap    = mysqli_real_escape_string($conn, $namalengkap);
        $email          = stripslashes($_POST['email']);
        $email          = mysqli_real_escape_string($conn, $email);
        $password       = stripslashes($_POST['password']);
        $password       = mysqli_real_escape_string($conn, $password);
        $repassword     = stripslashes($_POST['repass']);
        $repassword     = mysqli_real_escape_string($conn, $repassword);
        
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($namalengkap)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repassword))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repassword){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($namalengkap,$conn) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO account (username, namalengkap, email, password, level) VALUES ('$username','$namalengkap','$email','$password','user')";
                    $result   = mysqli_query($conn, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman login.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                        
                        header('Location: login.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$conn){
        $namalengkap = mysqli_real_escape_string($conn, $username);
        $query = "SELECT * FROM account WHERE username = '$username'";
        if( $result = mysqli_query($conn, $query) ) return mysqli_num_rows($result);
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="assets/css/style register.css">
    <link rel="icon" href="assets/images/logo-digital.png">
    <title>Sign Up</title>
    <body>
        <div class="box">
            <div class="form">
                <form action="register.php" method="POST">
                <h2>Register</h2>
                <div class="inputBox">
                    <input type="text" id="username" name="username" required>
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" id="InputEmail" name="email" required>
                    <span>Email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" id="namalengkap" name="namalengkap" required>
                    <span>Nama Lengkap</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" id="InputPassword" name="password" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" id="InputPassword" name="repass" required>
                    <span>Re-Password</span>
                    <i></i>
                </div>
                <input type="submit" name="submit" value="Register">
                <center><a href="login.php">Login</a></center>
                <center><a href="index.php">Beranda</a></center>
                </form>
            </div>
        </div>
    </body>
</head>
</html>