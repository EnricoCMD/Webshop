<?php
// Datenbankverbindung herstellen
$servername = "localhost"; // Hostname des Datenbankservers
$username = "root"; // Benutzername für die Datenbankverbindung
$password = ""; // Passwort für die Datenbankverbindung
$database = "webshop_emenra"; // Name der Datenbank

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $database);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error); // Bei Verbindungsfehlern wird eine Fehlermeldung ausgegeben und das Skript beendet
}

// SQL-Abfrage ausführen, um den Benutzernamen abzurufen
$sql = "SELECT B_Name FROM benutzer WHERE ID_B = 1"; // Annahme: ID_B 1 wird verwendet, um den Benutzer abzurufen (du musst deine eigene Logik hier einsetzen)
$result = $conn->query($sql); // Die SQL-Abfrage wird ausgeführt und das Ergebnis wird in $result gespeichert

if ($result->num_rows > 0) { // Überprüfen, ob mindestens eine Zeile im Ergebnis vorhanden ist
    // Benutzernamen ausgeben
    $row = $result->fetch_assoc(); // Die Daten der ersten Zeile des Ergebnisses werden in $row gespeichert
    $username = $row["B_Name"]; // Der Benutzername wird aus dem Ergebnis extrahiert und in $username gespeichert
    echo $username; // Der Benutzername wird auf der Seite ausgegeben
} else {
    echo "Kein Benutzer gefunden"; // Wenn keine Zeilen im Ergebnis vorhanden sind, wird "Kein Benutzer gefunden" ausgegeben
}

// Verbindung schließen
$conn->close(); // Die Verbindung zur Datenbank wird geschlossen, um Ressourcen freizugeben
?>
