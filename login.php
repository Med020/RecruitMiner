
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="loginform.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="img">
        <!-- ::before -->
    </div>
<div class="center">
   <h1>Bienvenue</h1>
   <form action="includes/login.inc.php" method="post" >
     <div class="txt-field">
        <input type="text" name="uid" required>
        <span></span>
        <label>Nom d'utilisateur</label>
    </div>
    <div class="txt-field">
        <input type="password" name="pwd" required>
        <span></span>
        <label>Mot de passe</label>
     </div>
     <div class="pass">Mot de passe oublié ?</div>
     <input type="submit" value="Se connecter">
     <div class="sign-up-link">
    Vous n'êtes pas un membre?
    <a href="#">Créer un compte</a>
     </div>
   </form>

</div>
</body>
</html>