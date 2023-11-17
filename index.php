<?php
    // doc pour la fonction date() :  https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/obtenir-formater-date/
    // ! Récupérer le mois et l'année sélectionnés par l'utilisateur
    if (!empty($_GET['months'])) {
        $month = $_GET['months']; // récupérer le mois choisi par l'utilisateur (en int car la value est un entier dans le form HTML)
    } else {
        // ! afficher un mois si l'utilisateur n'a rien choisi
        $month = date('n'); // mois en cours
    }
    if (!empty($_GET['years'])) {
        $year = $_GET['years']; // récupérer l'année choisie par l'utilisateur
    } else {
        // ! afficher une année si l'utilisateur n'a rien choisi
        $year = date('Y'); // année en cours
    }
    
    // ! Avoir $month en string français pour l'affichage dans le title
    switch ($month) {
        case 1 :
            $monthFrench = 'Janvier';
            break;
        case 2 :
            $monthFrench = 'Février';
            break;
        case 3 :
            $monthFrench = 'Mars';
            break;
        case 4 :
            $monthFrench = 'Avril';
            break;
        case 5 :
            $monthFrench = 'Mai';
            break;
        case 6 :
            $monthFrench = 'Juin';
            break;
        case 7 :
            $monthFrench = 'Juillet';
            break;
        case 8 :
            $monthFrench = 'Août';
            break;
        case 9 :
            $monthFrench = 'Septembre';
            break;
        case 10 :
            $monthFrench = 'Octobre';
            break;
        case 11 :
            $monthFrench = 'Novembre';
            break;
        case 12 :
            $monthFrench = 'Décembre';
            break;
        default:
            $monthFrench = 'Veuillez renseigner le formulaire';
            break;
    }

    // ! Variable pour récupérer le nombre de jours dans le mois et l'année sélectionnés par l'utilisateur
    $NbeDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year); // connaitre le nombre de jours dans un mois (la Variable ne reconnait que les integer)
    // var_dump($NbeDaysInMonth);
    // ! Variable pour récupérer le premier jour du mois sélectionné
    // $monthFirstDay = date('d', mktime(0, 0, 0, $month, 1)); // mktime pour obtenir le timestamp. 0 pour l'heure, 0 pour les mins, 0 pour les sec, $month pour le mois sélectionné par l'utilisateur et enfin 1 pour le (premier) jour
    // var_dump($monthFirstDay);
    $monthFirstDayInWeek = date('N', mktime(0, 0, 0, $month, 1, $year)); // year est important pour cela fonctionne pour toutes les années y compris les bissextiles
    // var_dump($monthFirstDayInWeek);
    // ! Variable pour récupérer le dernier jour du mois sélectionné
    $monthLastDay = date('t', mktime(0, 0, 0, $month, 1, $year)); // le format 't' renvoie le nombre de jours dans le mois spécifié. Donc, dans ce cas, il renverra le dernier jour du mois.
    // var_dump($monthLastDay);



    // ! Afficher les éléments courants (griser les éléments hors du mois courant)
    $displayDaysInCalendar=[]; // initialiser un tableau à vide pour isoler les cases un peu comme un dataset
    $counter = 1; // il fallait sortir ce counter de la boucle pour pouvoir après-coup l'incrémenter correctement
    for ($i=0; $i < 42 ; $i++) { // boucle qui était à la base dans le HTML pour créer les cases, on va parcourir chacune d'entre-elles et on va remplir leur variable $displayDaysInCalendar avec $displayDaysInCalendar[] pour isoler chacune d'entre-elles
        if (($i < $monthFirstDayInWeek -1) || ($i > (($monthFirstDayInWeek + $monthLastDay))-2)) { // -1 car on commence à 0
            $displayDaysInCalendar[] = '';
        } else {
            $displayDaysInCalendar[] = $counter++;
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet PHP calendrier</title>
    <!-- my style -->
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Prata&display=swap" rel="stylesheet">
</head>
<body>

<main>
    <!-- ---------------------- -->
    <!---------- Form : ---------->
    <!-- ---------------------- -->
    <section id="section__form">
        <form method="get">
            <label for="months">Choisir le mois à afficher :</label>
            <select name="months" id="months" required>
                <option value="">--Veuillez choisir un mois--</option>
                <option value="1">Janvier</option>
                <option value="2">Février</option>
                <option value="3">Mars</option>
                <option value="4">Avril</option>
                <option value="5">Mai</option>
                <option value="6">Juin</option>
                <option value="7">Juillet</option>
                <option value="8">Août</option>
                <option value="9">Septembre</option>
                <option value="10">Octobre</option>
                <option value="11">Novembre</option>
                <option value="12">Décembre</option>
            </select>
            <label for="years">Choisir l'année à afficher :</label>
            <select name="years" id="years" required>
                <option value="">--Veuillez choisir une année--</option>
                <?php
                for ($i=1970; $i < 2071 ; $i++) { ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Valider">
        </form>
    </section>

    <!-- ---------------------------------- -->
    <!---------- Calendar's title : ---------->
    <!-- ---------------------------------- -->
    <section id="section__title">
        <div id="section__title__container--images1">
            <img id="section__title__container--images1--flower1" src="./public/assets/img/fleur2.png" alt="">
            <img id="section__title__container--images1--flower2" src="./public/assets/img/fleur1.png" alt="">
            <img id="section__title__container--images1--flower3" src="./public/assets/img/fleurMilieu.png" alt="">
        </div>
        <div id="section__title__container--h2">
            <h2><span><?= ucfirst($monthFrench) ?></span><br> <span id="h2__year"><?= $year ?></span></h2>
        </div>
        <div id="section__title__container--images2">
            <img id="section__title__container--images2--flower1" src="./public/assets/img/fleurMilieu.png" alt="">
            <img id="section__title__container--images2--flower2" src="./public/assets/img/fleur1.png" alt="">
            <img id="section__title__container--images2--flower3" src="./public/assets/img/fleur2.png" alt="">
        </div>
    </section>
    <!-- -------------------------- -->
    <!---------- Calendar : ---------->
    <!-- -------------------------- -->
    <section id="section__calendar">
        <!-- Calendar's container -->
        <div id="calendar__container">
            <!-- days' name container -->
            <div class="days-name__container">
                <!-- days -->
                <div class="days-name__blocks">Lundi</div>
                <div class="days-name__blocks">Mardi</div>
                <div class="days-name__blocks">Mercredi</div>
                <div class="days-name__blocks">Jeudi</div>
                <div class="days-name__blocks">Vendredi</div>
                <div class="days-name__blocks">Samedi</div>
                <div class="days-name__blocks">Dimanche</div>
            </div>
            <!-- days container -->
            <div class="days__container">
                <!-- days -->
                <?php
                    // for ($i=0; $i < 42 ; $i++) { ?>
                        <!-- <div class="days__blocks"> -->
                            <?php
                                foreach ($displayDaysInCalendar as $value) {?>  
                                <div class="days__blocks">
                                    <?php
                                    // echo $value;
                                    if (empty($value)) { ?>
                                        <div class="days__container--empty"></div>
                                    <?php } else {
                                        echo $value;
                                    ?>
                                <?php } ?>
                                </div> 
                                <?php } ?>
                            
                        <!-- </div> -->
                <?php //} ?>
            </div>
        </div>
    </section>





</main>






    <!-- my script -->
    <script src="./public/assets/js/script.js"></script>
</body>
</html>