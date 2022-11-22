<?php
//konfiguracija baze podataka
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect('localhost', 'root','');
if(!$conn){
  die('Neuspješna konekcija: ' . mysqli_error($conn));
}
$db_selected = mysqli_select_db($conn, 'agencija');
if(!$db_selected){
  $sql1="CREATE DATABASE IF NOT EXISTS agencija";
if(mysqli_query($conn, $sql1)){
  echo "Uspješno kreirano \n";
}else{
  echo 'Error'. mysqli_error($sql1);
}
}
$dbname=mysqli_select_db($conn, "agencija") or die ("Nije odabrana baza.");
mysqli_select_db($conn, "agencija");  
@mysqli_select_db($conn, $dbname);
@mysqli_query($conn, "SET NAMES 'utf8'");
@mysqli_query($conn, "SET CHARACTER SET 'utf8'");
@mysqli_query($conn, "SET COLLATION_CONNECTION='utf8_unicode_ci'");
$sql = "CREATE TABLE IF NOT EXISTS klijent(ID_klijent INT(5) PRIMARY KEY NOT NULL,
       ime VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, grad VARCHAR(100) NOT NULL  )";
  mysqli_query ($conn, $sql) or die("Tabela nije kreirana. ");

  $sql = "CREATE TABLE IF NOT EXISTS rezervacija(ID_rezervacija INT(5) PRIMARY KEY NOT NULL,
  ime VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, grad VARCHAR(100) NOT NULL, hotel VARCHAR(50) NOT NULL, datum_prijave date NOT NULL,
  datum_odjave date NOT NULL, udobnost VARCHAR(50) NOT NULL, odrasli int(4) NOT NULL, djeca int(4) NOT NULL,
  sobe INT(3) NOT NULL,
  FOREIGN KEY(grad) REFERENCES klijent(grad))";
mysqli_query ($conn, $sql) or die("Tabela nije kreirana. ");


$sql="CREATE TABLE IF NOT EXISTS  gradovi (
      id_grada int(4) NOT NULL primary key,
      naziv varchar(25))";
  mysqli_query ($conn, $sql) or die("Tabela nije kreirana. ");


$sql="CREATE TABLE IF NOT EXISTS hoteli(
      id_hotela int(4) not null auto_increment primary key,
      naziv varchar(40),
      id_grada int(4) not null,
      FOREIGN KEY (id_grada) REFERENCES gradovi(id_grada))";
  mysqli_query ($conn, $sql) or die("Tabela nije kreirana. ");