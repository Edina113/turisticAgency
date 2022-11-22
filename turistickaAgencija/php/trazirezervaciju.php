<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
if (isset($_POST['azuriraj'])){
    $id=$_POST['id'];
    $ime=	$_POST['ime'];
    $email=	$_POST['email'];
    $gradovi=	$_POST['gradovi'];
    $hotel=	$_POST['hoteli'];
    $telefon=$_POST['telefon'];
    $datumPrijave=	$_POST['checkin'];
    $datumOdjave=	$_POST['checkout'];
    $odrasli=	$_POST['odrasli'];
    $sobe=	$_POST['tipsobe'];
    $djeca=	$_POST['djeca'];
    $poruka=	$_POST['poruka'];
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    // povezivanje
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
    mysqli_select_db($conn, "agencija");
    mysqli_error($conn);
    $sql="UPDATE rezervacija SET ime='$ime',email='$email',grad='$gradovi',hotel='$hotel',datum_prijave='$datumPrijave',datum_odjave='$datumOdjave',
    odrasli='$odrasli',djeca='$djeca',sobe='$sobe',poruka='$poruka',telefon='$telefon' WHERE id_rezervacija=$id";

    $result=mysqli_query($conn, $sql) or die("<h2>Pogreska kod updejta rezervacije</h2>".mysqli_error($conn));
    
}
if(isset($_POST['dugme1'])){
    
    $izbor=strtolower($_POST['izbor']);
    $Dbhost="localhost";
    $Dbuser="root";
    $Dbpass="";
    $Dbname="agencija";

    //konekcija na bazu podataka
    $connection=new mysqli($Dbhost,$Dbuser,$Dbpass,$Dbname);
    
    
    //test da li je konekcija uspjela
    if (!$connection) {
        die("Konekcija nije uspjela: " . mysqli_connect_error());
      }
    
        $upit1 = "SELECT * FROM rezervacija WHERE ime LIKE '$izbor'";
        $rezultat1 = $connection->query($upit1);
        if (!$rezultat1) {
            echo "Ne postoji ta rezervacija";
            include 'rezervacija_edit';
            exit();
        }
        
    if (@$rezultat1->num_rows > 0) {
        //ispis po redovima
        while($row = $rezultat1->fetch_assoc()) {
            $id=$row["id_rezervacija"];
            $ime=strtolower($row["ime"]);
            $email=$row["email"];
            $grad=$row["grad"];
            $hotel=$row["hotel"];
            $datumP=$row["datum_prijave"];
            $datumO=$row["datum_odjave"];
            $odrasli=$row["odrasli"];
            $djeca=$row["djeca"];
            $sobe=$row["sobe"];
            $poruka=$row["poruka"];
            $telefon=$row["telefon"];
            //Za ispisivanje postojecih uposlenika preko ID
            include 'rezervacija_edit.php';
            echo ' <form  method="post" action="trazirezervaciju.php">
                        <div class="elem-group">
							<label for="name">ID</label>
							<input type="number" id="id" name="id" placeholder="" value="'.$row['id_rezervacija'].'" pattern=[A-Z\sa-z]{3,20} required>
						</div>
						<div class="elem-group">
							<label for="name">Ime i prezime</label>
							<input type="text" id="name" name="ime" placeholder="Muamer Huskanovic" value="'.$row['ime'].'" pattern=[A-Z\sa-z]{3,20} required>
						</div>
						<div class="elem-group">
							<label for="email">E-mail</label>
							<input type="email" id="email" name="email" value="'.$row['email'].'" placeholder="muamer.h@email.com" required>
						</div>
						<div class="elem-group">
							<label for="city">Odaberite grad</label>
								<select name="gradovi" value="'.$row['grad'].' id="gradovi">
										'.ucitaj_gradove($grad).'
								</select>
							</div>
						<div class="elem-group">
						<label for="city">Odaberite hotel</label>
								<select name="hoteli" id="hoteli">
                                '.ucitaj_hotele($hotel).'
								</select>
						</div>
						<div class="elem-group">
							<label for="phone">Telefon</label>
							<input type="tel" id="phone" name="telefon" value="'.$row['telefon'].'" placeholder="498-348-387" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{3}) required>
						</div>
						<hr>
						<div class="elem-group inlined">
							<label for="adult">Odrasli</label>
							<input type="number" id="adult" value="'.$row['odrasli'].'" name="odrasli" placeholder="2" min="1" required>
						</div>
						<div class="elem-group inlined">
							<label for="child">Djeca</label>
							<input type="number" id="child" value="'.$row['djeca'].'" name="djeca" placeholder="2" min="0" required>
						</div>
						<div class="elem-group inlined">
							<label for="checkin-date">Datum prijave</label>
							<input type="date" id="checkin-date" value="'.$row['datum_prijave'].'" name="checkin" required>
						</div>
						<div class="elem-group inlined">
							<label for="checkout-date">Datum odjave</label>
							<input type="date" id="checkout-date" value="'.$row['datum_odjave'].'" name="checkout" required>
						</div>
						<div class="elem-group">
							<label for="room-selection">Odaberite sobu</label>
							<select id="room-selection" name="tipsobe" required>
								';
                                if(1==$row['sobe']){
                                    echo '<option value="1" selected>Jeftina</option>
                                    <option value="2">Prosječna</option>
								    <option value="3">Skupa</option>';
                                }else if(2==$row['sobe']){
                                    echo '<option value="1">Jeftina</option>
                                    <option value="2" selected>Prosječna</option>
								    <option value="3">Skupa</option>';
                                }else{
                                    echo '<option value="1">Jeftina</option>
                                    <option value="2" >Prosječna</option>
								    <option value="3" selected>Skupa</option>';
                                }
						echo '
							</select>
						</div>
						<hr>
						<div class="elem-group">
							<label for="message">Još nešto?</label>
							<textarea id="message" value="" name="poruka" placeholder="" required>'.$row['poruka'].'</textarea>
						</div>
                        <input type="submit" name="azuriraj" value="Ažuriraj rezervaciju">
					</form>';
            

        }
    }else{
        //Ako je prazan input za uposlenika ili ako nema uposlenika
       
        echo "<h2 style='margin-left:24%; margin-top:5%; margin-bottom:2%;color:black; font-size:28pt;'>Tog uposlenika nema. Molimo potražite ponovo!</h2>";
        include 'rezervacija_edit.php';
            
    }
    $connection->close();
}else{
    header("location:javascript://history.go(-1)");
}
    ?>
</body>

</html>