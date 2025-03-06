<?php 
include("connection.php");
$id = $_GET['id'];
try{
    $query= $db->query("SELECT*FROM employes WHERE id =$id");
  //CODE dibawah jika menggukana mysqli
  // $query = mysqli_query($con, "SELECT*FROM employes WHERE id =$id");
}catch(Exception $e){
  echo"Gagal :" . $e->getMessage();
}
$data = $query->fetch();
// $data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<body>
  <h2>DATA LENGKAP PEGAWAI</h2>
  <table border="1" cellpadding="5" cellspacing="3">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGAL LAHIR</th>
        <th>NOMOR</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $data['id'];?></td>
        <td><?= $data['name'];?></td>
        <td><?= $data['gender'];?></td>
        <td><?= $data['address'];?></td>
        <td><?= $data['birth_place'];?></td>
        <td><?= $data['birth_date'];?></td>
        <td><?= $data['phone'];?></td>
      </tr>
    </tbody>
  </table>
  <br>  
  <a href="list.php">&laquo; kembali</a>
</body>
</html>