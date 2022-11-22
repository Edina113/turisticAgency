<!DOCTYPE html>
<html>
<?php
	function ucitaj_gradove($grad){
		$connect=mysqli_connect("localhost","root","","agencija");
		$output='';
		$sql1="SELECT * FROM gradovi ORDER BY 1";
		$result=mysqli_query($connect,$sql1);
		while($ispisrez = mysqli_fetch_array($result)){
            if($grad==$ispisrez["id_grada"]){
                $output.='<option value="'.$ispisrez["id_grada"].'" selected>'.$ispisrez["naziv"].'</option>';
            }
            if($grad!=$ispisrez["id_grada"]){
                $output.='<option value="'.$ispisrez["id_grada"].'">'.$ispisrez["naziv"].'</option>';
            }

		}
		return $output;
		}

    function ucitaj_hotele($hotel){
        $connect=mysqli_connect("localhost","root","","agencija");
		$output='';
		$sql2="SELECT id_hotela,naziv FROM hoteli";
        $result=mysqli_query($connect,$sql2);
        while($ispisrez = mysqli_fetch_array($result)){
            if($hotel==$ispisrez["id_hotela"]){
                $output.='<option value="'.$ispisrez["id_hotela"].'" selected>'.$ispisrez["naziv"].'</option>';
            }
            if($hotel!=$ispisrez["id_hotela"]){
                $output.='<option value="'.$ispisrez["id_hotela"].'">'.$ispisrez["naziv"].'</option>';
            }
        }
        return $output;
    }
?>
<head>
    <style>
        .elem-group label{
            margin-right:150px;
            font-size:20px;
        }
        body{
            background-color:#FFE4C4;
        }
        .spisak tr th,td{
            width:90px;
        }
        .spisak tr th{
            font-size:14pt;
        }
        .spisak tr td{
            font-size:14pt;
        }
        #spisak{
            margin-left:20px;
            padding-bottom:40px;
            background-color:#F0FFFF;
        }
        form{
            margin-left:50%;
        }
        form hr{
            width:70%;
            margin-left:-35%;
            
        }
        form label{
            position:absolute;
            left:500px;
        }
    </style>
</head>
	<body>
       
