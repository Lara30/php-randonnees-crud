<?php

$servername = "localhost";
$username = "root";
$password = "coda";

try {
	$bdd = new PDO("mysql:host=$servername;dbname=reunion_island", $username, $password);
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

	echo "Connexion réussi";
}s


catch(PDOException $e)

{

	echo "Connexion échouée: " . $e->getMessage();

}

?>
