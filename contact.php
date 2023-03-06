<?php

require("form_Envoi.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./style/contact.css">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        
    <header>
        <nav>
            <div>
                <img src="img/logo.png" alt="">
                <h1>Coiff'Hommes</h1>
            </div>
            <ul>
                <li>
                    <a href="index.html#section-one">Accueil</a>
                    <span></span>
                </li>
                <li>
                    <a href="index.html#section-two">A propos</a>
                    <span></span>
                </li>
                <li>
                    <a href="index.html#section-three">Forfaits</a>
                    <span></span>
                </li>
                <li>
                    <a href="gallery.html">Galerie</a>
                    <span></span>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                    <span></span>
                </li>
                <a href="#" id="openBtn">
                    <span class="burger-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                    </span>
                </a>
            </ul>
        </nav>
    </header>

    <div id="mySidenav" class="sidenav">
        <div id="backBurg">
            
        </div>
    <a id="closeBtn" href="#" class="close">×</a>
    <ul>
    <li>
        <a href="index.html#section-one">Accueil</a>
        <hr>
        <span></span>
    </li>
    <li>
        <a href="index.html#section-two">A propos</a>
        <hr>
        <span></span>
    </li>
    <li>
        <a href="index.html#section-three">Forfaits</a>
        <hr>
        <span></span>
    </li>
    <li>
        <a href="gallery.html">Galerie</a>
        <hr>
        <span></span>
    </li>
    <li>
        <a href="contact.php">Contact</a>
        <hr>
        <span></span>
    </li>

    </ul>
  </div>


        <section id="contact">
            <div id="contact-div1">
                <h2>Contact</h2>
                <div id="barre-gauche"></div>
                <?php if(isset($errors)) {
                    $error = implode("",$errors);
                    echo "<p id='errorMessage'>$error</p>";
                }
                ?>
                <form action="" method="post">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom"> 
                    <label for="mail">Mail</label> 
                    <input type="text" name="mail" id="mail"> 
                    <label for="message">Message</label> 
                    <textarea name="message" id="message" cols="50" rows="10"></textarea> 
                    <button type="submit" name="submit">Envoyer</button>
                </form>
            </div>
        </section>

        <footer>
            <hr>
            <ul>
                <li>Adresse : 9 Rue François Mousis, 65000 Tarbes</li>
                <li>Coordonnées : 05.08.96.54.71</li>
                <li>Réseau : <a href="">facebook.com</a></li>
                <li>Horaires : 10h-20h</li>
                <li><a href="">Mentions légales</a></li>
            </ul>
            <br>
            <p>@CodeCrushers</p>
        </footer>

    </body>
    <script src="contact.js"></script>
</html>