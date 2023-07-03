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
?>

<?php
    if (isset($_POST['pseudo']) &&  isset($_POST['password'])) {
        foreach ($users as $user) {
            if (
                $user['pseudo'] === $_POST['pseudo'] &&
                password_verify($_POST['password'], $user['password'])
            ) {
                $loggedUser = [
                    'pseudo' => $user['pseudo'],
                ];

    
                $_SESSION['LOGGED_USER'] = $loggedUser['pseudo'];
            } else {
                $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                    $_POST['pseudo'],
                    $_POST['password']
                );
            }
        }
    }
?>

<?php
if (isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'pseudo' => $_SESSION['LOGGED_USER'],
    ];
}
?>

<?php if(!isset($loggedUser)): ?>
    <form action="index.php" method="post" class="d-flex flex-column align-items-center mt-3">
        <h2>Connectez-vous</h2>
        <?php if(isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo($errorMessage); ?>
            </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">
        </div>
        <div class="mb-3">
            <label for="password" >Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <h2 class="mt-5"> Pas encore de compte ? </h2>
    <a href="create-user.php">Créer un compte</a>
    </form>

    
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo($loggedUser['pseudo']); ?> !
        <a href="log-out.php" class="offset-9">Se déconnecter</a>
    </div>
<?php endif; ?>