<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservationsalles</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
<?php


if(isset($_SESSION['login'])){
echo '<h1>Bienvenue ' . $_SESSION['login'] . '</h1>';
}
else{
    echo "";
}
?>




</body>
</html>