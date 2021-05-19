<?php
    $eposta = $_POST['eposta'];
    $sifre = $_POST['sifre'];

    if($eposta == "b191210051@sakarya.edu.tr" && $sifre == "1903"){
        echo "Hoşgeldin ". $eposta;
    }else{
        header("Location:./Login.html?eposta=$eposta");
    }
?>