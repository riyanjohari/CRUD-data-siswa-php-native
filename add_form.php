<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>ADD DATA</title>
</head>
<body>
  <h1>ADD DATA FORM</h1>
  <form action="insert.php" method="POST">
  <label for="name">Name</label><br>
    <input type="text" id="name" name="name" htmlspecialchars>
    <br><br>
    
    <label for="gender">Gender</label><br>
    <select name="gender" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    <br><br>

    <label for="address">Address</label><br>
    <textarea name="address" id="address" htmlspecialchars></textarea>
    <br><br>

    <label for="birth_place">Birth Place</label><br>
    <input type="text" id="birth_place" name="birth_place" htmlspecialchars>
    <br><br>
    <label for="birth_date">Birth Date</label><br>
    <input type="date" name="birth_date" id="birth_date" htmlspecialchars>
    <br><br>
    <label for="phone">Number Phone <i>(optional)</i></label><br>
    <input type="text" id="phone" name="phone" htmlspecialchars>
    <br><br>
    <button type="submit">Save</button>
    <a href="list.php">&laquo; Back  </a>
  </form>
</body>
</html>