<!DOCTYPE html>
<html>

<head>
    <style>
    <style>.elem-group label {
        margin-right: 150px;
        font-size: 20px;
    }

    body {
        background-color: #FFE4C4;
    }

    table tr th,
    td {
        width: 90px;
    }

    table tr th {
        font-size: 14pt;
    }

    table tr td {
        font-size: 14pt;
    }

    table {
        margin-left: 20px;
        padding-bottom: 40px;
        background-color: #F0FFFF;
    }

    form {
        margin-left: 50%;
    }

    form hr {
        width: 70%;
        margin-left: -35%;

    }

    form label {
        position: absolute;
        left: 500px;
    }
    </style>
    </style>
</head>

<body>
    <?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Uspješna prijava </center></h1>";             
                    
                    $sql="SELECT * FROM rezervacija";
               
                    $rezultat1=mysqli_query($con,$sql);
                    echo '<table>
                        <tr align="left">
                            <th>ID</th>
                            <th>Ime</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Grad</th>
                            <th>Hotel</th>
                            <th>Datum prijave</th>
                            <th>Datum odjave</th>
                            <th>Odrasli</th>
                            <th>Djeca</th>
                            <th>Soba</th>
                            <th>Poruka</th>
                        </tr>';
                    foreach($rezultat1 as $row){
                        
                        $id=$row['id_rezervacija'];
                        $ime=	$row['ime'];
                        $email=	$row['email'];
                        $gradovi=	$row['grad'];
                        $hotel=	$row['hotel'];
                        $datumPrijave=	$row['datum_prijave'];
                        $datumOdjave=	$row['datum_odjave'];
                        $odrasli=	$row['odrasli'];
                        $djeca=	$row['djeca'];
                        $sobe=	$row['sobe'];
                        $poruka=	$row['poruka'];
                        $telefon=$row['telefon'];
                            //Za ispisivanje postojecih uposlenika preko ID
                            
                            
                            echo '<tr align="left">';
                            echo "<tr>"; 
                            echo "<td>".$id."</td>";
                            echo "<td>".$ime."</td>";
                            echo "<td>".$email."</td>";
                            echo "<td>".$telefon."</td>";
                            echo "<td>".$gradovi."</td>";
                            echo "<td>".$hotel."</td>";
                            echo "<td>".$datumPrijave."</td>";
                            echo "<td>".$datumOdjave."</td>";
                            echo "<td>".$odrasli."</td>";
                            echo "<td>".$djeca."</td>";
                            echo "<td>".$sobe."</td>";
                            echo "<td>".$poruka."</td>";
                            
                            echo "<td><a href=\"rezervacija_edit.php?id=".$id."\">Ažuriraj rezervaciju</a></td>";
                            echo "<td><a href=\"rezervacija_delete.php?id=".$id."\">Briši rezervaciju</a></td>";
                            echo "</tr>";
                    }
                    echo "</table>";
                
        }else{  
            echo "<h1> Prijavite se ponovo. Pogrešan unos korisničkog imena ili lozinke.</h1>"; 
        };
?>
</body>

</html>