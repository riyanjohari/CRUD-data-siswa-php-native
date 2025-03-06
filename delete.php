<?php 
include("connection.php");
$id = $_GET['id'];
try{
  //code dibawah jika menggunakan PDO(PHP Document Object)
  $query = $db->query("DELETE FROM employes WHERE id = $id");

  //code dibawah jika menggunakan mysqli
  // $query = mysqli_query($con, "DELETE FROM employes WHERE id = $id");
  header("location:list.php");
}catch(Exception $e){
    echo"Gagal :" . $e->getMessage();
}

?>