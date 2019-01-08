<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

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




function ana ($prenom, $nom, $age, $conn){
    $sql = "INSERT INTO eleves VALUES (NULL,'$prenom','$nom','$age')";

    echo $sql;

    $conn->query($sql);
}
//ana("romain","bon",26,$conn);


function name (){
global $conn;
    $sql = "SELECT * FROM eleves";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{ echo $row['prenom']." ". $row['nom']." ".$row['age']."<br>";}
}

//name();

function deletEleve ($id, $conn){

    $sql = "DELETE from eleves where id = $id"; $conn->query($sql);



}
//deletEleve(10,$conn);

function mettreAJour($id, $prenom, $nom, $age, $conn){
    $sql= "UPDATE eleves set prenom='$prenom', nom='$nom', age='$age' WHERE id='$id'";
    $conn->query($sql);
}
//mettreAJour(11, "seb", "bon", 26, $conn );

if (isset($_GET['nom'])&& isset($_GET['prenom']) && isset($_GET['age']) )
{
    $nouveauNom=$_GET["nom"];
    $nouveauPrenom=$_GET["prenom"];
    $nouveauAge=$_GET["age"];

    ana($nouveauPrenom,$nouveauNom,$nouveauAge,$conn);

}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
   prenom: <input type="text" name="prenom"><br>
    nom: <input type="text" name="nom"><br>
    age: <input type="text" name="age"><br>
    <input type="submit" value="ajouter">

</form>


</body>
</html>
