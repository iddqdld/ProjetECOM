
<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifiez les informations d'identification dans la base de données
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $pdo->query($query);
    
    if ($user = $result->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        header('Location: index.php');
        exit();
    } else {
        $error_message = 'Identifiants incorrects';
    }
}
?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
    <h2>Login</h2>
    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <div>

    </div>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>

    <div>
        <a href="save.php">Changer son mot de passe</a>
    </div>



    </body>
    </html>