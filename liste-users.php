<?php
    try 
    {
        $baseMessages = new PDO('mysql:host=127.0.0.1;dbname=minichat;charset=utf8', 'root');
    }
            
    catch(Exception $e) 
    {
        die('Erreur : ' .$e->getMessage());
    }

    $query = 'SELECT * FROM users';
    $userStatement = $baseMessages -> prepare($query);
    $userStatement -> execute();
    $users = $userStatement -> fetchAll((PDO::FETCH_ASSOC));

    foreach($users as $user) {
        echo ('<img src="' . $user['photo'] . '" width= 30px /> ');
        echo($user['pseudo']);
        echo('<br />');
    }
?>