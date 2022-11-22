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
                            <li class="current"><a href="vruceture.php">VRUĆE TURE</a></li>
                            <li><a href="ponude.php">POSEBNE PONUDE</a></li>
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
    <!--==============================Sadržaj=================================-->
    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="banners">
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/banja-luka.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Banja Luka</div>
                            <div class="price">od<span>120 KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/etno selo cardaci.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Etno selo Čardaci</div>
                            <div class="price">od<span>80KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/stanisici.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Etno selo Stanišići</div>
                            <div class="price">od<span>90KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/ramsko.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Ramsko jezero</div>
                            <div class="price">od<span>120KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/bihać-una.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Bihać</div>
                            <div class="price">od<span>220KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/konjic.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Konjic</div>
                            <div class="price">od<span>220KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/mostar.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Mostar</div>
                            <div class="price">od<span>330KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="slike/počitelj.jpg" alt="" width="300px" height="300px">
                        <div class="label">
                            <div class="title">Počitelj</div>
                            <div class="price">od<span>220KM</span></div>
                            <a href="#">Pročitaj više</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================podnožje=================================-->
    <?php
            include "php/footer.php";
        ?>
</body>

</html>