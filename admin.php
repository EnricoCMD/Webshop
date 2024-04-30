<?php
// Hier sollte die Überprüfung erfolgen, ob der Benutzer eingeloggt und ein Administrator ist
// Falls nicht, sollte der Benutzer umgeleitet werden oder eine Fehlermeldung angezeigt werden

session_start();

// Überprüfen, ob der Benutzer eingeloggt ist und ein Administrator ist
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Wenn nicht, den Benutzer auf die Login-Seite für Administratoren umleiten
    header("Location: admin_login.php");
    exit();
}

// Hier könnten die administrativen Funktionen und Ansichten implementiert werden

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="admin_users.php">Benutzer verwalten</a></li>
                <li><a href="admin_products.php">Produkte verwalten</a></li>
                <!-- Weitere administrative Links hinzufügen, je nach Bedarf -->
            </ul>
        </nav>
        
    </header>

    <main>
        <!-- Hier könnten administrative Ansichten und Funktionen eingefügt werden -->
    </main>

    <footer>
        <p>&copy; 2024 Emenra. All rights reserved.</p>
    </footer>
</body>
</html>