<?php
include('connection.php'); 
include('html_head.php');
function IspisRezervacija(){
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    // povezivanje
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
    mysqli_select_db($conn, "agencija");
    mysqli_error($conn);

    $sql="SELECT * FROM rezervacija";
    $result=mysqli_query($conn,$sql);
    echo "<table name='spisak' id='spisak'>
        <tr align='left'>
            <th>ID</th>
            <th>Ime</th>
            <th>Email</th>
            <th>Grad</th>
            <th>Hotel</th>
            <th>Prijava</th>
            <th>Odjava</th>
            <th>Odrasli</th>
            <th>Djeca</th>
            <th>Soba</th>
            <th>Poruka</th>
            <th>Telefon</th>
        </tr>";
     while($ispisrez = @mysqli_fetch_array($result)){

        echo "<tr align='left'>"; 
        echo "<td>".$ispisrez['id_rezervacija']."</td>";
        echo "<td>".$ispisrez['ime']."</td>";
        echo "<td>".$ispisrez['email']."</td>";
        echo "<td>".$ispisrez['grad']."</td>";
        echo "<td>".$ispisrez['hotel']."</td>";
        echo "<td>".$ispisrez['datum_prijave']."</td>";
        echo "<td>".$ispisrez['datum_odjave']."</td>";
        echo "<td>".$ispisrez['odrasli']."</td>";
        echo "<td>".$ispisrez['djeca']."</td>";
        echo "<td>".$ispisrez['sobe']."</td>";
        echo "<td>".$ispisrez['poruka']."</td>";
        echo "<td>".$ispisrez['telefon']."</td>";
        echo "<td><a href=\"rezervacija_edit.php?id=".$ispisrez['id_rezervacija']."\">Ažuriraj rezervaciju</a></td>";
        echo "<td><a href=\"rezervacija_delete.php?id=".$ispisrez['id_rezervacija']."\">Briši rezervaciju</a></td>";
        echo "</tr>"; 

        // zatvaranje while petlje
          }
        //zatvaranje
        echo "</table>";
}
    ispisRezervacija();
    echo '<form action="trazirezervaciju.php" method="post" style="width:33%; margin-left:31%;margin-top:3%; font-size:18pt; font-weight:bold;margin-bottom:5%; color:black; background-color:#006B38FF; border-radius: 5px;" name="forma">
        <table>
            <tr>
                <td>Unesite Ime Uposlenika:</td> 
                <td style="padding-left:20px;font-size:14pt;"><input type="text" name="izbor" placeholder="john doe"></td>
                <td colspan="2" align="center">
                    <input type="submit" value="Search/Reset" name="dugme1" style="font-size:14pt; font-weight:bold; "/>
                </td>
            </tr>
        </table>
    </form>';
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
    if (isset($_GET['id'])){
        $idr	=	$_GET['id'];
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';

        // povezivanje
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
        mysqli_select_db($conn, "agencija");
        mysqli_error($conn);

        $sql="SELECT * FROM rezervacija WHERE id_rezervacija=$idr";
        $result=mysqli_query($conn, $sql) or die("<h2>Pogreska kod azuriranja rezervacije</h2>".mysqli_error());
        while($ispisrez = mysqli_fetch_array($result)){
            $grad=$ispisrez['grad'];
            $hotel=$ispisrez['hotel'];
            $sql2="SELECT naziv from gradovi where id_grada=$grad";
            $rezultat2=mysqli_query($con, $sql2) or die("<h2>Pogreska kod odabira grada</h2>".mysqli_error());
            
        echo '
        <form  method="post" action="rezervacija_edit.php">
                        <div class="elem-group">
							<label for="name">ID</label>
							<input type="number" id="id" name="id" placeholder="" value="'.$ispisrez['id_rezervacija'].'" pattern=[A-Z\sa-z]{3,20} required>
						</div>
						<div class="elem-group">
							<label for="name">Ime i prezime</label>
							<input type="text" id="name" name="ime" placeholder="Muamer Huskanovic" value="'.$ispisrez['ime'].'" pattern=[A-Z\sa-z]{3,20} required>
						</div>
						<div class="elem-group">
							<label for="email">E-mail</label>
							<input type="email" id="email" name="email" value="'.$ispisrez['email'].'" placeholder="muamer.h@email.com" required>
						</div>
						<div class="elem-group">
							<label for="city">Odaberite grad</label>
								<select name="gradovi" value="'.$ispisrez['grad'].' id="gradovi">
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
							<input type="tel" id="phone" name="telefon" value="'.$ispisrez['telefon'].'" placeholder="498-348-387" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{3}) required>
						</div>
						<hr>
						<div class="elem-group inlined">
							<label for="adult">Odrasli</label>
							<input type="number" id="adult" value="'.$ispisrez['odrasli'].'" name="odrasli" placeholder="2" min="1" required>
						</div>
						<div class="elem-group inlined">
							<label for="child">Djeca</label>
							<input type="number" id="child" value="'.$ispisrez['djeca'].'" name="djeca" placeholder="2" min="0" required>
						</div>
						<div class="elem-group inlined">
							<label for="checkin-date">Datum prijave</label>
							<input type="date" id="checkin-date" value="'.$ispisrez['datum_prijave'].'" name="checkin" required>
						</div>
						<div class="elem-group inlined">
							<label for="checkout-date">Datum odjave</label>
							<input type="date" id="checkout-date" value="'.$ispisrez['datum_odjave'].'" name="checkout" required>
						</div>
						<div class="elem-group">
							<label for="room-selection">Odaberite sobu</label>
							<select id="room-selection" name="tipsobe" required>
								';
                                if(1==$ispisrez['sobe']){
                                    echo '<option value="1" selected>Jeftina</option>
                                    <option value="2">Prosječna</option>
								    <option value="3">Skupa</option>';
                                }else if(2==$ispisrez['sobe']){
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
							<textarea id="message" value="" name="poruka" placeholder="" required>'.$ispisrez['poruka'].'</textarea>
						</div>
                        <input type="submit" name="azuriraj" value="Ažuriraj rezervaciju">
					</form>';
        }
    }
?>
    </body>
</html>