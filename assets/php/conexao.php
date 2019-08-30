<?php
    class Connect {
        
        function Con(){

            $servername = "localhost";
            $database = "almoxarifado";
            $username = "root";
            $password = "";
            
            try{                
                $conn = new PDO("mysql:host=".$servername.";dbname=".$database, $username, $password);
                $pdo = $conn;
                $pdo->exec("set names utf8");
                return $pdo;

            } 
            catch (PDOException $e){
                $errorMsg = $e->getMessage();
                echo $errorMsg;
            }
                       
        }
                  
    }
?>