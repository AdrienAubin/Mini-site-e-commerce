<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['formconnexion'])) {
$mailconnect = htmlspecialchars($_POST['mailconnect']);
$mdpconnect = sha1($_POST['mdpconnect']);
if(!empty($mailconnect) AND !empty($mdpconnect)) {
    $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
    $requser->execute(array($mailconnect, $mdpconnect));
    $userexist = $requser->rowCount();
    if($userexist == 1) {
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['pseudo'] = $userinfo['pseudo'];
        $_SESSION['mail'] = $userinfo['mail'];
        header("Location: index.php?id=".$_SESSION['id']);
    } else {
        $erreur = "Mauvais mail ou mot de passe !";
    }
} else {
    $erreur = "Tous les champs doivent être complétés !";
}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site e-commerce</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

</head>
<body>
    <header>
    <div class="head">
        <a class="lien" href="index.php"><h1>MAGIC <span class="Sound">SOUND<span></h1></a>
        <div class="containersearch">
        <input type="text" maxlength= "12" placeholder="Que recherchez vous ?" class="searchbar">
        </div>
        <p class="Item1"><a class="lien" href="inscription.php">Inscrivez vous</a> / <a href="connexion.php">Connexion</a></p>
        <i class="fas fa-shopping-cart"></i>
    </div>
    <div class="soustitre">
    <h3>PARIS / BRUXELLES / BERLIN</h3>
    <p class="Item2">Votre panier</p>
    </div>
    
    <nav>
        <ul>
            <li>Guitares</li>
            <li>Pianos</li>
            <li>Percussions</li>
            <li>Synthétiseurs</li>
            <li>Studios</li>
            <li>Softwares</li>
            <li>Effets</li>
            <li>Sonorisations/amplis</li>
            <li>Deejay</li>
            <li>Micros</li>
            <li>Violons</li>
        </ul>
    </nav>
    </header>
   

    <div align="center">
        <h2>Connexion</h2>
        <br /><br />
        <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
        </form>
        <?php
        if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
        }
        ?>
    </div>
</body>
</html>