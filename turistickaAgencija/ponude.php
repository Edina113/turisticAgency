<?php
    require "php/config.php";
    include "php/html_head.php";
?>

<body>
    <!--==============================zaglavlje=================================-->
    <header>
        <div class="container_12">
            <div class="grid_12">
                <div class="menu_block">
                    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                        <ul class="sf-menu">
                            <li><a href="index.php">O NAMA</a></li>
                            <li><a href="vruceture.php">VRUĆE TURE</a></li>
                            <li class="current"><a href="ponude.php">POSEBNE PONUDE</a></li>
                            <li><a href="blog.php">BLOG</a></li>
                            <li><a href="kontakt.php">KONTAKT</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_12">
                <h1>
                    <a href="index.php">
                        <img src="images/logo.png" alt="Your Happy Family">
                    </a>
                </h1>
            </div>
        </div>
    </header>
    <!--============================sadržaj=================================-->
    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="grid_8">
                <h3>Posebna ponuda</h3>
                <div class="block2">
                    <img src="slike/visegrad.jpg" alt="" class="img_inner fleft" width="300px" height="300px">
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Višegrad</a></div>
                        <p>Pridružite nam se na nezaboravnoj turi prema gradu na Drini </p>
                        <br />
                        <br>
                        <a href="#" class="link1">Pročitaj više</a>
                    </div>
                </div>
                <div class="block2">
                    <img src="slike/sarajevo1.jpg" alt="" class="img_inner fleft" width="300px" height="290px">
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Sarajevo</a></div>
                        <br />
                        <p>Ne propustite samo još ovaj vikend imamo posebne pogodnosti za sve Vas! </p>
                        <br />
                        <a href="#" class="link1">Pročitaj više</a>
                    </div>
                </div>
                <div class="block2">
                    <img src="slike/hutovo blato.jpg" alt="" class="img_inner fleft" width="300px" height="310px">
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Hutovo blato</a></div>
                        <br />
                        <p>Samo još danas traje akcija na obilazak jednog i jedinog Hutovog blata. Hutovo blato je
                            osnovano 1995.godine. </p>
                        <p>Nalazi se u jugoistočnoj Hercegovini, sa lijeve strane Neretve na teritoriju općina Čapljina
                            i Stolac. </p>
                        <br />
                        <a href="#" class="link1">Pročitaj više</a>
                    </div>
                </div>
            </div>
            <div class="grid_3 prefix_1">
                <h5>Izaberi grad</h5>
                <ul class="list">
                    <li><a href="#">Sarajevo</a></li>
                    <li><a href="#">Vitez</a></li>
                    <li><a href="#">Mostar</a></li>
                    <li><a href="#">Jajce</a></li>
                    <li><a href="#">Ljubuški</a></li>
                    <li><a href="#">Tuzla</a></li>
                    <li><a href="#">Neum</a></li>
                    <li><a href="#">Višegrad</a></li>
                    <li><a href="#">Bihać</a></li>
                    <li><a href="#">Blagaj</a></li>
                    <li><a href="#">Konjic</a></li>
                    <li><a href="#">Bijeljina</a></li>
                </ul>
                <a href="#" class="link1">Pregledaj <span class="low"> SVE</span></a>
            </div>
        </div>
    </div>
    <!--==============================podnožje=================================-->
    <?php
        include "php/footer.php";
    ?>
</body>

</html>