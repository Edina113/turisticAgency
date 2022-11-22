<?php
    require "php/config.php";
    include "php/html_head.php";

	function ucitaj_gradove(){
		$connect=mysqli_connect("localhost","root","","agencija");
		$output='';
		$sql1="SELECT * FROM gradovi ORDER BY 1";
		$result=mysqli_query($connect,$sql1);
		while($ispisrez = mysqli_fetch_array($result)){
		$output.='<option value="'.$ispisrez["id_grada"].'">'.$ispisrez["naziv"].'</option>';

		}
		return $output;
		}
?>

<body class="page1" id="top">
    <!--==============================zaglavlje=================================-->
    <header>
        <div class="container_12">
            <div class="grid_12">
                <div class="menu_block">
                    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                        <ul class="sf-menu">
                            <li class="current"><a href="index.php">O NAMA</a></li>
                            <li><a href="vruceture.php">VRUĆE TURE</a></li>
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
    <!--============================sadržaj=================================-->
    <div class="slider_wrapper">
        <div id="camera_wrap" class="">
            <div data-src="slike/kravice.jpg">
                <div class="caption fadeIn">
                    <h2>Kravice</h2>
                    <div class="price">
                        OD
                        <span>100KM</span>
                    </div>
                    <a href="#">Pročitaj više</a>
                </div>
            </div>
            <div data-src="slike/neum.jpg">
                <div class="caption fadeIn">
                    <h2>Neum</h2>
                    <div class="price">
                        OD
                        <span>150KM</span>
                    </div>
                    <a href="#">Pročitaj više</a>
                </div>
            </div>
            <div data-src="slike/prokosko1.jpg">
                <div class="caption fadeIn">
                    <h2>Prokoško jezero</h2>
                    <div class="price">
                        OD
                        <span>130KM</span>
                    </div>
                    <a href="#">Pročitaj više</a>
                </div>
            </div>
        </div>
    </div>
    <!--==============================Content=================================-->
    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="grid_4">
                <div class="banner">
                    <img src="slike/panonska jezera.jpeg" alt="">
                    <div class="label">
                        <div class="title">Panonska jezera</div>
                        <div class="price">OD<span> 75KM</span></div>
                        <a href="#">Pročitaj više</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="slike/jajce.jpg" alt="">
                    <div class="label">
                        <div class="title">Jajce</div>
                        <div class="price">OD<span>60KM</span></div>
                        <a href="#">Pročitaj više</a>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="slike/sarajevo.jpg" alt="">
                    <div class="label">
                        <div class="title">Sarajevo</div>
                        <div class="price">OD<span>190KM</span></div>
                        <a href="#">Pročitaj više</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="grid_6">
                <h3>Rezervacija</h3>
                <!--==============================Forma=================================-->
                <form name="rezervacija" method="post" action="php/rezervacija.php">
                    <div class="elem-group">
                        <label for="name">Ime i prezime</label>
                        <input type="text" id="name" name="ime" placeholder="Niko Neznanovic" pattern=[A-Z\sa-z]{3,20}
                            required>
                    </div>
                    <div class="elem-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="niko@gmail.com" required>
                    </div>
                    <div class="elem-group">
                        <label for="city">Odaberite grad</label>
                        <select name="gradovi" id="gradovi">
                            <option value="">Gradovi</option>
                            <?php echo ucitaj_gradove(); ?>
                        </select>
                    </div>
                    <div class="elem-group">
                        <label for="city">Odaberite hotel</label>
                        <select name="hoteli" id="hoteli">
                            <option value="">Hoteli</option>
                        </select>
                    </div>
                    <div class="elem-group">
                        <label for="phone">Telefon</label>
                        <input type="tel" id="phone" name="telefon" placeholder="498-348-387"
                            pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{3}) required>
                    </div>
                    <hr>
                    <div class="elem-group inlined">
                        <label for="adult">Odrasli</label>
                        <input type="number" id="adult" name="odrasli" placeholder="2" min="1" required>
                    </div>
                    <div class="elem-group inlined">
                        <label for="child">Djeca</label>
                        <input type="number" id="child" name="djeca" placeholder="2" min="0" required>
                    </div>
                    <div class="elem-group inlined">
                        <label for="checkin-date">Datum prijave</label>
                        <input type="date" id="checkin-date" name="checkin" required>
                    </div>
                    <div class="elem-group inlined">
                        <label for="checkout-date">Datum odjave</label>
                        <input type="date" id="checkout-date" name="checkout" required>
                    </div>
                    <div class="elem-group">
                        <label for="room-selection">Odaberite sobu</label>
                        <select id="room-selection" name="tipsobe" required>
                            <option value="">Odaberite sobu iz Liste</option>
                            <option value="1">Jeftina</option>
                            <option value="2">Prosječna</option>
                            <option value="3">Skupa</option>
                        </select>
                    </div>
                    <hr>
                    <div class="elem-group">
                        <label for="message">Još nešto?</label>
                        <textarea id="message" name="poruka"
                            placeholder="Napišite nam bilo šta drugo što bi moglo biti važno." required></textarea>
                    </div>
                    <button type="submit" value="submit">Iznajmite!</button>
                </form>
                <!--==============================Kraj forme=================================-->
            </div>
            <!--==============================Login forma=================================-->
            <div id="aside">
                <br /><br /><br />
                <div id="frm">
                    <p>Prijava</p>
                    <form name="f1" action="php/authentication.php" onsubmit="return validation()" method="POST">
                        <p>
                            <label> Korisničko ime: </label>
                            <input type="text" id="user" name="user" />
                        </p>
                        <p>
                            <label> Lozinka: </label>
                            <input type="password" id="pass" name="pass" />
                        </p>
                        <p>
                            <input type="submit" id="btn" value="Prijava" />
                        </p>
                    </form>
                </div>
            </div>
            <!--==============================Kraj forme=================================-->
            <div class="grid_5 prefix_1">

                <h3>Dobro došli!</h3>
                <img src="slike/narcisa.jpg" alt="" class="img_inner fleft" width="200px" height="200px">
                <div class="extra_wrapper">
                    <p>Ako želite nešto nezaboravno za sebe i Vaše najmilije tu smo da ispunimo sva Vaša očekivanja.</p>
                    <div class="col1">Narcisa Hadžajlić</div>
                </div>
                <div class="clear cl1"></div>

                <h4>Klijenti o nama</h4>
                <blockquote class="bq1">
                    <img src="slike/zerina.jpg" width="200px" height="200px" alt="" class="img_inner noresize fleft">
                    <div class="extra_wrapper">
                        <p> Bilo mi je jako lijepo putovati sa Vašom agencijom. Raduje me nova putovanja s Vama.
                            Preporuke svima. </p>
                        <div class="col1">Zerina Srebrenica</div>
                        <a href="#" class="btn">Više</a>
                        <div class="alright">

                        </div>
                    </div>
                </blockquote>
            </div>
            <div class="grid_12" style="padding-top:100px">
                <h3 class="head1">Posljednje novosti</h3>
            </div>
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2014-01-01">10<span>Jan</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Sara</a></div>
                        Sve preporuke za agenciju. Nikad bolje se nisam provela.
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2014-01-01">21<span>Jan</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Nadja</a></div>
                        Nezaboravno iskustvo. Želim opet.
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="block1">
                    <time datetime="2014-01-01">15<span>Feb</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="#">Dalia</a></div>
                        Bilo mi je prelijepo. Jedva čekam sljedeće putovanje
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================footer=================================-->
    <?php
            include "php/footer.php";
        ?>

    <script>
    var currentDateTime = new Date();
    var year = currentDateTime.getFullYear();
    var month = (currentDateTime.getMonth() + 1);
    var date = (currentDateTime.getDate() + 1);

    if (date < 10) {
        date = '0' + date;
    }
    if (month < 10) {
        month = '0' + month;
    }

    var dateTomorrow = year + "-" + month + "-" + date;
    var checkinElem = document.querySelector("#checkin-date");
    var checkoutElem = document.querySelector("#checkout-date");

    checkinElem.setAttribute("min", dateTomorrow);

    checkinElem.onchange = function() {
        checkoutElem.setAttribute("min", this.value);
    }
    </script>
    <script>
    $(document).ready(function() {
        $('#gradovi').change(function() {
            var grad_id = $(this).val();
            $.ajax({
                url: "php/dohvatiHotele.php",
                method: "POST",
                data: {
                    gradID: grad_id
                },
                dataType: "text",
                success: function(data) {
                    $('#hoteli').html(data);
                }
            })
        })
    })
    </script>
    <script>
    function validation() {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
            alert("Username i sifra su prazni");
            return false;
        } else {
            if (id.length == "") {
                alert("UserName je prazan");
                return false;
            }
            if (ps.length == "") {
                alert("Sifra je prazna");
                return false;
            }
        }
    }
    </script>
</body>

</html>