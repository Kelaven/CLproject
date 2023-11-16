<?php
    // doc pour la fonction date() :  https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/obtenir-formater-date/
    // ! Récupérer le mois et l'année sélectionnés par l'utilisateur
    @$month = $_GET['months']; // récupérer le mois choisi par l'utilisateur (en int car la value est un entier dans le form HTML)
    @$year = $_GET['years']; // récupérer l'année choisie par l'utilisateur
    // ! afficher un mois et une année si l'utilisateur n'a rien choisi, c'est à dire au premier chargement de la page
    if (empty($month) && empty($year)) {
        $month = date('n'); // mois en cours
        $year = date('Y'); // année en cours
    }
    // ! Avoir $month en string français pour l'affichage dans le title
    switch ($month) {
        case $month == 1 :
            $monthFrench = 'Janvier';
            break;
        case $month == 2 :
            $monthFrench = 'Février';
            break;
        case $month == 3 :
            $monthFrench = 'Mars';
            break;
        case $month == 4 :
            $monthFrench = 'Avril';
            break;
        case $month == 5 :
            $monthFrench = 'Mai';
            break;
        case $month == 6 :
            $monthFrench = 'Juin';
            break;
        case $month == 7 :
            $monthFrench = 'Juillet';
            break;
        case $month == 8 :
            $monthFrench = 'Août';
            break;
        case $month == 9 :
            $monthFrench = 'Septembre';
            break;
        case $month == 10 :
            $monthFrench = 'Octobre';
            break;
        case $month == 11 :
            $monthFrench = 'Novembre';
            break;
        case $month == 12 :
            $monthFrench = 'Décembre';
            break;
        default:
            $monthFrench = 'Veuillez renseigner le formulaire';
            break;
    }


    // ! Fonction pour récupérer le nombre de jours dans le mois et l'année sélectionnés par l'utilisateur
    $NbeDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year); // connaitre le nombre de jours dans un mois (la fonction ne reconnait que les integer c'est pourquoi on a utilisé date() qui elle-même utilise strtotime() qui elle-même reprend le choix de l'utilisateur)
    // var_dump($NbeDaysInMonth);
    // ! Fonction pour récupérer le premier jour du mois sélectionné
    $monthFirstDay = date('d', mktime(0, 0, 0, $month, 1)); // mktime pour obtenir le timestamp. 0 pour l'heure, 0 pour les mins, 0 pour les sec, $month pour le mois sélectionné par l'utilisateur et enfin 1 pour le (premier) jour
    var_dump($monthFirstDay);
    // ! Fonction pour récupérer le dernier jour du mois sélectionné
    $monthLastDay = date('t', mktime(0, 0, 0, $month)); // le format 't' renvoie le nombre de jours dans le mois spécifié. Donc, dans ce cas, il renverra le dernier jour du mois.
    var_dump($monthLastDay);
    // ! Fonction pour récupérer le nombre de semaines du mois sélectionné
    // $daysInAWeek = date('N', mktime(0, 0, 0, $month));
    // $result = ($daysInAWeek + $monthLastDay) / 7;
    // $result = $monthLastDay / 7;
    // var_dump($result);
    // $NbeWeeksInMonth = date('N', mktime(0, 0, 0,($monthLastDay - $monthFirstDay)+$monthLastDay));

    // var_dump($NbeWeeksInMonth);
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
                <!-- option.value$@1970*100 raccourci EMMET -->
                <option value="">--Veuillez choisir une année--</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
                <option value="2034">2034</option>
                <option value="2035">2035</option>
                <option value="2036">2036</option>
                <option value="2037">2037</option>
                <option value="2038">2038</option>
                <option value="2039">2039</option>
                <option value="2040">2040</option>
                <option value="2041">2041</option>
                <option value="2042">2042</option>
                <option value="2043">2043</option>
                <option value="2044">2044</option>
                <option value="2045">2045</option>
                <option value="2046">2046</option>
                <option value="2047">2047</option>
                <option value="2048">2048</option>
                <option value="2049">2049</option>
                <option value="2050">2050</option>
                <option value="2051">2051</option>
                <option value="2052">2052</option>
                <option value="2053">2053</option>
                <option value="2054">2054</option>
                <option value="2056">2056</option>
                <option value="2055">2055</option>
                <option value="2058">2058</option>
                <option value="2057">2057</option>
                <option value="2060">2060</option>
                <option value="2059">2059</option>
                <option value="2062">2062</option>
                <option value="2061">2061</option>
                <option value="2064">2064</option>
                <option value="2063">2063</option>
                <option value="2066">2066</option>
                <option value="2065">2065</option>
                <option value="2068">2068</option>
                <option value="2067">2067</option>
                <option value="2070">2070</option>
                <option value="2069">2069</option>
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
                <div class="days__blocks">1</div>
                <div class="days__blocks">2</div>
                <div class="days__blocks">3</div>
                <div class="days__blocks">4</div>
                <div class="days__blocks">5</div>
                <div class="days__blocks">6</div>
                <div class="days__blocks">7</div>
                <div class="days__blocks">8</div>
                <div class="days__blocks">9</div>
                <div class="days__blocks">10</div>
                <div class="days__blocks">11</div>
                <div class="days__blocks">12</div>
                <div class="days__blocks">13</div>
                <div class="days__blocks">14</div>
                <div class="days__blocks">15</div>
                <div class="days__blocks">16</div>
                <div class="days__blocks">17</div>
                <div class="days__blocks">18</div>
                <div class="days__blocks">19</div>
                <div class="days__blocks">20</div>
                <div class="days__blocks">21</div>
                <div class="days__blocks">22</div>
                <div class="days__blocks">23</div>
                <div class="days__blocks">24</div>
                <div class="days__blocks">25</div>
                <div class="days__blocks">26</div>
                <div class="days__blocks">27</div>
                <div class="days__blocks">28</div>
                <div class="days__blocks">29</div>
                <div class="days__blocks">30</div>
                <div class="days__blocks">31</div>
                <div class="days__blocks">32</div>
                <div class="days__blocks">33</div>
                <div class="days__blocks">34</div>
                <div class="days__blocks">35</div>
                <div class="days__blocks">36</div>
                <div class="days__blocks">37</div>
                <div class="days__blocks">38</div>
                <div class="days__blocks">39</div>
                <div class="days__blocks">40</div>
                <div class="days__blocks">41</div>
                <div class="days__blocks">42</div>
            </div>
        </div>
    </section>





</main>






    <!-- my script -->
    <script src="./public/assets/js/script.js"></script>
</body>
</html>