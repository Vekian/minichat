
<?php

include("RandomColor.php-master/src/RandomColor.php");
use \Colors\RandomColor;
$couleur = RandomColor::one(array('format'=>'hex'));


if(!isset($_POST['pseudo']) || !isset($_POST['password']) || !isset($_POST['ip']) || !isset($_POST['photo'])) {
    echo ("Rentrez des identifiants valides");
    return;
}
$password = $_POST['password'];
$name = $_POST['pseudo'];
$ip = $_POST['ip'];
$photo = $_POST['photo'];


    // Hachage du mot de passe
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connexion à la base de données
    try 
    {
        $baseMessages = new PDO('mysql:host=127.0.0.1;dbname=minichat;charset=utf8', 'root');
    }
            
    catch(Exception $e) 
    {
        die('Erreur : ' .$e->getMessage());
    }

    // Insertion de l'utilisateur et du mot de passe haché dans la table "users"
    $stmt = $baseMessages->prepare("INSERT INTO users (pseudo, ip, photo, couleur, password) VALUES (:pseudo, :ip, :photo, :couleur, :password)");
    $stmt -> execute([
        'pseudo' => $name,
        'ip' => $ip,
        'photo' => $photo,
        'couleur' => $couleur,
        'password' => $hashed_password
    ]);


?>