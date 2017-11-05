<?php
    $idErr = $fnErr = $genErr = $ayErr = $cellErr = $emErr = $degErr = "";
    $idnum = $fname = $gen = $lname = $ay = $cell = $em = $deg = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idnum = $_POST["idnum"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gen = $_POST["gender"];
        $ay = $_POST["ay"];
        $cell = $_POST["cphone"];
        $em = $_POST["email"];
        $idnum = $_POST["idnum"];
        if(isset($_POST["degree"])){
          $deg = $_POST["degree"];  
        }
        

        if(!preg_match("/^[0-9]{7}$/",$idnum)){
            $idErr = "Invalid ID Number!";
        }

        if(!preg_match("/^[A-Z][a-z]*$/",$_POST["fname"]) || !preg_match("/^[A-Z][a-z]*$/",$_POST["lname"])){
            $fnErr = "Must Start With Capital Letter";
        }

        if(empty($gen)){
            $genErr = "Must Select A Gender";
        }

        if(!preg_match("/^[0-9]{4}\/[0-9]{2}$/",$ay)){
            $ayErr = "Invalid AY date";
        }

        if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$cell)){
            $ayErr = "Invalid AY date";
        }

        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            $emErr = "Invalid email format"; 
        }

        if(empty($deg)){
            $degErr = "Must Select A Course";
        }

    }

    /*$handle = fopen('test.txt','a');
    $data = "Test data";
    $Data = "Test Data";
    $DATA = "Test DATA";
    fwrite($handle, $data.", ".$Data.", ".$DATA.PHP_EOL);
    fclose($handle);*/
    
?>