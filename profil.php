<?php
include 'header.php';
require_once('User.php');



$login = $_SESSION['login']; 
$password = $_SESSION['password'];
$email = $_SESSION['email']; 
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname']; 

if(!empty($_SESSION)) {
    if (isset($_POST['submit'])) { 
        
        
        if (($login != $_POST['login']) || ($password != $_POST['password']) || ($email != $_POST['email']) || ($firstname != $_POST['firstname']) || ($lastname != $_POST['lastname'])){

            $user = new User();
            $user->update($_POST['login'], $_POST['password'],$_POST['email'],$_POST['firstname'],$_POST['lastname']);
            
        

}
}
}
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="profil.css">
    <title>Page de profil</title>
</head>
<body>
    <div class = "container">
        <div class="form1">
            <form  method = "post" action="profil.php">
            <p>Votre Profil</p>
                <input type="text" name="login" value="<?php echo $login ?>">
                <br><br>
                <input type="password" name="password" value="<?php echo $password ?>">
                <br><br>
                <input type="text" name="email" value="<?php echo $email ?>">
                <br><br>
                <input type="text" name="firstname" value="<?php echo $firstname ?>">
                <br><br>
                <input type="text" name="lastname" value="<?php echo $lastname ?>">
                <br><br>
                <input type="submit" name="submit" value="Modifier">
            </form>
        </div> 
</div>
</body>
</html>