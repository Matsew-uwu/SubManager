<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Integration de Bootsrap5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>SubManager - Home</title>
</head>
<body>
    <?php include("./templates/header.php"); ?>
    
    <div class="container py-5">
    <form action="./php/onLogin.php" method="POST">
  <div class="form-group">
    <label for="username">Identifiant (prenom.nom)</label>
    <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Ex: prenom.nom">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="stayLogged">
    <label class="form-check-label" for="stayLogged">Rester connecte</label>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
    </div>

</body>
</html>