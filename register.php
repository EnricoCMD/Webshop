<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=webshop_emenra', 'root', '');

$errors = array(); 

if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort_repeat = $_POST['passwort_repeat'];

    // Validierung
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Bitte eine gültige E-Mail-Adresse eingeben';
    }

    if(strlen($passwort) == 0) {
        $errors[] = 'Bitte ein Passwort angeben';
    }

    if($passwort != $passwort_repeat) {
        $errors[] = 'Die Passwörter müssen übereinstimmen';
    }

    // Überprüfung, ob E-Mail bereits registriert ist
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    if($user !== false) {
        $errors[] = 'Diese E-Mail-Adresse ist bereits vergeben';
    }

    // Keine Fehler, Benutzer registrieren
    if(empty($errors)) {
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

        $statement = $pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort)");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));

        if($result) {
            header("Location: login.php");
            exit();
        } else {
            $errors[] = 'Beim Abspeichern ist leider ein Fehler aufgetreten';
        }
    }
}
?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Registrierung</title>    
  <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
 
<?php 
if(!empty($errors)) {
    echo '<ul>';
    foreach($errors as $error) {
        echo '<li>' . $error . '</li>';
    }
    echo '</ul>';
}
?>
 
<form action="register.php" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort_repeat"><br><br>
 
<input type="submit" value="Abschicken" name="register">
</form>
 
</body>
</html>
