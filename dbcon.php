<?php 
try{

//CREATING DATABASE VARIABLES
$hostname = "localhost";

$dbname = "hrzonal";

$user = "root";

$password = "";

//CONNCECTING TO DB


$conn = new PDO("mysql:host=$hostname;dbname=$dbname",$user,$password);

//ERROR HANDELING
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo $e->getMessage();
}
 
 
?>