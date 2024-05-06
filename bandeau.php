<?php 
?>
<header class="header">
    <section class="flex">

        <a href="index.html" class="logo">
            <img src="images/logo_4.png" alt="">
        </a>

        <nav class="navbar">
            <a href="Produits.html">Produits</a>
            <a href="Avis.html">Avis</a>
            <a href="A propos de nous.html">A propos</a>
            <a href="Contact.html">Nous contacter</a>

        </nav>

        <div class="icons">
            <a href="login.php">
                <span class="fas fa-2x fa-shopping-cart" id="card-btn"></span>
            </a>
            <?php if (!isset($_COOKIE['username'])) : ?>
                <a href="login.php">
                    <span class="fas fa-2x fa-user-slash" id="user-btn"></span>
                </a>
            <?php else : ?>
                <a title="vous êtes connecté comme : <?php echo $_COOKIE['username'] ?>" href="backendmockups.php">
                    <span class="fas fa-2x fa-user" id="user-btn"></span>
                </a>
            <?php endif; ?>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </section>
</header>

