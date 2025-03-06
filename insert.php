<?php 
include("connection.php");
$nama =$_POST["name"];
$jk =$_POST["gender"];
$alamat =$_POST["address"];
$tempat_lahir =$_POST["birth_place"];
$tanggal_lahir =$_POST["birth_date"];
$nomor =$_POST["phone"];

try{
    //CODE dibawah ini jika menggunakan connection PDO(PHP Document Object)
    $db->query("INSERT INTO employes (name,gender,address,birth_place,birth_date,phone) 
    VALUES ('$nama','$jk','$alamat','$tempat_lahir','$tanggal_lahir','$nomor')");

    //code dibawah ini jika menggunakan mysqli
    // mysqli_query($con,"INSERT INTO employes (name,gender,address,birth_place,birth_date,phone) 
    // VALUES ('$nama','$jk','$alamat','$tempat_lahir','$tanggal_lahir','$nomor')");
    
    header("location:list.php");
}catch(Exception $e){
    echo"Gagal :" . $e->getMessage();
}
?>