
<?php
include('library/koneksi.php');
 
//tangkap data dari form login
$username = $_POST['user'];
$password = $_POST['pass'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
    echo"<script>alert('Maaf data yang anda masukkan tidak lengkap');
      document.location.href='index.php'; </script>\n";
    break;
} 
 
$q = mysql_query("select * from login where username='$username' and password='$password'");
 
if (mysql_num_rows($q) == 1) {
    echo"<script>alert('Selamat Datang Admin');
      document.location.href='admin/index.php'; </script>\n";
} else {
   echo "<script>alert('Maaf Username / Password tidak dikenal!!'); document.location.href='index.php';</script>";;
}
 ?>