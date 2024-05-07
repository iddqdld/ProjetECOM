<?php
session_start();
?>
<header class="header">
    <section class="flex">

        <a href="index.php" class="logo">
            <img src="images/logo_4.png" alt="">
        </a>

        <nav class="navbar">
            <a href="produits.php">Produits</a>
            <a href="Avis.html">Avis</a>
            <a href="A propos de nous.html">A propos</a>
            <a href="Contact.html">Nous contacter</a>

        </nav>

        <div class="icons">
            <a href="login.php">
                <span class="las la-2x la-shopping-cart" id="card-btn"></span>
            </a>
            <?php if (array_key_exists('user_id',$_SESSION)) : ?>
                <a title="vous êtes connecté comme : <?php echo $_SESSION['username'] ?>" href="logout.php">
                    <span class="las la-2x la-user" id="user-btn"></span>
                </a>
            <?php else : ?>
                <a href="login.php">
                    <span class="las la-2x la-user-slash" id="user-btn"></span>
                </a>
            <?php endif; ?>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="las la-2x la-search"></label>
        </div>
    </section>
</header>

