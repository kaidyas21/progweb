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
    $nom=$_REQUEST["nom"];
    $commentaire=$_REQUEST["commentaire"];
    
    $record=array(
        'nom'=>"$nom",
        'commentaire'=>"$commentaire",
       
    );
    $database->insert("lieux",$record);
}



$records=$database->select("lieux", [
    "nom",
    "commentaire"
    
]);


echo "<pre>";
print_r($records);
echo "</pre>";
require 'tail.php';