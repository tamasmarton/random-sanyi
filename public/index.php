<?php
    header('Content-Type: text/html; charset=utf-8');
    $quote = array(
        '„Az egybubis az egy kicsit drágább, mert hát abból ki kellett vennem a többi bubit.”' => 1,
        '„Miért Üvegtigris? Mér, mi legyen? Fapuma?”' => 2,
        '„Ízirájder, öcsém, ízirájder!”' => 3,
        '„Nekem ne mondja senki, hogy ne legyek kemény! Anyámmal élek, Babettával járok, macskám van és ne is legyek kemény?”' => 4,
        '„Apa egyszer azt mondta: Ha padlón vagy, szedjél fel onnan valamit.”' => 5,
        '„Bajusz, Rezső! Hol vagytok!?”' => 6,
        '„Szábúsz!”' => 7,
        '„Amikor Cingár szakszizik akkor mindig megmozdul bennem valami, egy érzés, hogy megfojtom vagy valami ilyesmi!”' => 8,
        '„Fónok, alsógatyát is?”' => 9,
        '„Pfúú! Hú, dá szép!”' => 10,
        '„Lovacska! Enyém vagy, lovacska! Nem vagy enyém?”' => 11,
        '„Szávusz! Mit akarsz? Kávé? Nincsen. Szándics? Nem adok! Menj innen, hulye kocsog! Nem kapsz semmit, elfogyott, kifogyott, kész, vége, mindennek! Fölfordultam, megéjtetted?! Pfuh,pfum. Csoki! Hol vagy? Gaben! Ezt nem hiszem el! Vigyázzál\' mert behúzok neked egy olyan stjigulát, hogy nem igaz! Mé\' nem jön ide senki? Sanyi, hol vagy? Itt vagyok, fónök! Há\' én vagyok a király, Lali meg a császáj, fónök!”' => 12,
        '„Szerbusz! Kérsz békát?”' => 13,
        '„Azt képzeljétek el mitörtént... Tudok csinálni szalmából egeret”' => 14,
        '„Gracias mucsácsó!”' => 15,
        '„Nyugavér, chicano!”' => 16,
        '„Mennyire vagy túsz? A sörhöz odaférsz?”' => 17,
        '„Bitte danke! Ahány nyelv, annyi ember. Azt hiszitek, én nem olvasok?”' => 18,
        '„Sose volt ilyen jó! Sokkot kaptál!”' => 19,
        '„Felpróbálni az összes csálé csöcsű stoppos picsát!”' => 20,
        '„Egyszer úgy televágom az összes gázos luvnyát!”' => 21,
        '„Tudod miből készül az egér? Egérből bazmeg!”' => 22,
        '„Alátét?! Mi alátét, bazdmeg?”' => 23,
        '„Rendes gyerek, csak morálisan ingoványos.”' => 24,
        '„Kis ház, kis kert, kis tisztesség.”' => 25,
        '„Nem krokodil,nyaligátor!”' => 26,
        '„Lalikám, hoznék én ide a napokban egy ... körhintát.”' => 27,
        '„Újra bevezették a márkát. Kéne venni,nem? Nem, na hello!”' => 28,
        '„Ha te most állandóan kólát innál, akkor azt mondanám neked, hogy igyál Traubit. Mert ha Traubit iszol, ugyanazt a cukros löttyöt csurgatod a beleidbe, mint a többiek. De azáltal, hogy ők kóláznak, te meg traubizol, különbözöl a többiektől.”' => 29,
        '„Mé\'? Segít üldözni a bűnt! Alkoholteszter, Lalikám. Na, megállítunk valakit. Érted. Okoskodik. Érted. Megfújatjuk! Van valami. Hibáztat, hogy rossz a szonda. Na, akkor én előveszek egy kontrollszondát. Megfújom. Ha az övének olyan színe van mint az enyémnek má\' veszem is el a jogsiját. Törvény elöl nem lehet elbújni!”' => 30,
        '„Hamburger van?”' => 31,
        '„Edd meg, ha éhes vagy, edd meg, bazmeg!”' => 32,
        '„Tiszteletem Oszi bátyám! ”' => 33,
        '„Mit mond? -Hogy húzzál haza, aztán főzessél anyáddal, kis köcsög!”' => 34,
        '„Figyelj, Róka! Jól látod: be vagyunk zárva. És pucérak vagyunk... És esett is. De nekünk itt nem jó! Úgyhogy, légy olyan jó, menj hátra és verd le azt a kurva lakatot!”' => 35,
        '„Lalikám, ha végeztetek, adjál mán egy gyógysört.”' => 36,
        '„Csikánó Bulls!”' => 37,
        '„Olyan szomjas vagyok, hogy behugyozok.”' => 38,
        '„Ezt én is tolnám, Záhonyig!”' => 39,
        '„Örül, majd, mint majom a farkamnak!”' => 40,
        '„Mi van, Lalikám? Lefagyott a rendszer?”' => 41,
        '„Mit pofázol csíra? Nincs pénzed tetőre?”' => 42,
        '„Hogy lehet... ilyen szar helyen... ez a kocsi?”' => 43,
        '„Megnősült a Kétfogú Zsuzsika. A Büdös Tobi vette el.”' => 44,
        '„Sárkány olyan, mint a punci!”' => 45,
        '„Jó helyen van ez a kocsi. Te vagy rossz helyen... meg én.”' => 46,
        // '„”' => 47,
        // '„”' => 48,
        // '„”' => 49,
        // '„”' => 50,
    );
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sanyi</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:100&amp;subset=latin-ext" rel="stylesheet">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0 10%;
                width: 80%;
                display: table;
                font-weight: 100;
                font-family: 'Roboto';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                color: #b0bec5;
                font-size: 60px;
            }

            .bar {
                position: fixed;
                top: 0; left: 0; z-index: 2;
                width: 100%;
                height: 5px;
            }

            .bar .indicator {
                width: 0;
                height: 5px;
                content: '';
                background-color: #3498db;
                animation: loading 5s linear infinite;
            }

            @keyframes loading {
                from { left: 50%; width: 0; z-index: 100; }
                to { left: 0; width: 100%; }
            }
        </style>
    </head>
    <body>
        <div class="bar">
            <div class="indicator"></div>
        </div>
        <div class="container">
            <div class="content">
                <div class="title">
                    <?= array_rand($quote); ?>
                </div>
            </div>
        </div>

        <script>
            setTimeout(function(){ window.location.reload(1); }, 5000);

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-31654649-3', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
