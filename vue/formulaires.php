<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données</title>

</head>

<body>
    <form action="model.php" method="POST">

<body>
    <form action="model.php" method="POST">

        <div>
            <!--  Le formulaire 1 -->
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

            <button>Continuez</button>

        </div>
        <!--  Le formulaire 2-->

        <div>
            <h2>Revenus et epagne actuelle</h2>
            <!--regularite des revenus -->
            <label>Vos revenus sont:</label>
            <input type="radio" name="regularite" class="regularite" value="Réguliers"><label>Réguliers</label><br>
            <input type="radio" name="regularite" class="regularite" value="Irréguliers"><label>Irréguliers</label><br>
            <input type="radio" name="regularite" class="regularite" value="Variables"><label>Très variables selon le mois</label><br>
            <!--Epargnez-vous actuellement -->
            <label>Epargnez vous actuellement ?</label>
            <input type="radio" name="epagne" class="epagne" value="Régulièrement"><label>Oui,régulièrement</label><br>
            <input type="radio" name="epagne" class="epagne" value="Temps_en_temps"><label>Oui,de temps en temps</label><br>
            <input type="radio" name="epagne" class="epagne" value="Non"><label>Non</label><br>
            <!--Moyens d'epagne -->
            <label>Si oui,comment epagnez vous ?</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Tontine"><label>Tontine</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Mobile_Money"><label>Mobile Money</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Compte_bancaire"><label>Compte bancaire</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Assurance"><label>Assurance</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Maison"><label>A la maison</label>
            <input type="checkbox" name="moyen_epargne[]" class="moyen_epagne" value="Autre"><label>Autre</label>
            <!-- Moyenne d'epagne par mois-->
            <label>En moyenne ,combien epagnez vous par mois ?</label>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="M5k"><label>Moins de 5000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="5kInf10k"><label>5000-10000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="10kInf25k"><label>10000-25000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="P25k"><label>Plus de 25000 FCFA</label><br>
            <input type="radio" name="epagneParMois" class="epagneParMois" value="Variable"><label>Cela dépend des mois</label><br>


        </div>
        <!--  Le formulaire 3 -->
        <div>
        </div>
        <!--  Le formulaire 4 -->
        <div>
            <h2>Connaissance des investissements</h2>
            <!--Investissements financiers-->
            <label>Avez vous déjà entendu parler d'investissements financiers</label>
            <input type="radio" name="knowInvest" class="knowInvest" value="Oui"><label>Oui</label><br>
            <input type="radio" name="knowInvest" class="knowInvest" value="Non"><label>Non</label><br>
            <!--ETF-->
            <label>Connaissez-vous les ETF(fonds d'investissements)</label>
            <input type="radio" name="ETF" class="ETF" value="Oui"><label>Oui</label><br>
            <input type="radio" name="ETF" class="ETF" value="Non"><label>Non</label><br>
            <!--Investissements simples?-->
            <label>Seriez vous interressé(e) par un investisement simple ,sécurisé et expliqué pas à pas </label>
            <input type="radio" name="SimpleInvest" class="SimpleInvest" value="Oui"><label>Oui</label><br>
            <input type="radio" name="SimpleInvest" class="SimpleInvest" value="Peutetre"><label>Peut etre</label><br>
            <input type="radio" name="SimpleInvest" class="SimpleInvest" value="Non"><label>Non</label><br>



        </div>
        <!--  Le formulaire 5 -->
        <div>
            <h2>RetireAfrika(validation du concept)</h2>
            <!--validation du concept-->
            <label>Seriez vous pret à investir de petites sommes(ex:1000-5000-10000FCFA ou plus) via Moile Money ?</label>
            <input type="radio" name="InvestSmallPrice" class="InvestSmallPrice" value="Oui"><label>Oui</label><br>
            <input type="radio" name="InvestSmallPrice" class="InvestSmallPrice" value="Non"><label>Non</label><br>
            <input type="radio" name="InvestSmallPrice" class="InvestSmallPrice" value="Peutetre"><label>Peut etre</label><br>
            <!--frequence-->
            <label>A quelle frequence pourriez vous investir ?</label>
            <input type="radio" name="frequence" class="frequence" value="semaine"><label>Chaque semaine</label><br>
            <input type="radio" name="frequence" class="frequence" value="mois"><label>Chaque mois</label><br>
            <input type="radio" name="frequence" class="frequence" value="Surplus"><label>Quand j'ai un surplus</label><br>
            <input type="radio" name="frequence" class="frequence" value="Rarement"><label>Rarement</label><br>
             <!--Rassurer -->
            <label>Qu'es ce qui vous rassurerait le plus?</label>
            <input type="checkbox" name="rassure" class="rassure" value="sécurité"><label>Sécurité de l'argent</label>
            <input type="checkbox" name="rassure" class="rassure" value="retraitpossible"><label>Possibilité de retirer</label>
            <input type="checkbox" name="rassure" class="rassure" value="simpleexplication"><label>Explication simples</label>
            <input type="checkbox" name="rassure" class="rassure" value="gainsuivi"><label>Suivi clair du gain </label>
            <input type="checkbox" name="rassure" class="rassure" value="appui"><label>Appui d'une banque connue</label>
            



        </div>
        <input type="submit" value="Validé">
    </form>
</body>

</html>