<?php
    // $month; // récupérer le mois chisit par l'utilisateur
    // $years; // récupérer l'année chisie par l'utilisateur 
    // $NbeDaysMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year); // connaitre le nombre de jours dans un mois
    // var_dump($NbeDaysMonth);
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
            <select name="months" id="months">
                <option value="">--Veuillez choisir un mois--</option>
                <option value="january">Janvier</option>
                <option value="february">Février</option>
                <option value="march">Mars</option>
                <option value="april">Avril</option>
                <option value="may">Mai</option>
                <option value="june">Juin</option>
                <option value="july">Juillet</option>
                <option value="august">Août</option>
                <option value="september">Septembre</option>
                <option value="october">Octobre</option>
                <option value="november">Novembre</option>
                <option value="december">Décembre</option>
            </select>
            <label for="years">Choisir l'année à afficher :</label>
            <select name="years" id="years">
                <!-- option.value$@1970*100 raccourci EMMET -->
                <option value="">--Veuillez choisir une année--</option>
                <option value="value1970">1970</option>
                <option value="value1971">1971</option>
                <option value="value1972">1972</option>
                <option value="value1973">1973</option>
                <option value="value1974">1974</option>
                <option value="value1975">1975</option>
                <option value="value1976">1976</option>
                <option value="value1977">1977</option>
                <option value="value1978">1978</option>
                <option value="value1979">1979</option>
                <option value="value1980">1980</option>
                <option value="value1981">1981</option>
                <option value="value1982">1982</option>
                <option value="value1983">1983</option>
                <option value="value1984">1984</option>
                <option value="value1985">1985</option>
                <option value="value1986">1986</option>
                <option value="value1987">1987</option>
                <option value="value1988">1988</option>
                <option value="value1989">1989</option>
                <option value="value1990">1990</option>
                <option value="value1991">1991</option>
                <option value="value1992">1992</option>
                <option value="value1993">1993</option>
                <option value="value1994">1994</option>
                <option value="value1995">1995</option>
                <option value="value1996">1996</option>
                <option value="value1997">1997</option>
                <option value="value1998">1998</option>
                <option value="value1999">1999</option>
                <option value="value2000">2000</option>
                <option value="value2001">2001</option>
                <option value="value2002">2002</option>
                <option value="value2003">2003</option>
                <option value="value2004">2004</option>
                <option value="value2005">2005</option>
                <option value="value2006">2006</option>
                <option value="value2007">2007</option>
                <option value="value2008">2008</option>
                <option value="value2009">2009</option>
                <option value="value2010">2010</option>
                <option value="value2011">2011</option>
                <option value="value2012">2012</option>
                <option value="value2013">2013</option>
                <option value="value2014">2014</option>
                <option value="value2015">2015</option>
                <option value="value2016">2016</option>
                <option value="value2017">2017</option>
                <option value="value2018">2018</option>
                <option value="value2019">2019</option>
                <option value="value2020">2020</option>
                <option value="value2021">2021</option>
                <option value="value2022">2022</option>
                <option value="value2023">2023</option>
                <option value="value2024">2024</option>
                <option value="value2025">2025</option>
                <option value="value2026">2026</option>
                <option value="value2027">2027</option>
                <option value="value2028">2028</option>
                <option value="value2029">2029</option>
                <option value="value2030">2030</option>
                <option value="value2031">2031</option>
                <option value="value2032">2032</option>
                <option value="value2033">2033</option>
                <option value="value2034">2034</option>
                <option value="value2035">2035</option>
                <option value="value2036">2036</option>
                <option value="value2037">2037</option>
                <option value="value2038">2038</option>
                <option value="value2039">2039</option>
                <option value="value2040">2040</option>
                <option value="value2041">2041</option>
                <option value="value2042">2042</option>
                <option value="value2043">2043</option>
                <option value="value2044">2044</option>
                <option value="value2045">2045</option>
                <option value="value2046">2046</option>
                <option value="value2047">2047</option>
                <option value="value2048">2048</option>
                <option value="value2049">2049</option>
                <option value="value2050">2050</option>
                <option value="value2051">2051</option>
                <option value="value2052">2052</option>
                <option value="value2053">2053</option>
                <option value="value2054">2054</option>
                <option value="value2055">2055</option>
                <option value="value2056">2056</option>
                <option value="value2057">2057</option>
                <option value="value2058">2058</option>
                <option value="value2059">2059</option>
                <option value="value2060">2060</option>
                <option value="value2061">2061</option>
                <option value="value2062">2062</option>
                <option value="value2063">2063</option>
                <option value="value2064">2064</option>
                <option value="value2065">2065</option>
                <option value="value2066">2066</option>
                <option value="value2067">2067</option>
                <option value="value2068">2068</option>
                <option value="value2069">2069</option>
                <option value="value2070">2070</option>
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
            <h2><span>Janvier</span><br> <span id="h2__year"></span>2024</h2>
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