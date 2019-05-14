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
    
    <main>
        <img class="mainimg" src="Images/main.png" alt="MagigSoundEffects">
            
        <h1 class="vendu">LES PLUS VENDUS</h1>
            <div class="vendus">
                <div class="Korg42">
                    <img src="Images/Korg.jpg" alt="Korg42">
                        <p>Korg<span class="span">Korg 42</p>
                            <div class="price"><p class="pricer">699€</p> <i class="fas fa-shopping-cart"></i></div>
                </div>
                    <div class="Arturia">
                        <img src="Images/Arturia.jpg" alt="Arturia">
                            <p>Arturia<span class="span">Minilab</p>
                                <div class="price"><p class="pricer">179€</p> <i class="fas fa-shopping-cart"></i></div>

                    </div>
                        <div class="FlStudio">
                            <img src="Images/FlStudio.jpg" alt="FlStudio">
                                <p>FL Studio<span class="span">Reason</p>
                                <div class="price"><p class="pricer">349€</p> <i class="fas fa-shopping-cart"></i></div>

                        </div>
                            <div class="Reloop">
                                <img src="Images/Reloop.jpg" alt="Reloop">
                                    <p>Korg<span class="span">beatmix</p>
                                        <div class="price"> <p class="pricer">299€</p> <i class="fas fa-shopping-cart"></i></div>

                            </div>
            </div>
        <h1 class="vendu">PROMOTIONS</h1>
        <div class="vendus">
                <div class="Korg42">
                    <img src="Images/Micro.jpg" alt="Micro">
                        <p>M Audio<span class="span"> VocalStudio</p>
                            <div class="price"><p class="pricer">79€</p> <i class="fas fa-shopping-cart"></i></div>
                </div>
                    <div class="Arturia">
                        <img src="Images/Focusrite.jpg" alt="Arturia">
                            <p>FOCUSRITE<span class="span">Scarlett 1818</p>
                                <div class="price"><p class="pricer">299€</p> <i class="fas fa-shopping-cart"></i></div>

                    </div>
                        <div class="FlStudio">
                            <img src="Images/Boss.jpg" alt="FlStudio">
                                <p>Boss<span class="span">DR 3</p>
                                <div class="price"><p class="pricer">174€</p> <i class="fas fa-shopping-cart"></i></div>

                        </div>
                            <div class="Reloop">
                                <img src="Images/Volcakeys.jpg" alt="Reloop">
                                    <p>Korg<span class="span">Vocal Keys</p>
                                        <div class="price"> <p class="pricer">129€</p> <i class="fas fa-shopping-cart"></i></div>

                            </div>
            
    </main>
    <div class="foot"></div>
    <footer>
        <div class="foot2">
            
            <h3><i class="fas fa-lock"></i><span class='paiement'>PAIEMENT SECURISEE</h3>
            <h3>INFOS LIVRAISONS & SUIVI DE COMMANDES</h3>
            <h3>NOUS CONTACTER</h3>
            <h3>NOUS SUIVRE</h3>
        </div>
        <div class="foot3">
            <div><img class="visa" src="Images/visa.png" alt="paiement.png"></div>
            <div><img class="colis" src="Images/coli.png" alt="colis"></div>
            <div class="num"> 01 48 75 18 41</div>
            <div><img src="Images/reseau.png" alt="Réseaux"></div>

        </div>

    </footer>
    
</body>
</html>