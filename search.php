<?php 
include("connection.php");
$search = $_GET["search"];
try{
  //code dibawah ini jika menggunakan PDO(PHP Document Object) 
  $query = $db->query("SELECT * FROM employes WHERE 
    name LIKE '%$search%' OR
    gender LIKE '%$search%'");
    
  //code dibawah ini jika menggunakan mysqli
  // $query = mysqli_query($con, "SELECT * FROM employes WHERE 
  //   name LIKE '%$search%' OR
  //   gender LIKE '%$search%'");
}catch(Exception $e){
  echo"Gagal :" . $e->getMessage();
}
$result = $query->fetchAll();

//code dibawah jika menggunakan mysqli
// $result = mysqli_fetch_all($query, MYSQLI_ASSOC );
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA PEGAWAI</title>
</head>
<body>
  <a href="list.php"><h3>DATA PEGAWAI</h3></a>
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