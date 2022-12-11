<?php
        require 'myconfig.php';
        if(!empty($_SESSION["id"])){
            header("Location: myindex.php");
        }
        if(isset($_POST['add'])){
            $login = $_POST["login"];
            $password = $_POST["password"];
            $result = mysqli_query($conn, "SELECT * FROM users WHERE login = '$login'");
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) > 0) {
                if($password == $row['password']) {
                    $_SESSION["login"] = true;
                    $_SESSION["id"] = $row["id"];
                    header("Location: myindex.php");
                }
                else{
                    echo
                    "<script> alert('Złe hasło'); </script>";
                }
            }
            else{
                echo
                "<script> alert('Użytkownik nie zarejestrowany'); </script>";
            }
        }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="pain_zadanko_rejlog/style.css">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="post" autocomplete="off">
        <label for="login"></label>
        <input type="text" name="login" placeholder="Login" id = "login" required value=""><br><br>
        <label for="password"></label>
        <input type="password" name="password" placeholder="Password" id = "password" required value=""><br><br>
        <button type="submit" name="add" >LOGIN</button>
    </form>
    <br>
    <a href="myregistriaton.php">Rejestracja</a>

</body>
</html>