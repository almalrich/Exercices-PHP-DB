<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

<<<<<<< HEAD
$servername = "localhost";
$username = "id7331190_seb";
$password = "";
$dbname = "id7331190_nouvelles";
=======
>>>>>>> parent of 178bb07... 1er commit







<<<<<<< HEAD

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
{ echo $row['id']." ".$row['prenom']." ". $row['nom']." ".$row['age']." ";
echo "<a href='eleve.php?id=".$row ['id']."'>voir l'eleve</a><br>";
}
}

//name();

function deletEleves ($id, $conn){

    $sql = "DELETE from eleves where id = $id";
    $conn->query($sql);

}
//deletEleves(10,$conn);

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

if (isset($_GET['id']) )
{
    $index= $_GET['id'];

    $sql = "DELETE from eleves where id = '$index'";
    $conn->query($sql);


    deletEleves($index,$conn);

}

if (!empty($_GET['afficher'])){
    name();
}

if (isset($_GET['mettre_a_jour'])){
   mettreAJour($_GET['id1'],$_GET['prenom1'], $_GET['nom1'], $_GET['age1'], $conn );
}


function mugs ($description, $conn)
{
    $sql = "INSERT INTO mugs VALUES (NULL,'$description')";

    $conn->query($sql);
}

if (isset ($_GET['couleur'])) {

    $nouvelleCouleur = $_GET["couleur"];

    mugs($nouvelleCouleur, $conn);
}

function associatier($id_eleve, $id_mugs){


    global $conn;

    $sql = "INSERT INTO eleve_mugs VALUES (NULL,'$id_eleve', '$id_mugs')";
    $conn->query($sql);

}

if (isset($_GET['nom'])&& isset($_GET['mugs'])) {
    associatier($_GET['nom2'], $_GET['mugs']);
}
function mugsEleve ($id_eleve, $conn)
{
    $sql = "SELECT * FROM eleves WHERE id='$id_eleve'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    { echo $row['prenom']." ". $row['nom']." ";

    }
  $sql = "SELECT mugs.description FROM eleve_mugs,mugs WHERE eleve_mugs.id_eleve = '$id_eleve' and eleve_mugs.id_mugs = mugs.id ";
    $conn->query($sql);
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc())
    { echo $row['description']." ";

    }
}

mugsEleve($_GET['id6'],$conn);

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
    <input type="submit" value="ajouter"><br>

</form>


<form action="index.php" method="get">
id: <input type="text" name="id"><br>
<input type="submit" name="enlever" value="enlever"><br>
</form>


<form action="index.php" method="get">
    <input type="submit" name="afficher" value="afficher"><br>
</form>

<form action="index.php" method="get">
    id:<input type="text" name="id1"><br>
    prenom: <input type="text" name="prenom1"><br>
    nom: <input type="text" name="nom1"><br>
    age: <input type="text" name="age1"><br>
    <input type="submit" name="mettre_a_jour" value="mettre_a_jour"><br>

</form>

<form action="index.php" method="get">
  couleur du mugs: <input type="text" name="couleur"><br>
    <input type="submit" value="ajouter">

</form>

<form action="index.php" method="get">
    eleve: <input type="text" name="nom2"><br>
    mugs: <input type="text" name="mugs"><br>
    <input type="submit" value="mugs">

</form>

<form action="index.php" method="get">
id: <input type="text" name="id6"><br>
<input type="submit" name="id7" value="mugs">

</body>
</html>
=======
>>>>>>> parent of 178bb07... 1er commit
