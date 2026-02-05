<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données</title>

</head>
<<<<<<< HEAD
=======

<body>
    <form action="model.php" method="POST">
>>>>>>> section2

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
<<<<<<< HEAD
            <h2> Retraite & avenir financier</h2>
             <!--   Avenir financière -->
                <label> <span>09</span> Avez-vous déjà pensé à votre retraite ou à votre avenir financier ? </label>
                <input type="radio" name="AvenirFinancier"  class="AvenirFinancier" value="Oui, sérieusement"><label>Oui, sérieusement </label><br>
                <input type="radio" name="AvenirFinancier"  class="AvenirFinancier" value="Un peu "><label>Un peu </label><br>
                <input type="radio" name="AvenirFinancier"  class="AvenirFinancier" value="Jamais "><label>Jamais </label><br>
             <!--   Vivre a la rétraire-->
                <label> <span>10</span> Comment pensez-vous vivre à la retraite ? </label>
                <input type="radio" name="vivreRetraire"  class="vivreRetrairer" value="Aide des enfants"><label>Aide des enfants </label><br>
                <input type="radio" name="vivreRetraire"  class="vivreRetrairer" value="Épargne personnelle"><label>Épargne personnelle</label><br>
                <input type="radio" name="vivreRetraire"  class="vivreRetrairer" value="Activité même à un âge avancé "><label>Activité même à un âge avancé </label><br>
                <input type="radio" name="vivreRetraire"  class="vivreRetrairer" value="Je ne sais pas "><label>Je ne sais pas </label><br>
             <!-- Pensée sur l'eparge --> 
                <label> <span>11</span> Pensez-vous que l’épargne seule suffit pour bien préparer l’avenir ? </label>
                <input type="radio" name="AvenirEpagne"  class="AvenirEpagne" value="Oui"><label>Aide des enfants </label><br>
                <input type="radio" name="AvenirEpagne"  class="AvenirEpagne" value="Non"><label>Aide des enfants </label><br>
                <input type="radio" name="AvenirEpagne"  class="AvenirEpagne" value=" Je ne sais pas "><label>Aide des enfants </label><br>
=======

>>>>>>> section2
        </div>
        <!--  Le formulaire 4 -->
        <div>
<<<<<<< HEAD

            <h2>Prise de connaissance avec les investissements</h2>
            <!-- Investissements -->
            <label>Avez-vous déjà entendu parler d’investissements financiers ? </label>
            <input type="radio" name="KnownInvest" class="KnownInvest" value="oui"><label>Oui</label><br>
            <!-- EFT -->
            <label>Connaissez-vous des ETF ou fonds d’investissement? </label><br>
            <input type="radio" name="eft" class="etf" value="oui"><label>Oui</label>
            <input type="radio" name="eft" class="eft" value="non"><label>Non</label>
            <!-- interrest -->
            <label>Seriez-vous intéressé(e) par un investissement simple, sécurisé et expliqué pas à pas ? </label><br>
            <input type="radio" name="interet" class="interet" value="oui"><label>Oui</label><br>
            <input type="radio" name="interet" class="interet" value="relatif"><label>Peut-être</label><br>
            <input type="radio" name="interet" class="interet" value="non"><label>Non</label><br>

            <button>Continuez</button>        
=======
            <h2>Connaissance des investissements</h2>
            <!--Investissements financiers-->
            <label>Avez vous deja entendu parler d'investissements financiers</label>
            <input type="radio" name="invfin" class="invfin" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invfin" class="invfin" value="Non"><label>Non</label><br>
            <!--ETF-->
            <label>Connaissez-vous les ETF(fonds d'investissements)</label>
            <input type="radio" name="ETF" class="ETF" value="Oui"><label>Oui</label><br>
            <input type="radio" name="ETF" class="ETF" value="Non"><label>Non</label><br>
            <!--Investissements simples?-->
            <label>Seriez vous interressé(e) par un investisement simple ,sécurisé et expliqué pas à pas </label>
            <input type="radio" name="invsimple" class="invsimple" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invsimple" class="invsimple" value="Peutetre"><label>Peut etre</label><br>
            <input type="radio" name="invsimple" class="invsimple" value="Non"><label>Non</label><br>


>>>>>>> section2

        </div>
        <!--  Le formulaire 5 -->
        <div>
<<<<<<< HEAD
=======
            <h2>RetireAfrika(validation du concept)</h2>
            <!--validation du concept-->
            <label>Seriez vous pret à investir de petites sommes(ex:1000-5000-10000FCFA ou plus) via Moile Money ?</label>
            <input type="radio" name="invpsomme" class="invpsomme" value="Oui"><label>Oui</label><br>
            <input type="radio" name="invpsomme" class="invpsomme" value="Non"><label>Non</label><br>
            <input type="radio" name="invpsomme" class="invpsomme" value="Peutetre"><label>Peut etre</label><br>
            <!--fréquence-->
            <label>A quelle fréquence pourriez vous investir ?</label>
            <input type="radio" name="fréquence" class="fréquence" value="semaine"><label>Chaque semaine</label><br>
            <input type="radio" name="fréquence" class="fréquence" value="mois"><label>Chaque mois</label><br>
            <input type="radio" name="fréquence" class="fréquence" value="Surplus"><label>Quand j'ai un surplus</label><br>
            <input type="radio" name="fréquence" class="fréquence" value="Rarement"><label>Rarement</label><br>
             <!--Rassurer -->
            <label>Qu'es ce qui vous rassurerait le plus?</label>
            <input type="checkbox" nom="rassure" class="rassure" value="sécurité"><label>Sécurité de l'argent</label>
            <input type="checkbox" nom="rassure" class="rassure" value="retraitpossible"><label>Possibilité de retirer</label>
            <input type="checkbox" nom="rassure" class="rassure" value="simpleexplication"><label>Explication simples</label>
            <input type="checkbox" nom="rassure" class="rassure" value="gainsuivi"><label>Suivi clair du gain </label>
            <input type="checkbox" nom="rassure" class="rassure" value="appui"><label>Appui d'une banque connue</label>
            


>>>>>>> section2

        </div>
        <input type="submit" value="Validé">
    </form>
</body>

</html>