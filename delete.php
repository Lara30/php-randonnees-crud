<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

include ('connexion.php'); 

$modif = $bdd->exec("UPDATE hiking SET name = 'David' , difficulty = 'facile' , distance = '23' , duration = '07:07:07' , height_difference = '1500' WHERE ID = 12 "); 

echo $modif . " Modified with succès "; 

?>

<a href="read.php"> Read </a>

</body>
</html>
=======
<?php
/**** Supprimer une randonnée ****/
>>>>>>> 6c20be15cf5e3a9db4b0f7c302680252d67ecacd
