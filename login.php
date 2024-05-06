<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifiez les informations d'identification dans la base de données
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if (!$result) {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    if ($user = $result->fetch_assoc()) {
        setcookie('username', $user['username'], time() + (86400 * 30), "/"); 
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
        Pas encore inscrit ? <a href="backendmockups.php">S'inscrire</a>
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