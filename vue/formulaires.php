<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données</title>

</head>

<body>
    <form action="model.php" method="POST">

        <!--  Le formulaire 1 -->
        <div>
            <h2>Profil du Répondant</h2>
            <!-- Age -->
            <label>Tranche d'Age</label>
            <input type="radio" name="age" class="age" value="M25"><label>Moins de 25ans</label><br>
            <input type="radio" name="age" class="age" value="25Inf35"><label>25-34ans</label><br>
            <input type="radio" name="age" class="age" value="35Inf45"><label>35-44ans</label><br>
            <input type="radio" name="age" class="age" value="45Inf55"><label>45-54ans</label><br>
            <input type="radio" name="age" class="age" value="S55"><label>55ans ou plus</label><br>
            <!-- Sexe -->
            <label>Sexe</label><br>
            <input type="radio" name="sexe" class="sexe" value="F"><label>Féminin</label>
            <input type="radio" name="sexe" class="sexe" value="M"><label>Masculin</label>
            <input type="radio" name="sexe" class="sexe" value="Personnel"><label>Personnel</label>
            <!-- Le secteur -->
            <label>Secteur d'activité</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value="Informel"><label>Informel</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value="Formel"><label>Formel</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value="Etudiant"><label>Etudiant</label><br>
            <input type="radio" name="secteurActivite" class="secteurActivite" value="Autre"><label>Autre</label><br>
            <!-- Pays/ville -->
            <label for="PayVil">Pays et Ville</label>
            <input type="text" name="PayVil" id="PayVil" placeholder="Ex: Pays/Ville">

        </div>
        <!--  Le formulaire 2-->

        <div>
            <h2>Revenus et épargne actuelle</h2>
            <!--Régularité des revenus -->
            <label>Vos revenus sont:</label>
            <input type="radio" name="régularité" class="régularité" value="Réguliers"><label>Réguliers</label><br>
            <input type="radio" name="régularité" class="régularité" value="Irréguliers"><label>Irréguliers</label><br>
            <input type="radio" name="régularité" class="régularité" value="Variables"><label>Très variables selon le mois</label><br>
            <!--Epargnez-vous actuellement -->
            <label>Epargnez vous actuellement ?</label>
            <input type="radio" name="épargne" class="épargne" value="Régulièrement"><label>Oui,régulièrement</label><br>
            <input type="radio" name="épargne" class="épargne" value="Temps_en_temps"><label>Oui,de temps en temps</label><br>
            <input type="radio" name="épargne" class="épargne" value="Non"><label>Non</label><br>
            <!--Moyens d'épargne -->
            <label>Si oui,comment épargnez vous ?</label>
            <input type="checkbox" nom="moyen_éparnge" class="moyen_épargne" value="Tontine"><label>Tontine</label>
            <input type="checkbox" nom="moyen_éparnge" class="moyen_épargne" value="Mobile_Money"><label>Mobile Money</label>
            <input type="checkbox" nom="moyen_éparnge" class="moyen_épargne" value="Compte_bancaire"><label>Compte bancaire</label>
            <input type="checkbox" nom="moyen_éparnge" class="moyen_épargne" value="Assurance"><label>Assurance</label>
            <input type="checkbox" nom="moyen_éparnge" class="moyen_épargne" value="Maison"><label>A la maison</label>
            <input type="checkbox" nom="moyen_éparnge" class="moyen_épargne" value="Autre"><label>Autre</label>
            <!-- Moyenne d'épargne par mois-->
            <label>En moyenne ,combien épargnez vous par mois ?</label>
            <input type="radio" name="épargneparmois" class="épargneparmois" value="M5k"><label>Moins de 5000 FCFA</label><br>
            <input type="radio" name="épargneparmois" class="épargneparmois" value="5kInf10k"><label>5000-10000 FCFA</label><br>
            <input type="radio" name="épargneparmois" class="épargneparmois" value="10kInf25k"><label>10000-25000 FCFA</label><br>
            <input type="radio" name="épargneparmois" class="épargneparmois" value="P25k"><label>Plus de 25000 FCFA</label><br>
            <input type="radio" name="épargneparmois" class="épargneparmois" value="Variable"><label>Cela dépend des mois</label><br>


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