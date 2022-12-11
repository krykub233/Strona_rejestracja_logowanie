<?php
require 'myconfig.php';
if(!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login_p.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Witamy!<h1>
    <h2>Oto twoje dane: <h2>
    <h3>Imię: <?php echo $row["name"]; ?></h3>
    <h3>Nazwisko: <?php echo $row["surname"]; ?></h3>
    <h3>Wiek: <?php echo $row["age"]; ?></h3>
    <h3>Rola: <?php echo $row["role"]; ?></h3>
    <br>
    <a href="mylogout.php">Logout</a>
</body>
</html>