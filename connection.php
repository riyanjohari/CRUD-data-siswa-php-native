<?php
//code dibawah jika menggukana PDO (PHP Document Object)
$db = new PDO("mysql:host=localhost;dbname=perusahaan", "root", "");

//code dibawah jika ingin connect menggunakan mysqli
// $con = mysqli_connect("localhost", "root" , "", "perusahaan");

try{
  //dibawah menggunaan PDO ATAU OBJECT ORIENTED PROGRAMMING
  $db = new PDO("mysql:host=localhost;dbname=perusahaan", "root", "");

  //sedangkan yang dibawah ini khusus jika hanya menggunakan mysql saja
  // $con = mysqli_connect("localhost", "root" , "", "perusahaan");
  // echo"berhasil broow"; 
}catch(Exception $e){
  echo"gagal :" .$e->getMessage();
}

// pengecekan kondisi menggunakan if
// if(mysqli_connect_errno()){
//   echo"gagal terkoneksi" . mysqli_connect_errno();
//   exit;
// }else{
//   echo"koneksi berhasil";
// }
?>