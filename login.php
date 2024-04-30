<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=webshop_emenra', 'root', '');
 
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    // Überprüfung des Passworts und ob das $user-Array einen Eintrag mit dem Schlüssel 'password' hat
    if ($user !== false && isset($user['passwort']) && passwort_verify($password, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        header("Location: geheim.php");
        exit();
    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }
}

?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
  <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
 
<a href="register.php">Noch keinen Account? Hier registrieren</a>

<!-- Login Formular -->
<form action="login.php" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="password"><br>
 
<input type="submit" value="Abschicken" name="login">
</form> 

<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 
</body>
</html>
