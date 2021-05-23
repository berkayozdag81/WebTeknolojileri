<?php
    $eposta = $_POST["eposta"];
    $sifre = $_POST["sifre"];
   
    if($_SERVER["REQUEST_METHOD"] == "POST"){    
        if(empty($_POST["eposta"])) {
            $emailErr = "Bir mail adresi girilmelidir";
        }else{
            $email = test_input($_POST["eposta"]);
            // check if e-mail address is well-formed
            if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)){
             
             header("Location:./Login.html");
            }elseif($eposta == "b191210051@sakarya.edu.tr" && $sifre == "b191210051"){
              header("Location:./index.html");
                echo "Hoşgeldin"." ".$sifre ;
            }else{
             header("Location:./Login.html");
            }
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>