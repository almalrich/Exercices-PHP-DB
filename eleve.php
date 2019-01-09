<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 11:27
 */

$servername = "localhost";
$username = "id7331190_seb";
$password = "";
$dbname = "id7331190_nouvelles";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){

    die("Connection failed: " . $conn->connect_error);
}
else
{
// Selectionner la base à utiliser
    $conn->select_db($dbname);

}

$id = $_GET['id'];

function mugsEleve ($id_eleve, $conn)
{

    $sql = "SELECT mugs.description FROM eleve_mugs,mugs WHERE eleve_mugs.id_eleve = '$id_eleve' and eleve_mugs.id_mugs = mugs.id ";
    $resultat = $conn->query($sql);
    $mugs = [];
    while($row = $resultat->fetch_assoc()){
        array_push($mugs, $row);
    }
    return $mugs;
}
$test = mugsEleve($_GET['id'], $conn);

for ($i=0; $i<count('SELECT id FROM mugs');$i++){
    echo $test[$i]['description'];



}






