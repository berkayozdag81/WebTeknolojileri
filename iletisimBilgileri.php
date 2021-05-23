<?php
    var_dump($_POST);
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $eposta = $_POST["eposta"];
    $telefon = $_POST["telefon"];
    $cinsiyet = $_POST["cinsiyet"];
    $mesaj = $_POST["mesaj"];
    $konu = $_POST["konu"];

    if(isset($ad) != "" && isset($soyad) != "" && isset($eposta) != "" && isset($telefon) != "" &&isset($cinsiyet) != ""&&isset($mesaj) != ""&& isset($konu) != ""){
        echo "isim    :"." " . $ad . "<pre>";
        echo "soyisim   :". " " .$soyad . "<pre>";
        echo "e-posta   :". " " . $eposta . "<pre>";
        echo "telefon   :". " " . $telefon . "<pre>";
        echo "cinsiyet   :". " " . $cinsiyet . "<pre>";
        echo "mesaj   :". " " . $mesaj . "<pre>";
        echo "konu   :". " " . $konu . "<pre>";
    }
    else {
        header("Location: iletisim.html");
    }
?>