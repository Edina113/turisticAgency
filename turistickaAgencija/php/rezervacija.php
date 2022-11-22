<?php
echo "Mislis";
if (isset($_POST['ime'])) {
    echo "Proslo";
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
    $sql="INSERT INTO rezervacija(ime,email,grad,hotel,datum_prijave,datum_odjave,odrasli,djeca,sobe,poruka,telefon) VALUES ('$ime','$email','$gradovi','$hotel',
        '$datumPrijave','$datumOdjave','$odrasli','$djeca','$sobe','$poruka','$telefon')";
    $result=mysqli_query($conn,$sql);
    $sqlKlijent="INSERT INTO klijent(ime,email) VALUES ('$ime','$email') ";
    $result1=mysqli_query($conn,$sqlKlijent);
    
        if (!$result){
            printf("Error : %s\n", mysqli_error($conn));
            echo "Nista";
            exit();
        }
        if($result){
            echo "<script>alert('Uspješno ste izvršili rezervaciju)</script>";
            header("Location: ../index.php");
        }
        }
?>