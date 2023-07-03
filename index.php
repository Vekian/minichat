<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once('login.php'); 
?>
    <?php
    
    include("RandomColor.php-master/src/RandomColor.php");
    use \Colors\RandomColor;
    if (isset($loggedUser)) {
    ?>

    <div id="container" class="offset-2">
        <div class="row d-flex ">
            <div id="messages" class="col-8 d-flex flex-column-reverse">
<script>
    setTimeout(refreshMessage, 0);
    setInterval(refreshMessage, 3000);
    function refreshMessage() {
        document.getElementById('messages').innerHTML="";
        fetch('liste-message.php')
            .then(function(response) {
                if (response.ok) {
                return response.json();
                } else {
                throw new Error('Erreur lors de la requête AJAX');
                }
            })
            .then(function(messages) {
                for (let message of messages) {
                document.getElementById('messages').innerHTML += '<div style ="color : ' + message['couleur'] + '" >' + message['pseudo'] + '[' + message['date'] + '] : ' + message['contents'] + '</div><br />';
            }})
            .catch(function(error) {
                console.log(error);
            });
        }
</script>
            </div>

            <div id="users" class="col-2">
            <?php 
            include("liste-users.php");
            ?>
            </div>
        </div>
    <?php
        
        if (isset($_COOKIE['name'])){
            $name = $_COOKIE['name'];
        }
        else $name = '';
    ?>
        <form action="post-message.php" method="POST">
            <div class="row d-flex ">
            <input type="hidden" name="name" id="name" value="<?php echo($loggedUser['pseudo']) ?>">
                <input type="hidden" name="timestamp" id="timestamp" >
                <textarea id="message" name="message" type="text" class="col-9" placeholder="Entrez votre message" ></textarea>
                <input type="submit" id="submit" value="envoyer" class="col-1">
            </div>
        </form>
        <script>
            document.getElementById("submit").addEventListener("click", function(event) {
      event.preventDefault(); // Empêche le rechargement de la page
                let timestamp;
      let name = document.getElementById("name").value;
      let message = document.getElementById("message").value;
      let objet = {
        name : name,
        message : message
      };
      fetch('post-message.php', {
                            method: "POST",
                            body: JSON.stringify(objet)
                            }); 
        document.getElementById('message').value ='';   
                                    });
       
        </script>
    </div>
<?php
};
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="main.js"></script>
</body>
</html>

