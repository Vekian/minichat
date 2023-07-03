<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $ip = $_SERVER['REMOTE_ADDR'];
    ?>
    <form action="post-create-user.php" method="POST">
    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" id="pseudo">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="hidden" name="ip" id="ip" value="<?php echo($ip); ?>">
    <label for="photo">Avatar</label>
    <select id="photo" name="photo">
    <option value="images/fleur.jpg">Fleur</option>
    <option value="images/photo.png">Smiley</option>
    <option value="images/pierre.png">Pierre</option>
    <option value="images/pikachu.png">Pikachu</option>
    </select>
    <img src="" alt="Choisissez votre nom préféré" width="100px"/>
    <input type="submit" value="envoyer">
</form>
    

<script>
    let image = document.querySelector('img');
    document.querySelector("select").addEventListener("change", function (e) {
        let src = e.target.value;
        image.setAttribute("src", src);
    });
</script>
</body>
</html>