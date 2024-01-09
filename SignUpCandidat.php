
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="SignUp.css">
    <title>Inscription</title>
  </head>
<body>
  
  <div class="container">
    <div class="title">Candidat</div>
    <div class="content">
      <form action="includes/SignUp.inc.php" method="post">
        <div class="condidat">
          <div class="input">
            <span class="span">Nom complet</span>
            <input type="text" name="name" placeholder="Entrer votre nom" required="required">
          </div>
          <div class="input">
            <span class="span">Votre identifiant</span>
            <input type="text" name="uid" placeholder="Entrer un nom unique" required="required">
          </div>
          <div class="input">
            <span class="span">Email</span>
            <input type="email" name="email" placeholder="Entrer votre email" required="required">
          </div>
          <div class="input">
            <span class="span">Telephone</span>
            <input type="tel" name="Telephone" placeholder="Entrer votre telephone" required="required">
          </div>
          <div class="input">
            <span class="span">Mot de passe</span>
            <input type="password" name="pwd" placeholder="Entrer un mot de passe" required="required">
          </div>
          <div class="input">
            <span class="span">Confirmer le mot de passe</span>
            <input type="password" name="pwdRepeat" placeholder="Confirmer le mot de passe" required="required">
          </div>
          <div id="file-input">
            <span class="span-file">Charger votre CV</span>
            <input type="file" name="CV" class="test">
          </div>
        </div>
        <div class="sexe-info">
          <input type="radio" name="sexe" id="dot-1">
          <input type="radio" name="sexe" id="dot-2">
          <input type="radio" name="sexe" id="dot-3">
          <span class="sexe-titre">Sexe</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Homme</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Femme</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Autre</span>
            </label>
          </div>
        </div>
        <div id="button">
          <input type="submit" value="Enregistrer" id="input-id" >
        </div>
      </form>
    </div>
  </div>

</body>
</html>
