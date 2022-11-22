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
                            <li><a href="ponude.php">POSEBNE PONUDE</a></li>
                            <li class="current"><a href="blog.php">BLOG</a></li>
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
    <!--==============================Sadržaj=================================-->
    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="grid_7">
                <h3>Nedavni postovi</h3>
                <div class="blog">
                    <time datetime="2014-10-01">15<span>Feb</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Posjeta glavnom gradu BiH</a></div>Posted by
                        <a href="#">Admin</a>
                    </div>
                    <div class="clear"></div>
                    <img src="slike/sarajevo1.jpg" alt="" class="img_inner">
                    <p>Imali smo priliku posjetiti glavni grad BiH - Sarajevo. Na ovom putovanju kao i na svim do sada
                        naši klijenti su bili prezadovoljni. </p>
                    <br>
                    <a href="#" class="link1">Pročitaj više</a>
                </div>
                <div class="blog">
                    <time datetime="2014-10-01">17<span>Feb</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Posjeta Višegradu</a></div>Posted by
                        <a href="#">Admin</a>
                    </div>
                    <div class="clear"></div>
                    <img src="slike/visegrad.jpg" alt="" class="img_inner">
                    <p>Ovog puta posjetili smo grad na Drini. A kako je bilo nama i našim klijentima saznajte na linku
                        ispod.</p>
                    <br>
                    <a href="#" class="link1">Pročitaj više</a>
                </div>
            </div>
            <div class="grid_3 prefix_1">
                <h3 class="head1">Kategorije</h3>
                <ul class="list">
                    <li><a href="#">Zašto je putovanje dobro za nas? </a></li>
                    <li><a href="#">Kako iskoristiti ovo ljeto? </a></li>
                    <li><a href="#">A šta poslije putovanja </a></li>
                    <li><a href="#">Prirodne ljepote BiH </a></li>
                    <li><a href="#">Otići u drugu državu ili ostati </a></li>

                </ul>
                <h3 class="head1">Arhivirano</h3>
                <ul class="list">
                    <li><a href="#">November 2020</a></li>
                    <li><a href="#">October 2020</a></li>
                    <li><a href="#">September 2020</a></li>
                    <li><a href="#">August 2020</a></li>
                    <li><a href="#">July 2020</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================zagavlje=================================-->
    <?php
            include "php/footer.php";
        ?>
</body>

</html>