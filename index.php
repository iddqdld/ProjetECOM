
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site E-commerce ECE B1 Gr1</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Style_3.css">

    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(function(){
            $("#bandeau").load("bandeau.php");
        });
    </script>
</head>


<body>

    <div id="bandeau"></div>

<div class="home-container">

    <main>
        <section class="home" id="home">

            <div class="content">
                <h3>réveil connecté</h3>
                <p><b>GADGETGROOV à le plaisir de vous présenter son nouveau réveil connecté</b></p>
                <a href="réveil1.html" class="btn">Acheter ICI</a>
            </div>

        </section>

    </main>
    <div id="videobox">
        <video id="video" src="images/vidéo 2.mp4" autoplay loop muted></video>
    </div>

    <div id="videobox">
        <video id="video" src="images/vidéo 11.mp4" autoplay loop muted></video>
    </div>

</div>

</body>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>Notre site</h4>
                <ul>
                    <li><a href="Menu.html">Menu</a></li>
                    <li><a href="Produits.html">Produits</a></li>
                    <li><a href="Avis.html">Avis</a></li>
                    <li><a href="A propos de nous.html">A propos</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Nos produits</h4>
                <ul>
                    <li><a href="réveil1.html">Réveil connecté</a></li>
                    <li><a href="lampe coin 2.html">Lampe d'angle RGB</a></li>
                    <li><a href="lampe murale 3.html">Lampe murale RGB</a></li>
                    <li><a href="clavier 4.html">Clavier gaming RGB</a></li>
                    <li><a href="souris 5.html">Souris gaming RGB</a></li>
                    <li><a href="casque 6.html">Ecouteurs sans fil</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Equipe technique</h4>
                <ul>
                    <li><a href="#">Martin TENDERO</a></li>
                    <li><a href="#">Julien YILDIZ</a></li>
                    <li><a href="#">Artem SALNIKOV</a></li>
                    <li><a href="#">Erwan NICOLAS</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suivez-nous</h4>
                <div class="social-links">
                    <a href="https://www.ece.fr/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.ece.fr/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.ece.fr/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.ece.fr/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>

