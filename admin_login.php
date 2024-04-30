<?php
session_start();

if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    header("Location: admin.php"); // Wenn der Administrator bereits angemeldet ist, auf das Admin-Dashboard umleiten
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hier müsstest du die Überprüfung der Anmeldeinformationen vornehmen
    // Wenn die Anmeldeinformationen korrekt sind, die Sitzung starten und den Benutzer auf das Admin-Dashboard umleiten
    // Andernfalls eine Fehlermeldung anzeigen
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>Admin Login</h1>
    </header>

    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Benutzername:<br>
            <input type="text" name="username"><br><br>
            Passwort:<br>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Emenra. All rights reserved.</p>
    </footer>
</body>
</html>
