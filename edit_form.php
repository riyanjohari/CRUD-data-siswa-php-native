<?php
include("connection.php");
$id = $_GET["id"];
try{
  //code dibawah jika menggunakan PDO(PHP Document Object)
  $query = $db->query("SELECT * FROM employes WHERE id = $id");
  
  //code dibawah jika menggunakan mysqli
  // $query = mysqli_query($con, "SELECT * FROM employes WHERE id = $id");
  // echo"berhasil menanggkap data";
}catch(Exception $e){
  echo"gagal :" . $e->getMessage();
}
//code dibawah jika menggukana PDO(PHP Document Object)
$data = $query->fetch();

//code dibawah jika menggunakan mysqli
// $data = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Edit data</title>
</head>
<body>
  <h1>EDIT DATA FORM</h1>
  <form action="update.php" method="POST">

  <input type="hidden" name="id" value="<?= $data['id']; ?>">

  <label for="name">Name</label><br>
    <input type="text" id="name" name="name"  value="<?= $data["name"];?>" htmlspecialchars>
    <br><br>
    
    <label for="gender">gender</label><br>
    <select name="gender" id="gender">
      <option value="Male" <?php if($data["gender"] == "Male") echo "selected";?> >Male</option>
      <option value="Female" <?php if($data["gender"] == "Female") echo "selected"; ?> >Female</option>
    </select>
    <br><br>

    <label for="address">address</label><br>
    <textarea name="address" id="address" htmlspecialchars ><?= $data["address"];?></textarea>
    <br><br>

    <label for="birth_place">Birth Place</label><br>
    <input type="text" id="birth_place" name="birth_place" value="<?= $data["birth_place"];?>" htmlspecialchars>
    <br><br>
    <label for="birth_date">Birth Date</label><br>
    <input type="date" name="birth_date" id="birth_date" value="<?= $data["birth_date"];?>" htmlspecialchars >
    <br><br>
    <label for="phone">Phone Number <i>(Optional)</i> </label><br>
    <input type="text" id="phone" name="phone" value="<?= $data["phone"];?>" htmlspecialchars>
    <br><br>
    <button type="submit">Save</button>
    <a href="list.php">&laquo; Back  </a>
  </form>
</body>
</html>

