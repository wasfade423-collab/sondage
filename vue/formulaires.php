<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données</title>

</head>
<body>
    <form action = "model.php" method = "POST">

        <!--  Le formulaire 1 -->
        <div>
            <h2>Profil du Répondant</h2>
            <!-- Age -->
            <label for="age">Tranche d'Age</label>
            <input type="radio" name="age" class="age" value = "M25"><label>Moins de 25ans</label><br>
            <input type="radio" name="age" class="age" value = "25INf35"><label>25-34ans</label><br>
            <input type="radio" name="age" class="age" value = "35INf45"><label>35-44ans</label><br>
            <input type="radio" name="age" class="age" value = "45INf55"><label>45-54ans</label><br>
            <input type="radio" name="age" class="age" value = "S55"><label>55ans ou plus</label><br>
            <!-- Sexe -->
            <label for="sexe">Sexe</label><br>
            <input type="radio" name="sexe" class="sexe" value="F"><label>Féminin</label>
            <input type="radio" name="sexe" class="sexe" value="M"><label>Masculin</label>
            <input type="radio" name="sexe" class="sexe" value="Personnel"><label>Personnel</label>
        </div>
            <!--  Le formulaire 2-->
        <div>
    
        </div>
            <!--  Le formulaire 3 -->
        <div>
    
        </div>
            <!--  Le formulaire 4 -->
        <div>
    
        </div>
            <!--  Le formulaire 5 -->
        <div>
    
        </div>
        <input type="submit" value="Validé">
    </form>
</body>
</html>