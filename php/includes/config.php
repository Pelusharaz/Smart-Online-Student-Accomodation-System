<?php
$host = 'localhost';
$db_name = 'smart-accommodation';
$username = 'root';
$password ='';

try {
    //code...
    $DBH =new PDO("mysql:host=$host; dbname=$db_name", $username, $password);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    //throw $th;
    echo $e->getMessage();
}
?>
