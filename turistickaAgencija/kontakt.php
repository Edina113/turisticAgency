<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ja BiH da Putujem</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/loginfrm.css">
    <link rel="stylesheet" href="css/kontaktfrm.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script>
    $(document).ready(function() {
        jQuery('#camera_wrap').camera({
            loader: false,
            pagination: false,
            minHeight: '444',
            thumbnails: false,
            height: '48.375%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
        });

        var owl = $("#owl");
        owl.owlCarousel({
            items: 2,
            itemsDesktop: [995, 2],
            itemsDesktopSmall: [767, 2],
            itemsTablet: [700, 2],
            itemsMobile: [479, 1],
            navigation: true,
            pagination: false
        });
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
    </script>
</head>

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
                            <li><a href="posebne ponude.php">POSEBNE PONUDE</a></li>
                            <li><a href="blog.php">BLOG</a></li>
                            <li class="current"><a href="kontakt.php">KONTAKT</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_12">
                <h1>
                    <a href="index.html">
                        <img src="images/logo.png" alt="Your Happy Family">
                    </a>
                </h1>
            </div>
        </div>
    </header>
    <!--==============================Sadržaj=================================-->
    <div class="content">
        <div class="container_12">
            <div class="grid_5">
                <h3>Kontakt</h3>
                <div class="map">
                    <p><span class="blog">Za dodatne informacije i rezervacije posjetite nas ili nas kontaktirajte
                        </span></p>
                    <div class="clear"></div>
                    <address>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=zmaja%20od%20bosne%20zenica&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                                <a href="https://www.online-timer.net"></a>
                                <br>
                                <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }
                                </style>
                                <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                                </style>
                            </div>
                        </div>
                        <dl style="padding-bottom:40px">
                            <dt>ja BiH da putujem <br>
                                Zenica, BiH<br>
                                Zmaja od Bosne 56
                            </dt>
                            <dd><span>Mobitel:</span>+387 76 890 789</dd>
                            <dd><span>Fiksni:</span>+387 45 678 890</dd>
                            <dd><span>FAX:</span>+387 56 344 787</dd>
                            <dd>E-mail: <a href="#" class="col1">travel@gmail.com</a></dd>
                        </dl>
                    </address>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br />
            <div class="grid_6 prefix_1">
                <h1>Javite se</h1>
                <form method="POST" name="contactform" action="php/contact-form-handler.php">
                    <hr>
                    <p>
                        <label for='name'>Ime:</label> <br>
                        <input type="text" name="name" placeholder="John Doe" required>
                    </p>
                    <p>
                        <label for='email'>Email:</label> <br>
                        <input type="text" name="email" placeholder="johndoe@gmail.com" required> <br>
                    </p>
                    <p>
                        <label for='message'>Poruka:</label> <br>
                        <textarea name="message" required></textarea>
                    </p>
                    <hr>
                    <input type="submit" id="btn1" value="Pošalji"><br>
                </form>

                <script language="JavaScript">
                var frmvalidator = new Validator("contactform");
                frmvalidator.addValidation(
                    "name", "req", "Molimo unesite vaše ime!");
                frmvalidator.addValidation("email", "req", "Molimo unesite vas email!");
                frmvalidator.addValidation("email", "email", "Molimo unesite pravilan email!");
                </script>


            </div>

            <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript">
            </script>
        </div>
    </div>
    <!--==============================podnožje=================================-->
    <footer>
        <div class="container_12">
            <div class="grid_12">
                <div class="socials">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                </div>
                <div class="copy">
                    | <a href="#">Politika privatnosti</a> | ja BiH da putujem
                </div>
            </div>
        </div>
    </footer>

</html>
</body>

</html>