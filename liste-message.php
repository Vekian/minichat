<?php
    try 
    {
        $baseMessages = new PDO('mysql:host=127.0.0.1;dbname=minichat;charset=utf8', 'root');
    }
            
    catch(Exception $e) 
    {
        die('Erreur : ' .$e->getMessage());
    }

    $query = 'SELECT * FROM users JOIN messages ON users.id = messages.iduser ORDER BY date DESC LIMIT 20';
    $userStatement = $baseMessages -> prepare($query);
    $userStatement -> execute();
    $messages = $userStatement -> fetchAll((PDO::FETCH_ASSOC));
    
    /*foreach($messages as $message) {
        echo($message['pseudo'] . " [" . $message['date'] . "] : ");
        echo($message['contents'] . '<br />');
    };*/
    $jsonMessages = json_encode($messages);

    echo $jsonMessages;
    
?>