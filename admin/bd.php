<?php

$host = "localhost";
$dbName = "virus";
$user = "root";
$password = "";

try{
    $base = new PDO('mysql:dbname='.$dbName.';host='.$host, 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}

catch(Exception $e){
     die("ERROR : ". $e->getMessage());
}
?>

<?php