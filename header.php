<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<bodyy>
    <header>  

    <?php  if(!empty($_SESSION['login'])){
                echo      ' <header>
                            <nav>
                                <ul class="l1">
                                        <li><b><a href="index.php" class="button">Accueil</a></b></li>
                                        <li><b><a href="profil.php" class="button">Profil</a></b></li>
                                        <li><b><a href="deconnexion.php" class="button">Déconnexion</a></b></li>
                                       
                                </ul>
                            </nav>
                        </header> '; 
            }else{
           echo '<header>
                <nav>
                    <ul class="l1">
                            <li><b><a href="connexion.php" class="button">Connexion</a></b></li>
                            <li><b><a href="inscription.php" class="button">Inscription</a></b></li>
                            
                    </ul>
                </nav>
            </header>';

            } ?>

           
    </header>

</body>
</html>