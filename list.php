<?php 
include("connection.php");

try{ 
  //ini jika menggunakan pdo, dan sebenarnya tidak perlu menggunakan fetch all karena sudah mengembalikan nilai DATA akan tetapi tetap digunakan sebagai disiplin saja
  $query = $db->query("SELECT * FROM employes");
  $result =$query->fetchAll();

  //code dibawah jika menggunakan mysqli 
  // $query = mysqli_query($con, "SELECT * FROM employes");
  
}catch(Exception $e){
  echo"Gagal :" . $e->getMessage();
}
//code dibawah jika menggukan mysqli
// $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

//code ini hanya untuk melihat data yang sudah ditangkap
// echo "<pre>"; 
// print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA PEGAWAI</title>
</head>
<body>
  <h3>LIST DATA PEGAWAI</h3>
<br>  
<a href="add_form.php">Tambah data</a>
<br><br>  
<form action="search.php" method="GET">
    <input type="text" name="search" placeholder="Ketikan Pencarian">
    <button type="submit">Cari</button>
</form>
<br>
  <table border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>GENDER</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <?php foreach($result as $pegawai => $data) : ?>
    <tbody>
      <tr>
        <td><?= $pegawai +1;?></td>
        <td><?= $data['name'];?></td>
        <td><?= $data['gender'];?></td>
        <td>
          <a href="profile.php?id=<?= $data["id"];?>">More</a>
          <a href="edit_form.php?id=<?= $data["id"];?>">Edit</a>
          <a href="delete.php?id=<?= $data["id"];?>">Delete</a>
      </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</body>
</html>

