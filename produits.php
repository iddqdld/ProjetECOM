<?php
    session_start();
    include('db.php');

    $query = "SELECT * FROM produit";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $produits = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site E-commerce ECE B1 Gr1</title>

    <!-- line awesome cdn link  -->
    <link rel="stylesheet" href="css/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Style_3.css">

    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
        $(function(){
            $("#bandeau").load("bandeau.php");
        });
        $(function(){
            $("#footer").load("footer.html");
        });
    </script>

</head>


<body>

    <div id="bandeau"></div>

    <div style="margin-top:100px;">
        <h1 class="heading"> Nos <span>produits</span> </h1>

        <?php foreach ($produits as $produit): ?>
            <div class="" style="color:white;margin-top:20px;">
                <img src="<?php echo $produit[2] ?>" alt="" width="50 height="50">
                <h3><?php echo $produit[1] ?></h3>
                <div class="price"><?php echo number_format($produit[4],2,',') ?> €</div>
                <a href="réveil1.html" class="btn">ajouter au panier</a>
            </div>
        <?php endforeach;  ?>
    </div>

</body>

<footer id="footer" class="footer">
</footer>

</html>
