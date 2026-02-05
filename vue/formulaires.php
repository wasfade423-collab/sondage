<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte De Données</title>

</head>

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
            <input type="text" name="PayVil" id="PayVil" placeholder = "Ex: Pays/Ville">

            <button>Continuez</button>

        </div>
            <!--  Le formulaire 2-->
        <div>
    
        </div>
        <!--  Le formulaire 3 -->
        <div>
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
        </div>
            <!--  Le formulaire 4 -->
        <div>

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

        </div>
        <!--  Le formulaire 5 -->
        <div>

        </div>
        <input type="submit" value="Validé">
    </form>
</body>

</html>