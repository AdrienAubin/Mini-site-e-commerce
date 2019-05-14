<?php include("config.php");?>
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
        <h2>Inscription</h2>
        <br /><br />
        <form method="POST" action="">
            <table>
            <tr>
                <td align="right">
                    <label for="pseudo">Pseudo :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail">Mail :</label>
                </td>
                <td>
                    <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail2">Confirmation du mail :</label>
                </td>
                <td>
                    <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mdp">Mot de passe :</label>
                </td>
                <td>
                    <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mdp2">Confirmation du mot de passe :</label>
                </td>
                <td>
                    <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <br />
                    <input type="submit" name="forminscription" value="Je m'inscris" />
                </td>
            </tr>
            </table>
        </form>
        <?php
        if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
        }
        ?>
    </div>
</div>
    
</body>
</html>