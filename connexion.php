<?php
include 'header.php';
require_once('User.php');


if(isset($_POST["submit"])){
    
        $login = htmlspecialchars($_POST["login"]);
        $password = htmlspecialchars($_POST["password"]);
       
       
    $user = new User($login,$password);
    $user->connect($login,$password);

    $_SESSION['login'] = $login;
    
}
?>




<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="connexion.css">
    </head>
   
    <body>

    <div class="container">
        <div class="form1">
            <form action="" method="POST">
                <p>Connexion</p>
            <input type="text" placeholder="julie" value="julie" name="login" >
            <br><br>
            <input type="password" placeholder="julie" value="julie" name="password" >
            <br><br>
            <input type="submit" name="submit" value='Se connecter' >
            </form>
        </div> 
    </div>
    </body>
</html>