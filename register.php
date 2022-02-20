<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Integration de Bootsrap5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SubManager - Register</title>
</head>
<body>
    <?php include("./templates/header.php"); ?>

    <div class="container py-5">
    <form action="./php/onRegister.php" method="POST">
        <!-- prenom -->
        <div class="form-group">
            <label for="firstname">Prenom</label>
            <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="firstname" placeholder="Entrez votre prenom">
        </div>
        <!-- nom -->
        <div class="form-group">
            <label for="lastname">Nom</label>
            <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="lastname" placeholder="Entrez votre nom">
        </div>
        <!-- mot de passe -->
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Entrez un mot de passe">
        </div>
        <!-- date de naissance -->
        <div class="form-group">
            <label for="dob">Date de naissance</label>
            <input type="date" class="form-control" name="dob" id="dob">
        </div>
        <!-- numero de telephone -->
        <div class="form-group">
            <label for="phone_number">Numero de telephone</label>
            <input type="number" class="form-control" name="number" id="phone_number" placeholder="Entrez votre numero de telephone">
        </div>
        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre adresse mail">
        </div>

        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
    </div>
</body>
</html>


<!-- 
    son nom,
o son prénom,
o sa date de naissance,
o son adresse,
o son numéro de téléphone,
o son adresse mail.
 -->