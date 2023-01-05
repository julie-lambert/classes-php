<?php
include 'header.php';

require_once('User.php');

if(isset($_POST["Envoyer"])){

    if(!empty($_POST["login"]) AND !empty($_POST["password"]) AND !empty($_POST["repeatpassword"])){

        $login = htmlspecialchars($_POST["login"]);
        $password = htmlspecialchars($_POST["password"]);
        $email = htmlspecialchars($_POST["email"]);
        $firstname =  htmlspecialchars($_POST["firstname"]);
        $lastname =  htmlspecialchars($_POST["lastname"]);
        $repeatpassword = htmlspecialchars($_POST["repeatpassword"]);
        $testlogin = true;
        
        for($i=0; isset($users[$i]); $i++){
            
            if($users[$i][1] === $login){
                $testlogin = false;
                echo "Cet identifiant n'est pas disponible";
                break;
            }
        }
        
        if($password === $repeatpassword){
            if($testlogin === true){
                
                $user = new User();
                $user->register($login,$password, $email, $firstname,$lastname);

        header('location: connexion.php');
    }
}else{
    echo "Les mots de passe ne sont pas identiques!";
}

}else{
echo "Veuillez compléter tous les champs";
}

}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="inscription.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="form1">
            <form  method = "post" action="inscription.php">
                <p>Bienvenue</p>
                <input type="text" name="login" placeholder="Login">
                <br><br>
                <input type="password" name="password" placeholder="Mot de passe">
                <br><br>
                <input type="password" name="repeatpassword" placeholder="Confimer le mot de passe">
                <br><br>
                <input type="email" name="email" placeholder="Email">
                <br><br>
                <input type="firstname" name="firstname" placeholder="Firstname">
                <br><br>
                <input type="lastname" name="lastname" placeholder="Lastname">
                <br><br>
                <input type="submit" name="Envoyer" value="Envoyer">
            </form>
        </div> 
    </div>    
</body>
</html>