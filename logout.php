<?php
session_start();
session_destroy();
echo "<script>alert('Anda telah berhasil keluar.'); 
window.location = 'index.php'</script>";

?>

<script src="../assets/js/logout.js"></script>