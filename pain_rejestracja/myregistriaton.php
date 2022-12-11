<?php
require 'myconfig.php';
if(!empty($_SESSION["id"])){
    header("Location: myindex.php");
}
if(isset($_POST["submit"])){
    $login = $_POST["login"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $role = $_POST["role"];
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE login = '$login'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Login jest już w użyciu'); </script>";
    }
    else{
    if($password == $confirmpassword) {
    $query = "INSERT INTO users VALUES('', '$login', '$password', '$name', '$surname', '$age', '$role')";
    mysqli_query($conn,$query);
    echo
    "<script> alert('Rejestracja przeszła pomyślnie'); </script>";

    }
    
    else{
    echo
    "<script> alert('Nie udało się zarejestrować'); </script>";
    
}
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="login">Login: </label>
        <input type="text" name="login" id="login" required value=""> <br><br>
        <label for="password">Hasło: </label>
        <input type="text" name="password" id="password" required value=""> <br><br>
        <label for="confirmpassword">Potwierdź hasło: </label>
        <input type="text" name="confirmpassword" id="confirmpassword" required value=""> <br><br>
        <label for="name">Imię: </label>
        <input type="text" name="name" id="name" required value=""> <br><br>
        <label for="surname">Nazwisko: </label>
        <input type="text" name="surname" id="surname" required value=""> <br><br>
        <label for="age">Wiek: </label>
        <input type="text" name="age" id="age" required value=""> <br><br>
        <label for="role">Rola: </label>
        <input type="text" name="role" id="role" required value=""> <br><br>
        <button type="submit" name="submit">Zarejestruj</button>
    </form>
    <br>
    <a href="login_p.php">Login</a>
</body>
</html>