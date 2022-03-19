<?php 

    /*$host = "localhost";
    $dbname = "db04";
    $login = "root";
    $password = "";

    try{
        $conn = new PDO("mysql: host = $host; dbname = $dbname", $login, $password);
        //echo "Connection Established Successfully!";
    }catch(PDOException $erro){
        echo "Connection Established Not Successfully. Erro: " . $erro->getMessage();
    }*/

    $conn = new PDO("mysql: host=localhost; dbname=db04", "root", "");
    

?>