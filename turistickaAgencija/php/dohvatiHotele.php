<?php
    $connect=mysqli_connect("localhost","root","","agencija");
    $output='';
    $sql2="SELECT * FROM hoteli WHERE id_grada='".$_POST["gradID"]."' ORDER BY 1";
    $result=mysqli_query($connect,$sql2);
    $output='<option value="">Hoteli</option>';
    while($ispisrez = mysqli_fetch_array($result)){
       $output.='<option value="'.$ispisrez["id_hotela"].'">'.$ispisrez["naziv"].'</option>';

    }
    echo $output;
?>