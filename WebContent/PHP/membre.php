<?php
require 'head.php';
include 'head.php';
require 'Medoo.php'; // https://medoo.in/
use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'inf3190',
    'server' => 'localhost',
    'username' => 'inf3190',
    'password' => 'Ab123456',
    'prefix' => ''
]);

if(isset($_REQUEST["soumettre"]))
{
    $prenom=$_REQUEST["prenom"];
    $nom=$_REQUEST["nom"];
    $datenaissance=$_REQUEST["datenaissance"];
    $photo=$_REQUEST["photo"];
    $fonction=$_REQUEST["fonction"];
    
    
    $record=array(
        'nom'=>"$nom",
        'prenom'=>"$prenom",
        'datenaissance'=>"$datenaissance",
        'photo'=>"$photo",
        'fonction'=>"$fonction"
        
       
    );
    $database->insert("membres",$record);
}



$records=$database->select("membres", [
    "nom",
    "prenom",
    "datenaissance",
    "photo",
    "fonction",
    
    
]);


echo "<pre>";
print_r($records);
echo "</pre>";
require 'tail.php';