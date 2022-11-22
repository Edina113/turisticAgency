<!DOCTYPE html>
<html>
<head>
<style>
        .elem-group label{
            margin-right:150px;
            font-size:20px;
        }
        body{
            background-color:#FFE4C4;
        }
        table tr th,td{
            width:90px;
        }
        table tr th{
            font-size:14pt;
        }
        table tr td{
            font-size:14pt;
        }
        table{
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
    echo "<table>
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

        if (isset($_GET['id'])) {
            $idr	=	$_GET['id'];
            $sql="DELETE FROM rezervacija WHERE id_rezervacija=$idr";
            $result=mysqli_query($con, $sql) or die("<h2>Pogreska kod brisanja rezervacije</h2>".mysqli_error());
                if ($result){
                    echo "<h2>Uspješno je izbrisana rezervacija sa šifrom: <b>$idr</b> !</h2><br>";
                    ispisRezervacija();
                }	
        }
?>
</html>