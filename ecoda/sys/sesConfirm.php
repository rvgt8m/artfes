<?php
    session_start();

    $name = validateData("name");
    $mail = validateData("mail");
    $toiawase = validateData("toiawase");

    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error_mail'] = 1;
    }

    if($_SESSION['error_name'] || $_SESSION['error_mail'] || $_SESSION['error_toiawase']){
//        header("Location: ./index.php");
//        exit();
    }

    require('sesConfirmHtml.php');

    function validateData($key){
        if(is_null($_POST["$key"]) || empty($_POST["$key"]) || !is_string($_POST["$key"])){
            $_SESSION["$key"] = $_POST["$key"];
            $_SESSION["error_" . $key] = 1;
            return "";
        }else{
            $_SESSION["$key"] = $_POST["$key"];
            $_SESSION["error_" . $key] = 0;
            return $_POST["$key"];
        }
    }