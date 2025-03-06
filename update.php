<?php 
include("connection.php");

$id = $_POST['id'];
$nama = $_POST['name'];
$jk= $_POST['gender'];
$alamat = $_POST['address'];
$tempat_lahir = $_POST['birth_place'];
$tanggal_lahir = $_POST['birth_date'];
$nomor = $_POST['phone'];

    try{
    //Code dibawah jika menggunakan PDO(PHP Document Object)
    $query = $db->query("UPDATE employes 
        SET name='$nama',
        gender='$jk',
        address='$alamat',
        birth_place='$tempat_lahir',
        birth_date='$tanggal_lahir',
        phone='$nomor'
      WHERE  id = $id");
      
    //code dibawah jika menggunakan mysqli
    // $query2 = mysqli_query($con,"UPDATE employes 
    //     SET name='$nama',
    //     gender='$jk',
    //     address='$alamat',
    //     birth_place='$tempat_lahir',
    //     birth_date='$tanggal_lahir',
    //     phone='$nomor'
    //   WHERE  id = $id");
      header("location:list.php"); 
      
    }catch(Exception $e){
      echo"Gagal :" . $e->getMessage();
    }
?>
