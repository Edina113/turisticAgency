<?php

	if (isset($_POST["posalji"])) {
        $to="huskanovic998@gmail.com";
        $ime=$_POST['ime'];
        $email=$_POST['email'];
        $grad=$_POST['grad'];
        $poruka=$_POST['poruka'];

        $msg=$ime." vam je poslao email \n Grad:".$grad."\n Poruka glasi:....................\n". $_POST['poruka'];

        mail($to,"Email",$msg);

    }
?>