<?php
include("RandomColor.php-master/src/RandomColor.php");
use \Colors\RandomColor;
    try 
    {
        $baseMessages = new PDO('mysql:host=127.0.0.1;dbname=minichat;charset=utf8', 'root');
    }
            
    catch(Exception $e) 
    {
        die('Erreur : ' .$e->getMessage());
    }

    $data = json_decode(file_get_contents('php://input'), true);
    

    if (!isset($data['name']) || !isset($data ['message'])) {
        echo("Erreur sur l'envoie du message");
        return;
    }
    date_default_timezone_set('Europe/Paris');
        $name = $data['name'];
        $timestamp = date('Y-m-d H:i:s');
        $contents = $data['message'];
        $color = RandomColor::one();
        
        if($name != $_COOKIE['name']) {
        setcookie("name", $name, time()+60*60*24*30, "/");}


        $userStatement = $baseMessages -> prepare('SELECT * FROM users');
        $userStatement -> execute();
        $users = $userStatement -> fetchAll(PDO::FETCH_ASSOC);
        
        foreach($users as $user) {
            if (in_array($name, $user)) {
                 $iduser = $user['id'];
            }
        }
        

        $insertMessage = $baseMessages -> prepare ('INSERT INTO messages(date, contents, iduser) VALUES (:date, :contents, :iduser)');
        $insertMessage -> execute([
            'date' => $timestamp,
            'contents' => $contents,
            'iduser' => $iduser
        ]);
