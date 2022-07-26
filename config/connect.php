<?php

define('HOST','localhost');
define('DB','gamestar');
define('USER','root');
define('PASS','');

try{
    
    $conn = new PDO("mysql:dbname=".DB.";host=".HOST.";",USER,PASS);
   
} catch (PDOException $e){
    echo "Não foi possível conectar<br>";
    echo $e->getMessage();
    echo "mysql:dbname=".DB.";host=".HOST.";".USER,PASS;

}


