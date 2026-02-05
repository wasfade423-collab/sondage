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
            <label>Tranche d'Age</label>
            <input type="radio" name="age" class="age" value = "M25"><label>Moins de 25ans</label><br>
            <input type="radio" name="age" class="age" value = "25Inf35"><label>25-34ans</label><br>
            <input type="radio" name="age" class="age" value = "35Inf45"><label>35-44ans</label><br>
            <input type="radio" name="age" class="age" value = "45Inf55"><label>45-54ans</label><br>
            <input type="radio" name="age" class="age" value = "S55"><label>55ans ou plus</label><br>
            <!-- Sexe -->
            <label>Sexe</label><br>
            <input type="radio" name="sexe" class="sexe" value="F"><label>Féminin</label>
            <input type="radio" name="sexe" class="sexe" value="M"><label>Masculin</label>
            <input type="radio" name="sexe" class="sexe" value="Personnel"><label>Personnel</label>
            <!-- Le secteur -->
            <label>Secteur d'activité</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value = "Informel"><label>Informel</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value = "Formel"><label>Formel</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value = "Etudiant"><label>Etudiant</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value = "Autre"><label>Autre</label><br>
            <!-- Pays/ville -->
            <label for="PayVil">Pays et Ville</label>
            <input type="text" name="PayVil" id="PayVil" placeholder = "Ex: Pays/Ville">

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