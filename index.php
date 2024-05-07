
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site E-commerce ECE B1 Gr1</title>

    <!-- line awesome link  -->
    <link rel="stylesheet" href="css/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_3.css">

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


<body style="color:white;">

    <div id="bandeau"></div>

    <div style="margin-top:100px;">
        <h3>réveil connecté</h3>
        <p><b>GADGETGROOV à le plaisir de vous présenter son nouveau réveil connecté</b></p>
        <a href="réveil1.html" class="btn">Acheter ICI</a>
    </div>

</body>

<footer id="footer" class="footer">
</footer>

</html>

